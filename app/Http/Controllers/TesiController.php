<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Autor;
use App\Models\Carrera;
use App\Models\Etiqueta;
use App\Models\Tesi;
use App\Models\TipoTesi;
use Illuminate\Http\Request;
use App\Exports\TesisExport;
use Excel;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValidacionTesis;
/**
 * Class TesiController
 * @package App\Http\Controllers
 */
class TesiController extends Controller
{
    protected $tesis;

    function __construct()
    {
         $this->middleware('permission:ver-tesis|crear-tesis|editar-tesis|borrar-tesis|permission:habilitar-tesis')->only('index');
         $this->middleware('permission:crear-tesis', ['only' => ['create','store']]);
         $this->middleware('permission:editar-tesis', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-tesis', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tesis = Tesi::paginate();

    //     return view('tesi.index', compact('tesis'))
    //         ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $usuario = auth()->user()->id;
        $consulta = DB::table('roles')->where('name', 'Trabajador')->first()->id;
        $esTrabajador = DB::table('model_has_roles')
                    ->where('role_id', $consulta)
                    ->where('user_id', $usuario);
        $buscarpor=$request->get('buscarpor');
        $tesis=Tesi::where('nombreTes','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        $tesU = Tesi::where('idUsuario','=', $usuario )->paginate($this::PAGINACION);
        
        return view('tesi.index', compact('tesis','buscarpor','tesU','esTrabajador'))
        ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    }

    public function pdf()
    {
        $tesis = Tesi::paginate(10000);

        $pdf = PDF::loadView('tesi.pdf', compact('tesis'));
        return $pdf->download('tesi.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new TesisExport, 'tesis-list.xls');
    }
    public function estado($id)
    {
        $tesis = Tesi::FindOrFail($id);
        if($tesis['estado'] == 1){
            $tesis['estado'] = 0;
        }else{
            $tesis['estado'] = 1;
        }
        $tesis->update(); 
        return redirect()->route('tesis.index')
        ->with('success', 'Estado de la tesis actualizado correctamente');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tesi = new Tesi();
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $carreras = Carrera::pluck('nombreCarrera','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipotesis = TipoTesi::pluck('nombreTesis','id');
    return view('tesi.create', compact('tesi','autors','etiquetas','tipotesis','carreras'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $url = env('APP_URL');
        $newLink = "$url/tesis/";
        $request['estado'] = 0;
        request()->validate(Tesi::$rules);
            $tesi = $request->all();
       
               if($documentoTes = $request->file('documentoTes')) {
                   $rutaGuardarTesis = 'archivosTes/';
                   $documentoTesTesis = date('YmdHis'). "." .$documentoTes->getClientOriginalExtension();
                   $documentoTes->move($rutaGuardarTesis, $documentoTesTesis);
                   $tesi['documentoTes'] = "$documentoTesTesis";
               }
            
               $email= "ethanprueba1234@gmail.com";
               $messages ="Es necesario hacer una revisión para la validación del estado del registro";
               
               Mail::to($email)->send(new ValidacionTesis($email,$messages,$newLink));

               Tesi::create($tesi);
                 return redirect()->route('tesis.index')
        ->with('success', 'Tesi creado exitosamente.');



    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tesi = Tesi::find($id);

        return view('tesi.show', compact('tesi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = auth()->user()->id;
        $consulta = DB::table('roles')->where('name', 'Trabajador')->first()->id;
        $esTrabajador = DB::table('model_has_roles')
                    ->where('role_id', $consulta)
                    ->where('user_id', $usuario);
        $tesi = Tesi::find($id);
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $carreras = Carrera::pluck('nombreCarrera','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipotesis = TipoTesi::pluck('nombreTesis','id');
        return view('tesi.edit', compact('tesi','autors','etiquetas','tipotesis','carreras','esTrabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tesi $tesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          
            $tesi = Tesi::findOrFail($id);
            $tesi->nombreTes= $request->get('nombreTes');
            $tesi->descripcionTes= $request->get('descripcionTes');
            $tesi->carrera_id= $request->get('carrera_id');
            $tesi->tipotesis_id= $request->get('tipotesis_id');
            $tesi->autor_id= $request->get('autor_id');
            $tesi->etiqueta_id= $request->get('etiqueta_id');
            $tesi->fechaPublicacionTes= $request->get('fechaPublicacionTes');
                if($request->hasFile('documentoTes')){
                    $file = $request->documentoTes;
                    $file->move(public_path(). '/archivosTes', $file->getClientOriginalName());
                    $tesi->documentoTes = $file->getClientOriginalName();
                }
        
            $tesi->update(); 
            return redirect()->route('tesis.index')
            ->with('success', 'Tesis actualizada correctamente');



    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tesis = Tesi::FindOrFail($id);

        if (file_exists('archivosTes/' . $tesis['documentoTes']) and !empty($tesis['documentoTes'])) {
            unlink('archivosTes/' . $tesis['documentoTes']);
        }
    
        $tesis->delete();
    
        return redirect()->route('tesis.index')
            ->with('success', 'tesis deleted successfully');
    }
}

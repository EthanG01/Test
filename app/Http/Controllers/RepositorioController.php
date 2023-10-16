<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Repositorio;
use App\Exports\RepositorioExport;
use App\Models\Autor;
use Excel;
use PDF;
use App\Models\Carrera;
use App\Models\Persona;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValidacionRepositorio;

class RepositorioController extends Controller
{
    protected $repositorios;
 
    function __construct()  
    {
         $this->middleware('permission:ver-repositorio|crear-repositorio|editar-repositorio|borrar-repositorio|permission:habilitar-repositorio')->only('index');
         $this->middleware('permission:crear-repositorio', ['only' => ['create','store']]);
         $this->middleware('permission:editar-repositorio', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-repositorio', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    const PAGINACION=10;
    public function index(Request $request)
    {
        $usuario = auth()->user()->id;
        $consulta = DB::table('roles')->where('name', 'Trabajador')->first()->id;
        $esTrabajador = DB::table('model_has_roles')
                    ->where('role_id', $consulta)
                    ->where('user_id', $usuario);
        $buscarpor=$request->get('buscarpor');
        $repositorios=Repositorio::where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        $repU = Repositorio::where('idUsuario','=', $usuario )->paginate($this::PAGINACION);
    
        return view('repositorio.index', compact('repositorios','buscarpor','repU','esTrabajador'))
        ->with('i', (request()->input('page', 1) - 1) * $repositorios->perPage());
    }

    public function pdf()
    {
        $repositorios = Repositorio::paginate(10000);

        $pdf = PDF::loadView('repositorio.pdf', compact('repositorios'));
        return $pdf->download('repositorio.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new RepositorioExport, 'repositorios-list.xls');
    }
    public function estado($id)
    {
        $repositorios = Repositorio::FindOrFail($id);
        if($repositorios['estado'] == 1){
            $repositorios['estado'] = 0;
        }else{
            $repositorios['estado'] = 1;
        }
        $repositorios->update(); 
        return redirect()->route('repositorioNuevo.index')
        ->with('success', 'Estado del repositorio actualizado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repositorios = Repositorio::find($id);

        return view('repositorio.show', compact('repositorios'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $repositorios = new Repositorio();
        $carreras = Carrera::pluck('nombreCarrera','id');
        $autors = Autor::pluck('nombreAutor','id');
        return view('repositorio.create', compact('repositorios','carreras','autors'));
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
        $newLink = "$url/repositorioNuevo/";
        $request['estado'] = 0;
   request()->validate(Repositorio::$rules);

             $repositorios = $request->all();
                if($RepositorioPDF = $request->file('documento')) {
                    $rutaGuardarRepositorio = 'repositorio/';
                    $documentoRepositorioPDF = date('YmdHis'). "." .$RepositorioPDF->getClientOriginalExtension();
                    $RepositorioPDF->move($rutaGuardarRepositorio, $documentoRepositorioPDF);

                    $repositorios['documento'] = "$documentoRepositorioPDF";
                }
                $email= "ethanprueba1234@gmail.com";
                $messages ="Es necesario hacer una revisión para la validación del estado del registro";
                Mail::to($email)->send(new ValidacionRepositorio($email,$messages,$newLink));
                
                Repositorio::create($repositorios);
                      return redirect()->route('repositorioNuevo.index')
            ->with('success', 'Repositorio creado exitosamente.');
    
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
        $repositorios = Repositorio::find($id);
        $carreras = Carrera::pluck('nombreCarrera','id');
        $autors = Autor::pluck('nombreAutor','id');
        return view('repositorio.edit', compact('repositorios','carreras','autors','esTrabajador'));
    }
        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Repositorio $libroRevista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $repositorios = Repositorio::findOrFail($id);
        $repositorios->autor_id= $request->get('autor_id');
        $repositorios->carrera_id= $request->get('carrera_id');
        $repositorios->nombre= $request->get('nombre');
        $repositorios->fecha= $request->get('fecha');
        $repositorios->descripcion= $request->get('descripcion');
        $repositorios->tipo= $request->get('tipo');

            if($request->hasFile('documento')){
                $file = $request->documento;
                $file->move(public_path(). '/repositorio', $file->getClientOriginalName());
                $repositorios->documento = $file->getClientOriginalName();
            }
    
        $repositorios->update(); 
        return redirect()->route('repositorioNuevo.index')
        ->with('success', 'Repositorio actualizado correctamente');

        
    }
    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $repositorios = Repositorio::FindOrFail($id);

        if (file_exists('repositorio/' . $repositorios['documento']) and !empty($repositorios['documento'])) {
			unlink('repositorio/' . $repositorios['documento']);
		}

        $repositorios->delete();

        return redirect()->route('repositorioNuevo.index')
            ->with('success', 'repositorios deleted successfully');
    }
}

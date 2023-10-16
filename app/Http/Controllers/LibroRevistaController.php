<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Etiqueta;
use App\Models\LibroRevista;
use App\Models\TipoLibro;
use Illuminate\Http\Request;
use App\Exports\LibrosRevistaExport;
use Excel;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValidacionLibroRevista;
/**
 * Class LibroRevistaController
 * @package App\Http\Controllers
 */
class LibroRevistaController extends Controller
{
    protected $libroRevistas;
    function __construct()
    {
         $this->middleware('permission:ver-libroRevista|crear-libroRevista|editar-libroRevista|borrar-libroRevista|permission:habilitar-libroRevista')->only('index');
         $this->middleware('permission:crear-libroRevista', ['only' => ['create','store']]);
         $this->middleware('permission:editar-libroRevista', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-libroRevista', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $libroRevistas = LibroRevista::paginate();

    //     return view('libro-revista.index', compact('libroRevistas'))
    //         ->with('i', (request()->input('page', 1) - 1) * $libroRevistas->perPage());
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
        $libroRevistas=LibroRevista::where('titulo','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        $libroU = LibroRevista::where('idUsuario','=', $usuario )->paginate($this::PAGINACION);
        return view('libro-revista.index', compact('libroRevistas','buscarpor','libroU','esTrabajador'))
        ->with('i', (request()->input('page', 1) - 1) * $libroRevistas->perPage());
    }

    public function pdf()
    {
        $libroRevistas = LibroRevista::paginate(10000);

        $pdf = PDF::loadView('libro-revista.pdf', compact('libroRevistas'));
        return $pdf->download('libro-revista.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new LibrosRevistaExport, 'libroRevista-list.xls');
    }
    public function estado($id)
    {
        $libroRevistas = LibroRevista::FindOrFail($id);
        if($libroRevistas['estado'] == 1){
            $libroRevistas['estado'] = 0;
        }else{
            $libroRevistas['estado'] = 1;
        }
        $libroRevistas->update(); 
        return redirect()->route('libro-revistas.index')
        ->with('success', 'Estado del libroRevistas actualizado correctamente');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libroRevista = new LibroRevista();
        $editorials = Editorial::pluck('nombreEditorial','id');
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipolibros = TipoLibro::pluck('nombreLibro','id');
        return view('libro-revista.create', compact('libroRevista','etiquetas','editorials','autors','tipolibros'));
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
        $newLink = "$url/libro-revistas/";
        $request['estado'] = 0;
   request()->validate(LibroRevista::$rules);
        
             $libroRevista = $request->all();
        
                if($documentoLR = $request->file('documentoLR')) {
                    $rutaGuardarLibro = 'libros/';
                    $documentoLRLibroRevista = date('YmdHis'). "." .$documentoLR->getClientOriginalExtension();
                    $documentoLR->move($rutaGuardarLibro, $documentoLRLibroRevista);
                    $libroRevista['documentoLR'] = "$documentoLRLibroRevista";
                }
                $email= "ethanprueba1234@gmail.com";
                $messages ="Es necesario hacer una revisión para la validación del estado del registro";
                Mail::to($email)->send(new ValidacionLibroRevista($email,$messages,$newLink));
                LibroRevista::create($libroRevista);
                      return redirect()->route('libro-revistas.index')
            ->with('success', 'LibroRevista creado exitosamente.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libroRevista = LibroRevista::find($id);

        return view('libro-revista.show', compact('libroRevista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioss = auth()->user()->id;
        $consulta = DB::table('roles')->where('name', 'Trabajador')->first()->id;
        $esTrabajador = DB::table('model_has_roles')
                    ->where('role_id', $consulta)
                    ->where('model_id', $usuarioss);
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $libroRevista = LibroRevista::find($id);
        $editorials = Editorial::pluck('nombreEditorial','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipolibros = TipoLibro::pluck('nombreLibro','id');
        return view('libro-revista.edit', compact('libroRevista','etiquetas','editorials','autors','tipolibros','esTrabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LibroRevista $libroRevista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
   
        $libroRevista = LibroRevista::findOrFail($id);
        $libroRevista->edicion= $request->get('edicion');
        $libroRevista->titulo= $request->get('titulo');
        $libroRevista->cant_pag= $request->get('cant_pag');
        $libroRevista->editorial_id= $request->get('editorial_id');
        $libroRevista->tipolibro_id= $request->get('tipolibro_id');
        $libroRevista->autor_id= $request->get('autor_id');
        $libroRevista->etiqueta_id= $request->get('etiqueta_id');
     

        $libroRevista->fechaPublicacionLR= $request->get('fechaPublicacionLR');
            if($request->hasFile('documentoLR')){
                $file = $request->documentoLR;
                $file->move(public_path(). '/libros', $file->getClientOriginalName());
                $libroRevista->documentoLR = $file->getClientOriginalName();
            }
    
        $libroRevista->update(); 
        return redirect()->route('libro-revistas.index')
        ->with('success', 'Libro/Revista actualizado correctamente');

        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libroRevista = LibroRevista::FindOrFail($id);

        if (file_exists('libros/' . $libroRevista['documentoLR']) and !empty($libroRevista['documentoLR'])) {
			unlink('libros/' . $libroRevista['documentoLR']);
		}

        $libroRevista->delete();

        return redirect()->route('libro-revistas.index')
            ->with('success', 'libroRevista deleted successfully');
    }
}

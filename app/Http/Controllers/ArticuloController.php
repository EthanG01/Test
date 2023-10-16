<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;
use App\Models\Autor;
use App\Models\Etiqueta;
use App\Models\Indicador;
use App\Models\TipoArticulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\ArticuloExport;
use App\Models\Dimension;
use App\Models\Variable;
use Excel;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ValidacionArticulo;
/**
 * Class ArticuloController
 * @package App\Http\Controllers
 */
class ArticuloController extends Controller
{
    protected $articulos;

    function __construct()
    { 
         $this->middleware('permission:ver-articulo|crear-articulo|editar-articulo|borrar-articulo|permission:habilitar-articulo')->only('index');
         $this->middleware('permission:crear-articulo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-articulo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-articulo', ['only' => ['destroy']]);
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
        $articulos=Articulo::where('nombreArt','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        $artU = Articulo::where('idUsuario','=', $usuario )->paginate($this::PAGINACION);

        
        return view('articulo.index', compact('articulos','buscarpor','artU','esTrabajador'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }

    public function pdf()
    {
        $articulos = Articulo::paginate(10000);

        $pdf = PDF::loadView('articulo.pdf', compact('articulos'));
        return $pdf->download('articulo.pdf');
       
    }
    public function excel()
    {
        return Excel::download(new ArticuloExport, 'articulos-list.xls');
    }
    public function estado($id)
    {
        $articulos = Articulo::FindOrFail($id);
        if($articulos['estado'] == 1){
            $articulos['estado'] = 0;
        }else{
            $articulos['estado'] = 1;
        }
        $articulos->update(); 
        return redirect()->route('articulos.index')
        ->with('success', 'Estado del Articulo actualizado correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulo = new Articulo();
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $indicadors = Indicador::pluck('nombreIndicador','id');
        $variables = Variable::pluck('nombreVariable','id');
        $dimensions = Dimension::pluck('nombreDimension','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipoarticulos = TipoArticulo::pluck('nombreArticulo','id');
        return view('articulo.create', compact('articulo','etiquetas','indicadors','autors','tipoarticulos','variables','dimensions'));
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
        $newLink = "$url/articulos/";
        $request['estado'] = 0;
        request()->validate(Articulo::$rules);
            $articulo = $request->all(); 
               if($documentoArt = $request->file('documentoArt')) {
                   $rutaGuardarArticulos = 'archivoArticulo/';
                   $documentoArtArticulo = date('YmdHis'). "." .$documentoArt->getClientOriginalExtension();
                   $documentoArt->move($rutaGuardarArticulos, $documentoArtArticulo);
                   $articulo['documentoArt'] = "$documentoArtArticulo";
               }
               $email= "ethanprueba1234@gmail.com";
               $messages ="Es necesario hacer una revisión para la validación del estado del registro";
               Mail::to($email)->send(new ValidacionArticulo($email,$messages,$newLink));
               
               Articulo::create($articulo);
                 return redirect()->route('articulos.index')
        ->with('success', 'Articulo creado exitosamente.');

      
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);

        return view('articulo.show', compact('articulo'));
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
        $articulo = Articulo::find($id);
        $etiquetas = Etiqueta::pluck('nombreEtiqueta','id');
        $indicadors = Indicador::pluck('nombreIndicador','id');
        $variables = Variable::pluck('nombreVariable','id');
        $dimensions = Dimension::pluck('nombreDimension','id');
        $autors = Autor::pluck('nombreAutor','id');
        $tipoarticulos = TipoArticulo::pluck('nombreArticulo','id');
        return view('articulo.edit', compact('articulo','etiquetas','indicadors','tipoarticulos','autors','variables','dimensions','esTrabajador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Articulo $articulo
     * @return \Illuminate\Http\Response
     */
  
        public function update(Request $request, $id)
        {
      
                $articulo = Articulo::findOrFail($id);
                $articulo->nombreArt= $request->get('nombreArt');
                $articulo->descripcionArt= $request->get('descripcionArt');
                $articulo->doi= $request->get('doi');
                $articulo->tipoarticulos_id= $request->get('tipoarticulos_id');
                $articulo->autor_id= $request->get('autor_id');
                $articulo->etiqueta_id= $request->get('etiqueta_id');
                $articulo->indicador_id= $request->get('indicador_id');
                $articulo->dimension_id= $request->get('dimension_id');
                $articulo->variable_id= $request->get('variable_id');
                $articulo->fechaPublicacionArt= $request->get('fechaPublicacionArt');
             
                    if($request->hasFile('documentoArt')){
                        $file = $request->documentoArt;
                        $file->move(public_path(). '/archivoArticulo', $file->getClientOriginalName());
                        $articulo->documentoArt = $file->getClientOriginalName();
                    }
            
                $articulo->update(); 
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo editado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
 {

    $articulos = Articulo::FindOrFail($id);

    if (file_exists('archivoArticulo/' . $articulos['documentoArt']) and !empty($articulos['documentoArt'])) {
        unlink('archivoArticulo/' . $articulos['documentoArt']);
    }

    $articulos->delete();

    return redirect()->route('articulos.index')
        ->with('success', 'articulos deleted successfully');
}


}

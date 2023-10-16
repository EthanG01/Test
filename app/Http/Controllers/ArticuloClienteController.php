<?php

namespace App\Http\Controllers;
use App\Models\Articulo;
use App\Models\Autor;
use App\Models\Dimension;
use App\Models\Etiqueta;
use App\Models\Indicador;
use App\Models\TipoArticulo;
use App\Models\Variable;
use Illuminate\Http\Request;

class ArticuloClienteController extends Controller
{
    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $articulos=Articulo::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $indicadors=Indicador::where('id','!=',0)
        ->orderBy('id','asc')->get();
        
        $variable=Variable::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $dimension=Dimension::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $tipoArticulos = TipoArticulo::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $etiquetas=Etiqueta::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $articulos=Articulo::where('nombreArt','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
         return view('articulo.articulo',compact('articulos','buscarpor','indicadors','variable','dimension','tipoArticulos','etiquetas'))
         ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
     
    
    }
 

    public function Buscar(Request $request)
    { 
        $buscarpor=$request->get('buscarpor');
        $tipoArticulos=TipoArticulo::all();
        $etiquetas=Etiqueta::all();
        $indicadors=Indicador::all();
        $dimension=Dimension::all();
        $variable=Variable::all();
        $articulos=Articulo::where('nombreArt','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
         
        return view('articulo.articulo', compact('articulos','buscarpor','indicadors','variable','dimension','tipoArticulos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipoArticulos=TipoArticulo::all();
       $etiquetas=Etiqueta::all();
       $indicadors=Indicador::all();
       $dimension=Dimension::all();
       $variable=Variable::all();
        $articulos=Articulo::where('indicador_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('articulo.articulo',compact('articulos','indicadors','variable','dimension','tipoArticulos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }
 
    public function filter2(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipoArticulos=TipoArticulo::all();
        $etiquetas=Etiqueta::all();
        $dimension=Dimension::all();
       $variable=Variable::all();
       $indicadors=Indicador::all();
       $articulos=Articulo::where('dimension_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        return view('articulo.articulo',compact('articulos','indicadors','variable','dimension','tipoArticulos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }
    public function filter3(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipoArticulos=TipoArticulo::all();
        $etiquetas=Etiqueta::all();
        $dimension=Dimension::all();
       $indicadors=Indicador::all();
       $variable=Variable::all();
       $articulos=Articulo::where('variable_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        return view('articulo.articulo',compact('articulos','indicadors','variable','dimension','tipoArticulos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }

    public function filter4(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipoArticulos=TipoArticulo::all();
       $etiquetas=Etiqueta::all();
       $indicadors=Indicador::all();
       $dimension=Dimension::all();
       $variable=Variable::all();
        $articulos=Articulo::where('etiqueta_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('articulo.articulo',compact('articulos','indicadors','variable','dimension','tipoArticulos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }
    public function filter5(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipoArticulos=TipoArticulo::all();
       $etiquetas=Etiqueta::all();
       $indicadors=Indicador::all();
       $dimension=Dimension::all();
       $variable=Variable::all();
        $articulos=Articulo::where('tipoarticulos_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('articulo.articulo',compact('articulos','indicadors','variable','dimension','tipoArticulos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $articulos->perPage());
    }

}

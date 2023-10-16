<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Editorial;
use App\Models\Etiqueta;
use App\Models\LibroRevista;
use App\Models\TipoLibro;
use Illuminate\Http\Request;
 
class LibroRevistaClienteController extends Controller
{
    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $libros=LibroRevista::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $tipos=TipoLibro::where('id','!=',0)
        ->orderBy('id','asc')->get();
        
        $etiquetas=Etiqueta::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $libros=LibroRevista::where('titulo','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
         return view('libro-revista.libro',compact('libros','buscarpor','tipos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
       
        // }$galerias= Tema::join('galerias', 'temas.id', '=', 'galerias.tema_id')

        // ->get(['temas.tema', 'galerias.descripcionGaleria','galerias.imagen']);

    
    }
   
 
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipos=TipoLibro::all();
        $etiquetas=Etiqueta::all();
        $libros=LibroRevista::where('tipolibro_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('libro-revista.libro',compact('libros','tipos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
    }
    public function filter2(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipos=TipoLibro::all();
        $etiquetas=Etiqueta::all();
        $libros=LibroRevista::where('etiqueta_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('libro-revista.libro',compact('libros','tipos','etiquetas'))
        ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
    }
}

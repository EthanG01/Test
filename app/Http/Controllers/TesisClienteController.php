<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Carrera;
use App\Models\Etiqueta;
use App\Models\Tesi;
use App\Models\TipoTesi;
use Illuminate\Http\Request;

class TesisClienteController extends Controller
{
    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        
        $tesis=Tesi::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $tipos=TipoTesi::where('id','!=',0)
        ->orderBy('id','asc')->get();
        
        $etiquetas=Etiqueta::where('id','!=',0)
        ->orderBy('id','asc')->get();
    
        $carreras=Carrera::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $tesis=Tesi::where('nombreTes','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
         return view('tesi.tesi',compact('tesis','tipos','etiquetas','carreras','buscarpor'))
         ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
       
        // $galerias= Tema::join('galerias', 'temas.id', '=', 'galerias.tema_id')

        // ->get(['temas.tema', 'galerias.descripcionGaleria','galerias.imagen']);

    
    }
 
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
        $tipos=TipoTesi::all();
        $etiquetas=Etiqueta::all();
        $carreras=Carrera::all();
        $tesis=Tesi::where('tipotesis_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('tesi.tesi',compact('tesis','tipos','etiquetas','carreras'))
        ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    }
    public function filter2(Request $request, $filtro)
    {
        $buscarpor= $filtro;
        $carreras=Carrera::all(); 
        $tipos=TipoTesi::all();
        $etiquetas=Etiqueta::all();
        $tesis=Tesi::where('etiqueta_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('tesi.tesi',compact('tesis','tipos','etiquetas','carreras'))
        ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    }
    public function filter3(Request $request, $filtro)
    {
        $buscarpor= $filtro;
        $carreras=Carrera::all(); 
        $tipos=TipoTesi::all();
        $etiquetas=Etiqueta::all();
        $tesis=Tesi::where('carrera_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('tesi.tesi',compact('tesis','tipos','etiquetas','carreras'))
        ->with('i', (request()->input('page', 1) - 1) * $tesis->perPage());
    }
}

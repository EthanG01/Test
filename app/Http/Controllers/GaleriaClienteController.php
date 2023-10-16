<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
use App\Models\Tema;

use Illuminate\Support\Facades\DB;

class GaleriaClienteController extends Controller
{
    const PAGINACION=10;
    public function index()
    {
        
        $galerias=Galeria::where('id','!=',0)
        
        ->orderBy('id','asc')->paginate(6);
        $temas=Tema::where('id','!=',0)
        
        ->orderBy('id','asc')->paginate(6);
    

         return view('galeria.cliente', compact('galerias','temas'));
       
        //  ['lista'=>$galerias]
        // $galerias= Tema::join('galerias', 'temas.id', '=', 'galerias.tema_id')

        // ->get(['temas.tema', 'galerias.descripcionGaleria','galerias.imagen']);

    
    }
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
      
        $temas=Tema::all();
        $galerias=Galeria::where('tema_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('galeria.cliente',compact('galerias','temas'))
        ->with('i', (request()->input('page', 1) - 1) * $galerias->perPage());
    }
}
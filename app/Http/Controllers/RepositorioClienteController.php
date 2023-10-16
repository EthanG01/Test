<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repositorio;

class RepositorioClienteController extends Controller
{
    const PAGINACION=10;

    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');

        $repositorios=Repositorio::where('id','!=',0,)
        ->orderBy('id','asc')->get();
        $repositorios=Repositorio::where('nombre','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
         return view('repositorio.repositorio',compact('repositorios','buscarpor'))
         ->with('i', (request()->input('page', 1) - 1) * $repositorios->perPage());
    }
 

    
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro;
        $repositorios=Repositorio::where('tipo','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('repositorio.repositorio',compact('repositorios'))
        ->with('i', (request()->input('page', 1) - 1) * $repositorios->perPage());
    }
}

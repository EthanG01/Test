<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Involucrado;
use App\Models\InvolucradoProyecto;
use App\Models\Persona;
use App\Models\Organizacion;
use App\Models\CantonOrganizacion;
use App\Models\TipoOrganizacion;
use App\Models\Provincia;
use App\Models\canton;
use App\Models\Proyecto;
class InvolucradoproyectoClienteController extends Controller
{
    const PAGINACION=10;
    public function index( )
    {
        $invo=Proyecto::where('estado','!=',0)
        ->orderBy('id','asc')->get();
        $invop=  InvolucradoProyecto::where('id','!=',0)
        ->orderBy('id','asc')->get();
        $in=Involucrado::where('id','!=',0)
        ->orderBy('id','asc')->get();
        return view('proyecto.proyecto',compact('invo','invop','in'));
    }
    public function filter(Request $request, $filtro)
    {
        $buscarpor= $filtro; 
      
      
        $invop=InvolucradoProyecto::where('proyecto_id','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
    
        return view('involucrado-proyecto.involucradoproyecto',compact('invop'))
        ->with('i', (request()->input('page', 1) - 1) * $invop->perPage());
    }
}
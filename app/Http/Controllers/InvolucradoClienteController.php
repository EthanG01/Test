<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Involucrado;
use App\Models\Persona;
use App\Models\Organizacion;
use App\Models\CantonOrganizacion;
use App\Models\TipoOrganizacion;
use App\Models\Provincia;
use App\Models\canton;



class InvolucradoClienteController extends Controller
{

    public function index( )
    {

        $invo=Involucrado::where('implicacion','=','Directa')
        ->orderBy('id','asc')->paginate(3);

    

        return view('involucrado.involucrado', compact('invo'));
       
   
    }
}

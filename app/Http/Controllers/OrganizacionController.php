<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Organizacion;
use App\Models\TipoOrganizacion;
use Illuminate\Http\Request;

/**
 * Class OrganizacionController
 * @package App\Http\Controllers
 */
class OrganizacionController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-organizacion|crear-organizacion|editar-organizacion|borrar-organizacion')->only('index');
         $this->middleware('permission:crear-organizacion', ['only' => ['create','store']]);
         $this->middleware('permission:editar-organizacion', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-organizacion', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $organizacions = Organizacion::paginate();

    //     return view('organizacion.index', compact('organizacions'))
    //         ->with('i', (request()->input('page', 1) - 1) * $organizacions->perPage());
    // }

    const PAGINACION=10;
    public function index(Request $request)
    {
        $buscarpor=$request->get('buscarpor');
        $organizacions=Organizacion::where('nombreOrganizacion','like','%'.$buscarpor.'%')->paginate($this::PAGINACION);
        
        return view('organizacion.index', compact('organizacions','buscarpor'))
        ->with('i', (request()->input('page', 1) - 1) * $organizacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizacion = new Organizacion();
        $cantons = Canton::pluck('nombreCanton', 'id');
        return view('organizacion.create', compact('organizacion','cantons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Organizacion::$rules);

        $organizacion = $request->all();

        if($fotoOrganizacion = $request->file('fotoOrganizacion')) {
                    $rutaGuardarImg = 'fotoOrganizaciones/';
                    $fotoOrg = date('YmdHis'). "." .$fotoOrganizacion->getClientOriginalExtension();
                    $fotoOrganizacion->move($rutaGuardarImg, $fotoOrg);
                     $organizacion['fotoOrganizacion'] = "$fotoOrg";
                 }

        Organizacion::create($organizacion);
        return redirect()->route('organizacions.index')
            ->with('success', 'Organizacion creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organizacion = Organizacion::find($id);
        $cantons = Canton::pluck('nombreCanton', 'id');
        return view('organizacion.show', compact('organizacion','cantons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organizacion = Organizacion::find($id);
        $cantons = Canton::pluck('nombreCanton', 'id');
        return view('organizacion.edit', compact('organizacion','cantons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Organizacion $organizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $organizacion = Organizacion::findOrFail($id);
        $organizacion->nombreOrganizacion  = $request->get('nombreOrganizacion');
        $organizacion->tipo  = $request->get('tipo');
        $organizacion->canton_id  = $request->get('canton_id');
        $organizacion->direccion  = $request->get('direccion');
        if($request->hasFile('fotoOrganizacion')){
            $file = $request->fotoOrganizacion;
            $file->move(public_path(). '/fotoOrganizaciones', $file->getClientOriginalName());
            $organizacion->fotoOrganizacion = $file->getClientOriginalName();
        }
        $organizacion->update();

        return redirect()->route('organizacions.index')
            ->with('success', 'Organización actualizada correctamente');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $organizacion = Organizacion::FindOrFail($id);

        if (file_exists('fotoOrganizaciones/' . $organizacion['fotoOrganizacion']) and !empty($organizacion['fotoOrganizacion'])) {
			unlink('fotoOrganizaciones/' . $organizacion['fotoOrganizacion']);
		}

        $organizacion->delete();

        return redirect()->route('organizacions.index')
            ->with('success', 'organizacion deleted successfully');
    }
}

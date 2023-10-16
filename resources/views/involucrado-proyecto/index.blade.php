<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Involucrados-Proyecto</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-invProyecto')
                        <a class="btn btn-warning" href="{{ route('involucrado-proyectos.create') }}">Crear nuevo</a>
                        @endcan
                        &nbsp;
                        <form class="form-inline my-2 my-lg-0 float-right" role="search">
                            <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            &nbsp;
                            <button class="btn btn-warning" type="text">Buscar</button>
                        </form>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
              
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef">
                                <th style="color:#fff;">Acciones</th>
                                <th style="color:#fff;">No</th>
                                <th style="color:#fff;">Proyecto</th>
                                <th style="color:#fff;">Involucrados y sus organizaciones</th>
                                <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                                 <th style="color:#fff;"></th>
                               
                                <th></th>
                               
                            </thead>
                            <tbody>
                                @foreach ($involucradoProyectos as $involucradoProyecto)
                                <tr>
                                    <td>
                                        <form action="{{ route('involucrado-proyectos.destroy',$involucradoProyecto->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('involucrado-proyectos.show',$involucradoProyecto->id) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                            @can('editar-invProyecto')
                                            <a class="btn btn-sm btn-success" href="{{ route('involucrado-proyectos.edit',$involucradoProyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-invProyecto')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            @endcan
                                        </form>
                                    </td>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $involucradoProyecto->Proyecto->nombreProyecto}}</td>
                                    @if ($involucradoProyecto->involucrados != '')
                                    <td>{{ $involucradoProyecto->involucrados->nombrePersona}} {{$involucradoProyecto->involucrados->apellido1}} {{$involucradoProyecto->involucrados->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->involucrados->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo2 != '')
                                    <td>{{ $involucradoProyecto->invo2->nombrePersona}} {{$involucradoProyecto->invo2->apellido1}} {{$involucradoProyecto->invo2->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo2->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo3 != '')
                                    <td>{{ $involucradoProyecto->invo3->nombrePersona}} {{$involucradoProyecto->invo3->apellido1}} {{$involucradoProyecto->invo3->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo3->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo4 != '')
                                    <td>{{ $involucradoProyecto->invo4->nombrePersona}} {{$involucradoProyecto->invo4->apellido1}} {{$involucradoProyecto->invo4->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo4->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo5 != '')
                                    <td>{{ $involucradoProyecto->invo5->nombrePersona}} {{$involucradoProyecto->invo5->apellido1}} {{$involucradoProyecto->invo5->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo5->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo6 != '')
                                    <td>{{ $involucradoProyecto->invo6->nombrePersona}} {{$involucradoProyecto->invo6->apellido1}} {{$involucradoProyecto->invo6->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo6->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo7 != '')
                                    <td>{{ $involucradoProyecto->invo7->nombrePersona}} {{$involucradoProyecto->invo7->apellido1}} {{$involucradoProyecto->invo7->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo7->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo8 != '')
                                    <td>{{ $involucradoProyecto->invo8->nombrePersona}} {{$involucradoProyecto->invo8->apellido1}} {{$involucradoProyecto->invo8->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo8->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo9 != '')
                                    <td>{{ $involucradoProyecto->invo9->nombrePersona}} {{$involucradoProyecto->invo9->apellido1}} {{$involucradoProyecto->invo9->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo9->organizacion->nombreOrganizacion}} </td>
                                    @endif
                                    @if ($involucradoProyecto->invo10 != '')
                                    <td>{{ $involucradoProyecto->invo10->nombrePersona}} {{$involucradoProyecto->invo10->apellido1}} {{$involucradoProyecto->invo10->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->invo10->organizacion->nombreOrganizacion}} </td>
                                    @endif

                                    <td>{{ $involucradoProyecto->involucrado->nombrePersona}} {{$involucradoProyecto->involucrado->apellido1}} {{$involucradoProyecto->involucrado->apellido2}} <h1></h1>
                                        {{ $involucradoProyecto->involucrado->organizacion->nombreOrganizacion}} </td>

                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $involucradoProyectos->links() !!}
        </div>
    </div>
    </div>
    @endsection

    @section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
            'Eliminado!',
            'El involucrado proyecto se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un involucrado proyecto',
                text: "¿Está seguro de eliminar este involucrado proyecto?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
    @endsection
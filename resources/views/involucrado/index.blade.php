<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Involucrado</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            @can('crear-involucrado')
                            <a class="btn btn-warning" href="{{ route('involucrados.create') }}">Crear nuevo</a>
                            @endcan
                            <a class="btn btn-danger" href="{{ route('involucrados.pdf') }}">PDF</a>
                            <a class="btn btn-success" href="{{ route('involucrados.excel') }}">EXCEL</a>
                            &nbsp;

                            <form class="form-inline my-2 my-lg-0 float-right" role="search">
                                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar involucrado" aria-label="Search">
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
                                    
                                    <th style="color:#fff;">No</th>
                                    <th style="color:#fff;">Involucrado</th>
                                    <th style="color:#fff;">Organización</th>
                                    <th style="color:#fff;">Provincia</th>
                                    <th style="color:#fff;">Cantón</th>
                                    <th style="color:#fff;">Email</th>
                                    <th style="color:#fff;">Acciones</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($involucrados as $involucrado)
                                    <tr>
                                        
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $involucrado->nombrePersona }} {{ $involucrado->apellido1 }} {{ $involucrado->apellido2 }} </td>

                                        <td>{{ $involucrado->Organizacion->nombreOrganizacion }}</td>
                                        <td>{{ $involucrado->Organizacion->Canton->nombreProvincia}}</td>
                                        <td>{{ $involucrado->Organizacion->Canton->nombreCanton}}</td>
                                        <td>{{ $involucrado->emailPersona }}</td>
                                        <td>
                                            <form action="{{ route('involucrados.destroy',$involucrado->id) }}" class="formulario-eliminar" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('involucrados.show',$involucrado->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                @can('editar-involucrado')
                                                <a class="btn btn-sm btn-success" href="{{ route('involucrados.edit',$involucrado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @endcan
                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-involucrado')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                @endcan
                                            </form>
                                        </td>
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $involucrados->links() !!}
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
            'El involucrado se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un involucrado',
                text: "¿Está seguro de eliminar este involucrado?",
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
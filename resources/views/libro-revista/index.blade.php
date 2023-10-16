<!-- Primera parte copiada -->
@extends('layouts.app')
@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Libro/Revista</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-libroRevista')
                        <a class="btn btn-warning" href="{{ route('libro-revistas.create') }}">Crear nueva</a>
                        @endcan
                        <a class="btn btn-danger" href="{{ route('libro-revistas.pdf') }}">PDF</a>
                        <a class="btn btn-success" href="{{ route('libro-revistas.excel') }}">EXCEL</a>
                        &nbsp;
                        <form class="form-inline my-2 my-lg-0 float-right" role="search">
                            <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar titulo" aria-label="Search">
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
                                <th style="color:#fff;">Tipo</th>
                                <th style="color:#fff;">Autor</th>
                                <th style="color:#fff;">Título</th>
                                <th style="color:#fff;">Documento</th>
                                <th style="color:#fff;">Fecha de publicación</th>
                                @can('habilitar-libroRevista')
                                <th style="color:#fff;">Estado</th>
                            @endcan
                                <th style="color:#fff;">Acciones</th>

                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @can('borrar-usuario')
                                @foreach ($libroRevistas as $libroRevista)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $libroRevista->tipolibro->nombreLibro }}</td>
                                    <td>{{ $libroRevista->autor->nombreAutor }} {{ $libroRevista->autor->apellidoAutor1 }}</td>
                                    <td>{{ $libroRevista->titulo }}</td>
                                    <td><a href="/libros/{{ $libroRevista->documentoLR  }}" target="black_">Ver documento </a></td>
                                    <td>{{ $libroRevista->fechaPublicacionLR }}</td>
                           
                                @can('habilitar-libroRevista')
                                @if ($libroRevista->estado == 0)
                                    <td>
                                        <a class="btn btn-sm btn-danger"
                                            href="{{ route('libro-revistas.estado', $libroRevista->id) }}">Inactivo</a>
                                    </td>
                                @endif
                                @if ($libroRevista->estado == 1)
                                    <td>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('libro-revistas.estado', $libroRevista->id) }}">Activo</a>

                                    </td>
                                @endif
                            @endcan
                                    <td>
                                        <form action="{{ route('libro-revistas.destroy',$libroRevista->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('libro-revistas.show',$libroRevista->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-libroRevista')
                                            <a class="btn btn-sm btn-success" href="{{ route('libro-revistas.edit',$libroRevista->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-libroRevista')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endcan
                                @can('ver-contenido')2
                                @if($esTrabajador)
                                @foreach ($libroU as $lRev)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $lRev->tipolibro->nombreLibro }}</td>
                                    <td>{{ $lRev->autor->nombreAutor }} {{ $lRev->autor->apellidoAutor1 }}</td>
                                    <td>{{ $lRev->titulo }}</td>
                                    <td><a href="/libros/{{ $lRev->documentoLR  }}" target="black_">Ver documento </a></td>

                                    <td>{{ $lRev->fechaPublicacionLR }}</td>
                           
                                @can('habilitar-libroRevista')
                                @if ($lRev->estado == 0)
                                    <td>
                                        <a class="btn btn-sm btn-danger"
                                            href="{{ route('libro-revistas.estado', $lRev->id) }}">Inactivo</a>
                                    </td>
                                @endif
                                @if ($lRev->estado == 1)
                                    <td>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('libro-revistas.estado', $lRev->id) }}">Activo</a>

                                    </td>
                                @endif
                            @endcan
                                    <td>
                                        <form action="{{ route('libro-revistas.destroy',$lRev->id) }}" class="formulario-eliminar" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('libro-revistas.show',$lRev->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                            @can('editar-libroRevista')
                                            <a class="btn btn-sm btn-success" href="{{ route('libro-revistas.edit',$lRev->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            @endcan
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-libroRevista')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                @endcan
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $libroRevistas->links() !!}
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
            'El libro revista se elimino correctamente.',
            'success'
        )
    </script>
    @endif


    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Usted se encuentra a punto de borrar un libro revista',
                text: "¿Está seguro de eliminar este libro revista?",
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
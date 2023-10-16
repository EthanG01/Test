@extends('layouts.principal')
@section('content')
    <!-- End Breadcrumbs -->
    <div style="text-align: left; margin-left: 5%">
        <div class="section-title my-3">
            <h2>Repositorio</h2>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section id="blog" class="blog">
        <div class="card container">
            <div class="card-body m-3">
                <form class="form-inline my-2 my-lg-0 float-right h-100 d-flex justify-content-center align-items-center"
                    role="search">
                    <input name="buscarpor" class="form-control me-2 mx-auto" type="search" placeholder="Buscar nombre"
                        aria-label="Search">
                    <button class="btn btn-warning" type="text">Buscar</button>
                </form>
            </div>
        </div>
        <div style="display: flex; justify-content: center; width: 100%; flex-wrap: wrap;" class="my-4">
            <div style="text-align: center; padding: 5px;">
                <a style="min-width: 150px" class="btn btn-sm btn-success" href="{{ route('clirepo.index') }}">Todo</a>
            </div>
            <div style="text-align: center; padding: 5px;">
                <a style="min-width: 150px" class="btn btn-sm btn-success"
                    href="{{ route('clirepo.filter', 'PPS') }}">Práctica Profesionales</a>
            </div>
            <div style="text-align: center; padding: 5px;">
                <a style="min-width: 150px" class="btn btn-sm btn-success"
                    href="{{ route('clirepo.filter', 'Articulo') }}">Artículos Científicos</a>
            </div>
            <div style="text-align: center; padding: 5px;">
                <a style="min-width: 150px" class="btn btn-sm btn-success"
                    href="{{ route('clirepo.filter', 'Investigaciones') }}">Investigaciones</a>
            </div>
            <div style="text-align: center; padding: 5px;">
                <a style="min-width: 150px" class="btn btn-sm btn-success"
                    href="{{ route('clirepo.filter', 'Campo') }}">Trabajos de campo</a>
            </div>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach ($repositorios as $repo)
                    <div class="col-lg-15 entries">
                        @if ($repo->estado == 1)
                            <article class="entry">
                                <h2 class="entry-title">
                                    <p>{{ $repo->nombre }}</p>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                            <a>{{ $repo->Autor->nombreAutor }}</a>&nbsp;<a>{{ $repo->Autor->apellidoAutor1 }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-mortarboard"></i>
                                            <a>{{ $repo->carrera->nombreCarrera }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-book"></i>
                                            <a>{{ $repo->tipo }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                            <a>{{ $repo->descripcion }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>
                                            <a>{{ $repo->fecha }}</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <a href="/repositorio/{{ $repo->documento }}" target="__blank"> Visualizar Documento
                                    </a>
                                </div>

                            </article><!-- End blog entry -->
                        @endif
                @endforeach

            </div><!-- End blog entries list -->

        </div>

        </div>

        </div>
    </div>
    @endsection


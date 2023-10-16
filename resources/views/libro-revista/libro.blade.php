@extends('layouts.principal')
@section('content')
    <!-- End Breadcrumbs -->
    <div style="text-align: left; margin-left: 9%">
        <div class="section-title my-3">
            <h2>Libros y Revistas</h2>
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
    </div>
         <!-- Botones -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <div class="dropdown">
                                <button class="dropbtn">Tipos</button>
                                <div class="dropdown-content">
                                    @foreach ($tipos as $galery)
                                <a href="{{ route('clilibrorevis.filter', $galery->id) }}">
                                        {{ $galery->nombreLibro }}</a> @endforeach
                                </div>
                            </div>
                           
                            <div class="dropdown">
                                <button class="dropbtn">Etiqueta</button>
                                <div class="dropdown-content">
                                    @foreach ($etiquetas as $galery)
                                    <a href="{{ route('clilibrorevis.filter2', $galery->id) }}">
                                            {{ $galery->nombreEtiqueta }}</a> @endforeach
                                </div>
                            </div>
                            <a class="btn btn-sm btn-danger" href="{{ route('clilibrorevis.index') }}">Todo</a>
                        </ul>
                    </div>
                </div>
             </div>
        </div>

        
        <div class="container" data-aos="fade-up">
            <div class="row">

                @foreach ($libros as $libro)
                    <div class="col-lg-15 entries">
                        @if ($libro->estado == 1)
                            <article class="entry">
                                <h2 class="entry-title">
                                    <p>{{ $libro->titulo }}</p>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                            <a>{{ $libro->autor->nombreAutor }}</a>&nbsp;<a>{{ $libro->autor->apellidoAutor1 }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                            <a>{{ $libro->editorial->nombreEditorial }}</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                            <a>{{ $libro->cant_pag }}</a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <a href="/libros/{{ $libro->documentoLR }}" target="__blank"> Visualizar Documento </a>
                                </div>

                            </article><!-- End blog entry -->
                        @endif
                @endforeach
            </div><!-- End blog entries list -->

        </div>

        </div>

        </div>
    @endsection

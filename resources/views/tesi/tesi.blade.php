@extends('layouts.principal')
@section('content')
    <!-- End Breadcrumbs -->
    <div style="text-align: left; margin-left: 9%">
        <div class="section-title my-3">
            <h2>Tesis</h2>
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
                                    <a @foreach ($tipos as $galery)
                                       <a href="{{ route('clitesi.filter', $galery->id) }}">
                                        {{ $galery->nombreTesis }}</a> @endforeach
                                        </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn">Etiqueta</button>
                                <div class="dropdown-content">
                                    <a @foreach ($etiquetas as $galery)
                                    <a href="{{ route('clitesi.filter2', $galery->id) }}">
                                            {{ $galery->nombreEtiqueta }}</a> @endforeach
                                        </div>
                                </div>

                                <div class="dropdown">
                                    <button class="dropbtn">Carrera</button>
                                    <div class="dropdown-content">
                                        <a @foreach ($carreras as $galery)
                                            <a href="{{ route('clitesi.filter3', $galery->id) }}">
                                            {{ $galery->nombreCarrera }}</a> @endforeach
                                            </div>
                                    </div>
                                    <a class="btn btn-sm btn-danger" href="{{ route('clitesi.index') }}">Todo</a>

                                </div>

                        </ul>
                    </div>
                </div>
            </div>
            </div>
            </div>


            <div class="container" data-aos="fade-up">
                <div class="row">

                    @foreach ($tesis as $tes)
                        <div class="col-lg-15 entries">
                            @if ($tes->estado == 1)
                                <article class="entry">
                                    <h2 class="entry-title">
                                        <p>{{ $tes->nombreTes }}</p>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                                <a>{{ $tes->autor->nombreAutor }}</a>&nbsp;<a>{{ $tes->autor->apellidoAutor1 }}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-mortarboard"></i>
                                                <a>{{ $tes->carrera->nombreCarrera }}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-book"></i>
                                                <a>{{ $tes->TipoTesi->nombreTesis }}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                                <a>{{ $tes->descripcionTes }}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>
                                                <a>{{ $tes->fechaPublicacionTes }}</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="entry-content">
                                        <a href="/archivosTes/{{ $tes->documentoTes }}" target="__blank"> Visualizar
                                            Documento
                                        </a>
                                    </div>

                                </article><!-- End blog entry -->
                            @endif
                    @endforeach
                </div><!-- End blog entries list -->

            </div>

            </div>

            </div>
        @endsection

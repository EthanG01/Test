@extends('layouts.principal')
@section('content')
 <!-- End Breadcrumbs -->
 <div style="text-align: left; margin-left: 9%">
    <div class="section-title my-3">
        <h2>Artículos</h2>
    </div>
</div>

 <!-- Form -->
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
 <!-- Form end -->
 
<!-- Botones -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <div class="dropdown">
                        <button class="dropbtn">Dimesión</button>
                        <div class="dropdown-content">
                        <a  @foreach ($dimension as $galery)
                        <a href="{{ route('cliarticulo.filter2', $galery->id) }}">
                                {{ $galery->nombreDimension }}</a>   @endforeach
                        
                        </div>
                      </div>

                      <div class="dropdown">
                        <button class="dropbtn">Tipos</button>
                        <div class="dropdown-content">
                        <a    @foreach ($tipoArticulos as $galery)
                        <a href="{{ route('cliarticulo.filter5', $galery->id) }}">
                                {{ $galery->nombreArticulo }}</a> @endforeach
                        
                        </div>
                      </div>

                      
                    <a class="btn btn-sm btn-danger" href="{{ route('cliarticulo.index') }}">Todo</a>

                    </div>

                </ul>
            </div>
        </div>
    </div>
    </div>
</div>

          
          
        <div class="container" data-aos="fade-up">
            <div class="row">

                @foreach ($articulos as $galery)
                    <div class="col-lg-15 entries">
                        @if ($galery->estado == 1)
                            <article class="entry">
                                <h2 class="entry-title">
                                    <p>{{ $galery->nombreArt }}</p>
                                </h2>

                                <div class="entry-meta">
                                    <ul>

                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                            <a>{{ $galery->autor->nombreAutor }}</a>&nbsp;<a>{{ $galery->autor->apellidoAutor1 }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-book"></i>
                                            <a>{{ $galery->TipoArticulo->nombreArticulo }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                            <a>{{ $galery->descripcionArt }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>
                                            <a>{{ $galery->fechaPublicacionArt }}</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <a href="/archivoArticulo/{{ $galery->documentoArt }}" target="__blank"> Visualizar
                                        Documento </a>
                                </div>


                            </article><!-- End blog entry -->
                        @endif
                @endforeach
            </div><!-- End blog entries list -->

        </div>

        </div>
    @endsection

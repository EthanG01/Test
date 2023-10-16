@extends('layouts.principal')
@section('content')
    <!-- End Breadcrumbs -->
    <div style="text-align: left; margin-left: 9%">
        <div class="section-title my-5">
            <h2>Proyectos</h2>
        </div>
        
    </div>
    <!-- End Breadcrumbs -->
  <!-- ====== Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-200 d-inline-flex p-2 justify-content-center">
                      @foreach ($invop as $Can)  
                            <div class="testimonial-item">
                                <img src="/fotoOrganizaciones/{{ $Can->involucrado->organizacion->fotoOrganizacion }}"
                                    class="testimonial-img" alt="">
                                <h3>{{ $Can->proyecto->nombreProyecto }}</h3>
                                <h3>Categoría:</h3> <h4>{{ $Can->proyecto->categoria->nombreCategoria }}</h4>
                                <h3>Ubicación:</h3> 
                                <div class="entry-meta">
                                    <ul>
                                        <li class="col-lg-12 d-flex justify-content-center"><i class="bi bi-globe"></i>
                                                 <a>{{ $Can->involucrado->organizacion->canton->nombreProvincia }}</a><a>,<a>&nbsp
                                                    <a>{{ $Can->involucrado->organizacion->canton->nombreCanton }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Organizaciones involucradas y sus representantes:</h3>              
                                <p>{{ $Can->involucrado->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->involucrado->nombrePersona}} {{$Can->involucrado->apellido1}} {{$Can->involucrado->apellido2}}</a><div></div>

                                @if ($Can->involucrados != '')
                                <p>{{ $Can->involucrados->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->involucrados->nombrePersona}} {{$Can->involucrados->apellido1}} {{$Can->involucrados->apellido2}}</a>
                                @endif
                                @if ($Can->invo2 != '')
                                <p>{{ $Can->invo2->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo2->nombrePersona}} {{$Can->invo2->apellido1}} {{$Can->invo2->apellido2}}</a>
                                @endif
                                @if ($Can->invo3 != '')
                                <p>{{ $Can->invo3->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo3->nombrePersona}} {{$Can->invo3->apellido1}} {{$Can->invo3->apellido2}}</a>
                                @endif
                                @if ($Can->invo4 != '')
                                <p>{{ $Can->invo4->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo4->nombrePersona}} {{$Can->invo4->apellido1}} {{$Can->invo4->apellido2}}</a>
                                @endif
                                @if ($Can->invo5 != '')
                                <p>{{ $Can->invo5->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo5->nombrePersona}} {{$Can->invo5->apellido1}} {{$Can->invo5->apellido2}}</a>
                                @endif
                                @if ($Can->invo6 != '')
                                <p>{{ $Can->invo6->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo6->nombrePersona}} {{$Can->invo6->apellido1}} {{$Can->invo6->apellido2}}</a>
                                @endif
                                @if ($Can->invo7 != '')
                                <p>{{ $Can->invo7->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo7->nombrePersona}} {{$Can->invo7->apellido1}} {{$Can->invo7->apellido2}}</a>
                                @endif
                                @if ($Can->invo8 != '')
                                <p>{{ $Can->invo8->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo8->nombrePersona}} {{$Can->invo8->apellido1}} {{$Can->invo8->apellido2}}</a>
                                @endif
                                @if ($Can->invo9 != '')
                                <p>{{ $Can->invo9->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo9->nombrePersona}} {{$Can->invo9->apellido1}} {{$Can->invo9->apellido2}}</a>
                                @endif
                                @if ($Can->invo10 != '')
                                <p>{{ $Can->invo10->organizacion->nombreOrganizacion }}</p>
                                <a class="product-short-description"> <i class="bi bi-person"></i> {{$Can->invo10->nombrePersona}} {{$Can->invo10->apellido1}} {{$Can->invo10->apellido2}}</a>
                                @endif
                                
                                <h3>Descripción del proyecto:</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                <p>{{ $Can->proyecto->descripcionProyecto }}</p>
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>

                                <h3>Fecha inicial:</h3><h6>{{ $Can->proyecto->fechaInicial }}</h6>
                                <h3>Fecha de finalización:</h3><h6>{{ $Can->proyecto->fechaFinalizacion}}</h6>
                            </div>
                            @endforeach
                    </div>
                   
                </div>
              
            </div>
        

        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    @endsection



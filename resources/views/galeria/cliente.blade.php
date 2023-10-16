@extends('layouts.principal')
@section('content')
    <div class="container">
        <div style="text-align: left; margin-left: 1%">
            <div class="section-title my-5">
                <h2>Galería</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <a class="btn btn-sm btn-danger"
                                @foreach ($temas as $galery)
                                <a class="btn btn-sm btn-danger" href="{{ route('cligaleria.filter', $galery->id) }}">
                                {{ $galery->tema }}</a> @endforeach
                                <a class="btn btn-sm btn-danger" href="{{ route('cligaleria.index') }}">Todo</a> 
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End Breadcrumbs -->
    </div>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      
        
        <!-- ======= Portfolio Section ======= -->
        <div class="row portfolio-container">
            @foreach ($galerias as $galery)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="/imagenes/{{ $galery->imagen }}" class="img-fluid" alt=""
                            style="width:100%; height:300px ">
                        <div class="portfolio-info">
                            <h4>{{ $galery->descripcionGaleria }}</h4>
                            <p>{{ $galery->tema->tema }}</p>
                            <div class="portfolio-links">
                                <a href="/imagenes/{{ $galery->imagen }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {{ $galerias->links() }}
        </div>
        </div>

    </section><!-- End Portfolio Section -->
@endsection



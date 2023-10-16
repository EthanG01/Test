@extends('layouts.principal')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" alt="primer imagen ilustrativa del carrousel" style="background-image: url(assets1/img/slide/slide-2.webp) ">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenidos al  <span>Observatorio Regional Chorotega.</span></h2>
              <p class="animate__animated animate__fadeInUp">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" alt="segunda imagen ilustrativa del carrousel" style="background-image: url(assets1/img/slide/slide-1.webp)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"></h2>
              <p class="animate__animated animate__fadeInUp">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" alt="tercer imagen ilustrativa del carrousel" style="background-image: url(assets1/img/slide/slide-3.webp)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Disfruta de nuestra página oficial.</h2>
              <p class="animate__animated animate__fadeInUp">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
           
            </div>
          </div>
        </div>

          <!-- Slide 4-->
          <div class="carousel-item" alt="cuarta imagen ilustrativa del carrousel" style="background-image: url(assets1/img/slide/slide-4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                
              </div>
            </div>
          </div>
            <!-- Slide 5 -->
            <div class="carousel-item" alt="quinta imagen ilustrativa del carrousel" style="background-image: url(assets1/img/slide/slide-5.webp)">
                <div class="carousel-container">
                <div class="container">
                    <h2 class="animate__animated animate__fadeInDown">Gracias por visitarnos y querer saber más sobre nosotros.</h2>
                    <p class="animate__animated animate__fadeInUp">ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</p>
                    
                </div>
                </div>
            </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero -->

  <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Más</h2>
                    <p>Conoce más del observatorio</p>
                </div>
                <section id="services" class="services">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-eye"></i></div>
                                    <h4><a href="{{ route('cliinvolucrado.index') }}">¿Quiénes somos?</a></h4>
                                    <p>Somos un programa conformado como una unidad estratégica, para análisis y estudio
                                        de la realidad regional.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-images"></i></div>
                                    <h4><a href="{{ route('cligaleria.index') }}">Galería</a></h4>
                                    <p>Espacio para compartir imágenes y videos de las diferentes acciones desarrolladas
                                        por los PPAA.</p>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                                    <h4><a href="{{ route('cliproyecto.index') }}">Proyectos</a></h4>
                                    <p>Proyectos y actividades académicas (PPAA) desarrollados
                                     como parte de la acción sustantiva en la Sede Regional Chorotega
                                      de la Universidad Nacional de Costa Rica. </p>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="{{ route('clirepo.index') }}">Repositorio</a></h4>
                                <p>Prácticas profesionales, artículos cientifico, investigaciones y trabajos de campo desarrollados
                                 como parte de la acción sustantiva en la Sede Regional Chorotega
                                  de la Universidad Nacional de Costa Rica. </p>

                            </div>
                        </div>

                        </div>
                    </div>

                </section> <!-- End About Section -->

                 <!-- ======= Cta Section ======= -->
                    <section id="cta" class="cta">
                        <div class="container" data-aos="zoom-in">

                            <div class="text-center">
                                <h3>Área para contactar</h3>
                                <p>En el siguiente apartado encontraras toda la información de contacto de la organización.</p>
                            </div>

                        </div>
                    </section><!-- End Cta Section -->

                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact section-bg">
                        <div class="container" data-aos="fade-up">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3927.5690086149652!2d-85.44914198523409!3d10.134320292759156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8f9fb0adec037b37%3A0xcb661d6342193de4!2s4HM3%2BP6F%20Centro%20Mesoamericano%20de%20Desarrollo%20Sostenible%20del%20Tropico%20Seco%20(CEMEDE-UNA)%2C%20Provincia%20de%20Guanacaste%2C%20Nicoya!3m2!1d10.1340112!2d-85.4470305!5e0!3m2!1ses!2scr!4v1680208222678!5m2!1ses!2scr"
                         width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="section-title">
                                
                            </div>

                            <div class="row">

                                <div style="text-align: left; margin-left: 0%">

                                    <div class="row"> 
                                        <div class="col-md-12">
                                            <div class="info-box">
                                              <i class="bx bx-envelope"></i>
                                              <h3>Correo electrónico</h3>
                                              <a href="https://mail.google.com/mail/u/0/?hl=es#inbox/FFNDWNNwNqDHRfpqZKlbDkkhBlfpxkTm?compose=GTvVlcSMTDznpcKDtXBMfVWRTlgwSXfkzWhldhKfVcMSQqPSdGNxJmxBrbXdgSmRxVRghJhbxfTdD">
                                                  <p>observatorioregional.chorotega@una.cr</p>
                                              </a>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="info-box mt-4">
                                              <i class="bi bi-geo"></i>
                                              <h3>Ubicación</h3>
                                              <p>Nicoya, Guanacaste.</p>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="info-box mt-4">
                                              <i class="bx bx-phone-call"></i>
                                              <h3>Teléfono</h3>
                                             <p>2562-6232</p> 
                                            </div>
                                          </div>

                                

                            </div>

                        </div>
                    </section><!-- End Contact Section -->
                   

    </main><!-- End #main -->

    @endsection

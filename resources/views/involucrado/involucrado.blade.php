@extends('layouts.principal')
@section('content')
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="" data-bs-interval="1600" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" all="imagen ilustrativa del ¿Quienes somos?" style="background-image: url(assets1/img/slide/ilustrativa.webp)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate_animated animate_fadeInDown">¿Quiénes somos? <span></span></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Información</h2>
                    <p>¿Que es el observatorio?</p>
                </div>
                <section id="services" class="services">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-4 col-md-2 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-check"></i></div>
                                    <h4>Observatorio</h4>
                                    <p>Los Observatorios Regionales surgen como respuesta a la Política Institucional de
                                        Desarrollo Regional
                                        (2018) como una instancia estratégica enfocada en las acciones de monitoreo,
                                        generación, análisis y comunicación
                                        de información pertinente y oportuna del estado.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-check"></i></div>
                                    <h4>Misión</h4>
                                    <p>Unidad estratégica que monitorea, genera, analiza y comunica información
                                        pertinente y oportuna del estado de las regiones
                                        y el desarrollo integral, para la orientación de las
                                        acciones sustantivas universitarias e interuniversitarias.
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                                data-aos-delay="200">
                                <div class="icon-box">
                                    <div class="icon"><i class="bi bi-check"></i></div>
                                    <h4>Visión</h4>
                                    <p>Ser un observatorio referente en el estudio y análisis de la realidad regional,
                                        que incide en la toma de decisiones institucional e interinstitucional para el
                                        desarrollo integral e inclusivo.
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>
            </div>

        </section> <!-- End About Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch video-box"
                    all="video de información relevante" style='background-image: url("../../../assets1/img/slide/video.webp");' data-aos="zoom-in" 
                        data-aos-delay="100">
                        <a href="https://www.youtube.com/watch?v=pKuwn5GX8JE" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">   
                            <h3>NUESTRO OBJETIVO <strong>GENERAL</strong></h3>
                            <p>
                                Analizar el estado de las regiones, para el acceso oportuno y pertinente de la
                                información que oriente la toma
                                de decisiones de las acciones sustantivas universitarias e interuniversitarias
                                y procesos del desarrollo integral e inclusivo.

                            </p>
                            <h5>OBJETIVOS <strong>ESPECÍFICOS</strong></h5>
                   
                        </div>
                       
                       
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Objectivo <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show"
                                        data-bs-parent=".accordion-list">
                                        <p>
                                            Explicar las dinámicas y tendencias del desarrollo de los territorios y el
                                            quehacer de las poblaciones interlocutoras, para la orientación de Planes,
                                            Programas, Proyectos, Actividades Académicas y otras formas de acción
                                            sustantiva con pertinencia social y los procesos de toma de decisiones
                                            universitarias e interinstitucionales.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span>Objectivo<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Monitorear las necesidades de formación profesional de grado, posgrado y de
                                            educación continua de las regiones, para el desarrollo de una oferta
                                            académica desconcentrada pertinente e innovadora.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Objectivo <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Generar una línea editorial regional para la sistematización de experiencias
                                            y resultados de la acción sustantiva, mediante productos académicos y en
                                            formatos accesibles para los actores y agentes del desarrollo regional y la
                                            comunidad nacional e internacional.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4"
                                        class="collapsed"><span>04</span> Objectivo <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Implementar un sistema de información regional mediante una plataforma
                                            digital, para la comunicación y facilitación de información pertinente y
                                            oportuna del estado de las regiones.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Involucrados</h2>
      <p>Del Observatorio</p>
  </div>
    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Todos</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
      @foreach($invo as $inv)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app" >
        <div class="portfolio-wrap">
          <img src="/fotoOrganizaciones/{{$inv->organizacion->fotoOrganizacion}}" class="img-fluid"alt="" style="width:100%; height:210px " >
          <div class="portfolio-info">
            <p class="title">{{$inv->organizacion->nombreOrganizacion}}</p>
            <p class="subtitle">{{$inv->descripcionInvolucrado}}</p>
            <div class="portfolio-links">
              <a href=href="/fotoOrganizaciones/{{$inv->organizacion->fotoOrganizacion}}"></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center"> 
      {{
        $invo->links()
      }}
    </div>
  </div>
</section><!-- End Portfolio Section -->

    </main><!-- End #main -->

  

    <main id="main">
        <!-- ======= Team Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Equipo de trabajo</h2>
                    <p>Observatorio Regional Chorotega</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="50">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets1/img/team/William.png" class="testimonial-imgWillian" alt="">
                                    <h3>William Gomez Solis</h3>
                                    <h4>Product Owner </h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Ingeniero en Ciencias Forestales
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <div class="social">
                                        <a href="https://www.facebook.com/wgomezsolis"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a href="https://instagram.com/willgs88?igshid=YmMyMTA2M2Y="><i
                                                class="ri-instagram-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End team item -->

                        <style>
                            .swiper-slide {
  height: 350px;
}

                            </style>

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets1/img/team/Ivan.png" class="testimonial-img" alt="">
                                    <h3>Joseph Alvarado</h3>
                                    <h4>Backend</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Estudiante de ingeniería en Sistemas de Información
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <div class="social">
                                        <a href="https://www.facebook.com/profile.php?id=100008077421624"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a href="https://www.instagram.com/"><i
                                                class="ri-instagram-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets1/img/team/Gerald.png" class="testimonial-img" alt="">
              <h3>Gerald Gonzalez</h3>
              <h4>Full stack</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Estudiante de ingeniería en Sistemas de Información
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <div class="social">
                <a href="https://www.facebook.com/gerald.gonzalesvaldes"><i
                        class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/geraldgonzalesvaldes/"><i
                        class="ri-instagram-fill"></i></a>
            </div>
            </div>
          </div>
        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets1/img/team/Grettel.png" class="testimonial-img" alt="">
                                    <h3>Grettel Rodríguez</h3>
                                    <h4>Frontend</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Estudiante de ingeniería en Sistemas de Información
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <div class="social">
                                        <a href="https://www.facebook.com/grettel.munoz.9"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a href="https://www.instagram.com/gree893/"><i
                                                class="ri-instagram-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                      

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets1/img/team/Ethan.png" class="testimonial-img" alt="">
                                    <h3>Ethan Madrigal</h3>
                                    <h4>Backend</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Estudiante de ingeniería en Sistemas de Información
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <div class="social">
                                        <a href="https://www.facebook.com/ethan.madrigalserrano"><i
                                                class="ri-facebook-fill"></i></a>
                                        <a href="https://www.instagram.com/ethan.g_madrigal.s/"><i
                                                class="ri-instagram-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->
   
    

  </main><!-- End #main -->

  @endsection
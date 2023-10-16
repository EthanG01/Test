<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Observatorio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets1/img/slide/ojo.png" rel="icon">
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    

    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Multi - v4.10.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="/">
                <img src="assets1/img/slide/ojo.png" width="55" class="my-200">
            </a>
            <h1 class="logo"><a href="/">Observatorio</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a href="/" class="active">Inicio</a>
                    </li>

                    <li class="nav-item active">

                        <a class="nav-link" href="{{ route('cliinvolucrado.index') }}"
                            class="underline text-gray-900 dark:text-white">
                            ¿Quiénes somos?
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cligaleria.index') }}"
                            class="underline text-gray-900 dark:text-white">
                            Imágenes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cliproyecto.index') }}"
                            class="underline text-gray-900 dark:text-white">
                            Proyectos
                        </a>
                    </li>
                    <li class="dropdown"><a href="{{ route('clirepo.index') }}"><span>Repositorio</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('cliarticulo.index') }}">Artículos</a></li>
                            <li><a href="{{ route('clitesi.index') }}">Tesis</a></li>
                            <li><a href="{{ route('clilibrorevis.index') }}">Libros/Revistas</a></li>
                            <li><a href="{{ route('clirepo.index') }}">Repositorio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            Iniciar sesión
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            Registrarse
                        </a>
                    </li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


</body>

</html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width = device-width initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styles.php">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background: #efefef;
      flex-wrap: wrap;
    }

    .card {
      position: relative;
      width: 300px;
      height: 400px;
      background: #fff;
      border-radius: 5px;
      overflow: hidden;
      transition: .5s;
      margin: 90px 20px 5px 20px;
    }

    .card:hover {
      box-shadow: 0 5px 15px rgba(3, 89, 92, .5);
      transform: translateY(-15px);
    }

    .card .head {
      height: 125px;
      width: 100%;
      position: relative;
    }

    .card .head .circle {
      position: absolute;
      width: 300px;
      height: 300px;
      border-radius: 50%;
      background: #0b6f72;
      bottom: 0;
    }

    .card .head .img {
      width: 150px;
      height: 150px;
      position: absolute;
      background: #fff;
      padding: 5px;
      border-radius: 50%;
      bottom: -30%;
      left: 50%;
      transform: translate(-50%);
    }

    .card .head .img img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
    }


    .card .descripcion {
      height: 200px;
      padding: 40px 20px 20px 20px;
      border-bottom: solid 1px rgba(6, 74, 76, .18);
      text-align: center;
    }

    .card .descripcion h3 {
      color: #05383a;
    }

    .card .descripcion h4 {
      color: #1c5a5c;
    }

    .card .descripcion p {
      margin-top: 20px;
      font-size: 15px;
    }


    .card .contact {
      width: 100%;
      height: 75px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card .contact a {
      text-decoration: none;
      color: #fff;
      background: #157579;
      padding: 5px 20px;
      border-radius: 5px;
      transition: .3s;
    }

    .card .contact a:hover {

      background: #0b6164;

    }
    .containere {
            width: 100%;
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
            box-sizing: border-box;
        }
  </style>
  </style>

</head>

<body>

  @foreach($invo as $invop)
  <div class="card">
    <div class="head">
      <div class="circle"></div>
      <div class="img">

        <img src="/logos/{{$invop->categoria->logo}}" width="75%">
      </div>
    </div>
    <div class="descripcion">
      <h3>{{$invop->nombreProyecto}}</h3>
      <p> {{$invop->descripcionProyecto}}</p>
    </div>
    <div class="contact">
      <a href="{{route('InvPro.filter',$invop->id) }}">Leer más</a>

    </div> 
  </div>
  @endforeach

    <!-- Template Main JS File -->
    <script src="../../../assets1/js/main.js"></script>

    <div class="containere">
      <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-20    col-md-20">
                      <div class="footer-info">
                          <h3>Observatorio SRCH</h3>
                          <p class="pb-3"><em></em></p>
                          <h4>Te invitamos a seguirnos</h4>
                          <div class="social-links mt-3">
                              <a href="https://twitter.com/CemedeUna?s=20&t=03tQ0cHRwWTHpsUReMxIvQ" class="twitter"><i
                                      class="bx bxl-twitter"></i></a>
                              <a href="https://www.facebook.com/unacemede" class="facebook"><i
                                      class="bx bxl-facebook"></i></a>
                              <a href="https://instagram.com/unacemede?igshid=YmMyMTA2M2Y=" class="instagram"><i
                                      class="bx bxl-instagram"></i></a>
                              <a href="https://youtube.com/channel/UCEm2F4ZxRBORG3IztQAqnyQ" class="youtube"><i
                                      class="bx bxl-youtube"></i></a>

                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

      <div class="container">
          <div class="copyright">
              &copy; Copyright <strong><span>Observatorio SRCH, UNA</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
              Designed by <a href="https://bootstrapmade.com/">Universidad Nacional de Costa Rica</a>
          </div>
      </div>
  </footer><!-- End Footer -->
</div>


</body>
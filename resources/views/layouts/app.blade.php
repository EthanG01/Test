@can('ver-usuario')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="{{ asset('ConnectPlus/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('ConnectPlus/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ConnectPlus/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('ConnectPlus/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('ConnectPlus/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('ConnectPlus/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('ConnectPlus/css/style2.css') }}">

    @yield('page_css')


    @yield('css')
</head>
<body>

<div id="app">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          @include('layouts.sidebar')
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
                @include('layouts.footer')
            </div>
          </div>
        </div>
      </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

    

@include('profile.change_password')
@include('profile.edit_profile')

</body>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('ConnectPlus/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('ConnectPlus/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('ConnectPlus/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('ConnectPlus/js/off-canvas.js') }}"></script>
    <script src="{{ asset('ConnectPlus/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('ConnectPlus/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('ConnectPlus/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
@yield('page_js')
@yield('scripts')
@yield('js')
<script>
    let loggedInUser =@json(\Illuminate\Support\Facades\Auth::user());
    let loginUrl = '{{ route('login') }}';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>
</html>
@endcan

@if(Gate::forUser(Auth::user())->denies('ver-vista'))
<!DOCTYPE html>
<html>
<head>
<title>Asignación de Rol</title>
<style>
  /* Center the div */
  #container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  /* Position the image and text */
  #container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }
  #overlay {
    position: relative;
    z-index: 1;
    text-align: center;
    color: white;
  }
  /* Style the close button */
  #close-btn {
    padding: 10px;
    font-size: 30px;
    background-color: white;
    color: black;
    border: none;
    cursor: pointer;
    margin-top: 20px;
  }
</style>
</head>
<body>
<div id="container">
  <img src="../../../img/una.webp" alt="Spinner">
    <div id="overlay">
    <h1>Revisión de cuenta</h1>
    <p>Por favor, espere mientras un administrador autoriza su cuenta.</p>
    <button id="close-btn" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">Salir</button>
    
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
      {{ csrf_field() }}
    </form>
  </div>
</div>
</body>
</html>
@endif








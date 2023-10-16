<style>
  .navbar .navbar-brand-wrapper .navbar-brand img{
    width: 70px ;
    max-width: 100px;
    height: 50px;
  }
</style>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo icon" href="/home"><img src="{{ asset('img/logo.png') }}" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="/home"><img src="{{ asset('img/logo.png') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <div class="search-field d-none d-xl-block">

      </div>
      <ul class="navbar-nav navbar-nav-right">
        @if(\Illuminate\Support\Facades\Auth::user())
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="{{ asset('img/logo.png') }}" alt="image">
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black"> ¡Hola! {{ Auth::user()->name }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            <div class="p-2">
              <h5 class="dropdown-header text-uppercase pl-2 text-dark"> Bienvenido, {{ Auth::user()->name }}</h5>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ url('logout') }}" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();" >
                <span>Salir</span>
                <i class="mdi mdi-logout ml-1"></i>
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                {{ csrf_field() }}
            </form>
            </div>
          </div>
        </li>
        @else
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="" alt="image">
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">{{ __('messages.common.hello') }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            <div class="p-2">
              <div role="separator" class="dropdown-divider"></div>
              <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">{{ __('messages.common.login') }}
                / {{ __('messages.common.register') }}</h5>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"  href="{{ route('login') }}">
                <span>{{ __('messages.common.login') }}</span>
                <i class="mdi mdi-lock ml-1"></i>
              </a>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{ route('register') }}">
                <span>{{ __('messages.common.register') }}</span>
                <i class="mdi mdi-logout ml-1"></i>
              </a>
            </div>
          </div>
        </li>
        @endif
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
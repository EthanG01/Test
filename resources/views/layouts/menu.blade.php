<ul class="nav {{ Request::is('*') ? 'active' : '' }}">
	<li class="nav-item nav-category">Menu</li>
	<li class="nav-item">
	  <a class="nav-link" href="/home">
		<span class="icon-bg"><i class="mdi mdi-view-dashboard menu-icon"></i></span>
		<span class="menu-title">Dashboard</span>
	  </a>
	</li>
	@can('ver-usuario')
	<li class="nav-item">
	  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
		<span class="icon-bg"><i class="mdi mdi-account-group menu-icon"></i></span>
		<span class="menu-title">Usuarios y Roles</span>
		<i class="menu-arrow"></i>
	  </a>
	  <div class="collapse" id="ui-basic">
		<ul class="nav flex-column sub-menu">
		@can('ver-usuario') 
		  <li class="nav-item"> <a class="nav-link" href="/usuarios">Usuarios</a></li>
		  @endcan
		  @can('ver-rol') 
		  <li class="nav-item"> <a class="nav-link" href="/roles">Roles</a></li>
		  @endcan
		</ul>
	  </div>
	</li>
	@endcan
	@can('ver-galeria') 
	<li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
		  <span class="icon-bg"><i class="mdi mdi-image-album menu-icon"></i></span>
		  <span class="menu-title">Galería</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic2">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/temas">Temas</a></li>
			<li class="nav-item"> <a class="nav-link" href="/galerias">Imágenes</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-organizacion') 
	  
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
		  <span class="icon-bg"><i class="mdi mdi-domain menu-icon"></i></span>
		  <span class="menu-title">Organización y Inv</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic3">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/cantons">Ubicación</a></li>
			<li class="nav-item"> <a class="nav-link" href="/organizacions">Info.Organización</a></li>
			<li class="nav-item"> <a class="nav-link" href="/involucrados">Info.Involucrado</a></li>
			<li class="nav-item"> <a class="nav-link" href="/involucrado-proyectos">Involucrado/Proyecto</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-proyecto')
	  
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
		  <span class="icon-bg"><i class="mdi mdi-briefcase menu-icon"></i></span>
		  <span class="menu-title">Proyectos</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic4">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/categorias">Categorías</a></li>
			<li class="nav-item"> <a class="nav-link" href="/proyectos">Info.Proyecto</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-articulo') 
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
		  <span class="icon-bg"><i class="mdi mdi-note-check-outline menu-icon"></i></span>
		  <span class="menu-title">Artículos</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic5">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/dimensions">Dimensiones</a></li>
			<li class="nav-item"> <a class="nav-link" href="/variables">Variables</a></li>
			<li class="nav-item"> <a class="nav-link" href="/indicadors">Indicadores</a></li>
			<li class="nav-item"> <a class="nav-link" href="/tipo-articulos">Tipo Artículos</a></li>
			<li class="nav-item"> <a class="nav-link" href="/articulos">Docs.Artículos</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-tesis') 
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
		  <span class="icon-bg"><i class="mdi mdi-book-account-outline menu-icon"></i></span>
		  <span class="menu-title">Tesis</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic6">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/tipo-tesis">Tipo Tesis</a></li>
			<li class="nav-item"> <a class="nav-link" href="/tesis">Docs.Tesis</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-libroRevista')
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic7">
		  <span class="icon-bg"><i class="mdi mdi-book-variant menu-icon"></i></span>
		  <span class="menu-title">Libros</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic7">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/editorials">Editoriales</a></li>
			<li class="nav-item"> <a class="nav-link" href="/tipo-libros">Tipos Lib/Rev</a></li>
			<li class="nav-item"> <a class="nav-link" href="/libro-revistas">Docs.Libro/Revista</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-repositorio') 
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic8">
		  <span class="icon-bg"><i class="mdi mdi-account-box menu-icon"></i></span>
		  <span class="menu-title">Repositorios</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic8">
		  <ul class="nav flex-column sub-menu">
			<li class="nav-item"> <a class="nav-link" href="/repositorioNuevo">Docs.Repositorio</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	  @can('ver-articulo') 
	  <li class="nav-item">
		<a class="nav-link" data-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic9">
		  <span class="icon-bg"><i class="mdi mdi-account-box menu-icon"></i></span>
		  <span class="menu-title">Info Documentación</span>
		  <i class="menu-arrow"></i>
		</a>
		<div class="collapse" id="ui-basic9">
		  <ul class="nav flex-column sub-menu">
		    <li class="nav-item"> <a class="nav-link" href="/carreras">Carreras</a></li>
			<li class="nav-item"> <a class="nav-link" href="/autors">Autores</a></li>
			<li class="nav-item"> <a class="nav-link" href="/etiquetas">Etiquetas</a></li>
		  </ul>
		</div>
	  </li>
	  @endcan
	<li class="nav-item sidebar-user-actions">
	  <div class="sidebar-user-menu">
		<a href="{{ url('logout') }}" onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
		  <span class="menu-title">Salir</span></a>
		  <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
			{{ csrf_field() }}
		</form>
	  </div>
	</li>
  </ul>
<nav class="cpanel navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="wrapper-brand active">

      @if(Auth::check())
      <i class="fas fa-bars"></i>
      @endif

      <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fab fa-github"></i>  <b>CAT</b>CHEF
      </a>
    </div>

    <div class="collapse navbar-collapse" id="userLogin">
      <ul class="navbar-nav ml-auto">

       @if(Auth::check())

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
          Bienvenido {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/cpanel/perfil') }}">Perfil</a>
          <a class="dropdown-item" href="{{ route('auth.logout') }}">Cerrar sesión</a>
        </li>

        @else

        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('registro') }}">Registro</a>
        </li>

        @endif
      </ul>
    </div>
  </div>

</nav>


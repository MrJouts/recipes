<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  
  <a class="navbar-brand" href="#">Logo</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/recetas') }}">Recetas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
      </li>
    </ul>
  </div>  

  <div class="collapse navbar-collapse" id="userLogin">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/ingresar') }}">Ingresar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/registro') }}">Registro</a>
      </li>
    </ul>
  </div>
</div>

</nav>

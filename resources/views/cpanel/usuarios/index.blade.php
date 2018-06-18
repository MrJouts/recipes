@extends ('cpanel.master')

@section ('title')
Catchef - Cpanel - Usuarios
@endsection

@section ('content')

<section>
  <div class="container-fluid container-cpanel">
    <div class="row">
      <div class="col">

        <h1 class="my-4">Lista de usuarios</h1>


        @if(Session::has('status'))
        @component('components.alert', ['tipo' => Session::get('class')])
        {!! Session::get('status') !!}
        @endcomponent
        @endif

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">email</th>
              <th scope="col">Estado</th>
              <th scope="col">Nivel</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
@foreach ($usuarios as $usuario)
  <tr>

    <th>{{ $usuario->id }}</th>
    <td>{{ $usuario->name }}</td>
    <td>{{ $usuario->email }}</td>
    <td>{{ $usuario->estado }}</td>
    <td>{{ $usuario->nivel }}</td>

    <td>
      <a class="btn btn-primary acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
      <a class="btn btn-primary acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
      <a class="btn btn-primary acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></a>
    </td>
  </tr>
@endforeach


          </tbody>
        </table>

      </div>
    </div>
  </div>
</section>



@endsection

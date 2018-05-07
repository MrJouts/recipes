@extends ('layouts.master')

@section ('title')
Recipes - Categorías
@endsection

@section ('content')

@include ('cpanel.nav')


<section>
	<div class="container-fluid container-cpanel">

		<div class="row">
			<div class="col">
				<h1 class="my-4">Lista de categorías</h1>
				
			</div>
		</div>
		<div class="row">

			<div class="col-4">
				<form method="POST" action="{{ route('categorias.store') }}">
					@csrf
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Postres">
					</div>

					<button type="submit" class="btn btn-primary">Crear categoría</button>
				</form>
			</div>

			<div class="col-6">

				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Categoría</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>

						@foreach($categorias as $categoria)
							
						<tr>
							<th scope="row">1</th>
							<td>{{ $categoria->nombre }}</td>
							<td>
								<a class="btn btn-info acciones" href="{{ url('cpanel/recetas/1') }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button" data-toggle="modal" data-placement="top" title="Eliminar" data-target="#modalEliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						
						@endforeach

						<tr>
							<th scope="row">1</th>
							<td>Postres</td>
							<td>
								<a class="btn btn-info acciones" href="{{ url('cpanel/recetas/1') }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button" data-toggle="modal" data-placement="top" title="Eliminar" data-target="#modalEliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<tr>
							<th scope="row">1</th>
							<td>Plato principal</td>
							<td>
								<a class="btn btn-info acciones" href="{{ url('cpanel/recetas/1') }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button" data-toggle="modal" data-placement="top" title="Eliminar" data-target="#modalEliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<tr>
							<th scope="row">1</th>
							<td>Tartas</td>
							<td>
								<a class="btn btn-info acciones" href="{{ url('cpanel/recetas/1') }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button" data-toggle="modal" data-placement="top" title="Eliminar" data-target="#modalEliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="exampleModalLabel">Eliminar categoría</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Eliminar categoría <b>Postres</b>
			</div>
			<div class="modal-footer justify-content-around">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">confirmar</button>
			</div>
		</div>
	</div>
</div>

@endsection

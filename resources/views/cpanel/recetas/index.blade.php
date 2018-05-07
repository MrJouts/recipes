@extends ('layouts.master')

@section ('title')
Recipes - Home
@endsection

@section ('content')

@include ('cpanel.nav')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col">

				<h1 class="my-4">Lista de recetas</h1>

				<a href="{{ route('recetas.create') }}" class="btn btn-primary mb-4">Agregar receta</a>
				
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th class="image" scope="col"><i class="far fa-image"></i></th>
							<th scope="col">Título</th>
							<th scope="col">Creado el</th>
							<th scope="col">Categoría</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach ($recetas as $receta)

						<tr>
							<th scope="row">1</th>
							<td><img src="http://fillmurray.com/60/60" alt=""></td>
							<td>{{ $receta->titulo }}</td>
							<td>{{ $receta->created_at->diffForHumans() }}</td>
							<td><span class="badge badge-primary">{{ $receta->categoria->nombre }}</span></td>
							<td>

								<a class="btn btn-info acciones" href="{{ url('cpanel/recetas/1') }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button" data-toggle="modal" data-placement="top" title="Eliminar" data-target="#modalEliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>

						@endforeach

						<tr>
							<th scope="row">1</th>
							<td><img src="http://fillmurray.com/60/60" alt=""></td>
							<td>Quinoa con queso de oveja, puré de berenjenas y tomates asados</td>
							<td>26 de Mayo de 2018</td>
							<td><span class="badge badge-primary">Entradas</span></td>
							<td>

								<a class="btn btn-info acciones" href="{{ url('cpanel/recetas/1') }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button" data-toggle="modal" data-placement="top" title="Eliminar" data-target="#modalEliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>

						<tr>
							<th scope="row">2</th>
							<td><img src="http://fillmurray.com/60/60" alt=""></td>
							<td>Rosca de Reyes</td>
							<td>14 de Mayo de 2018</td>
							<td><span class="badge badge-danger">Postres</span></td>
							<td>
								<a class="btn btn-info acciones" href="#" role="button"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td><img src="http://fillmurray.com/60/60" alt=""></td>
							<td>Rueda de achuras</td>
							<td>4 de Mayo de 2018</td>
							<td><span class="badge badge-warning">Platos principales</span></td>
							<td>
								<a class="btn btn-info acciones" href="#" role="button"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td><img src="http://fillmurray.com/60/60" alt=""></td>
							<td>Flan al puro huevo con caramelo a seco</td>
							<td>1 de Mayo de 2018</td>
							<td><span class="badge badge-success">Dulces</span></td>
							<td>
								<a class="btn btn-info acciones" href="#" role="button"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td><img src="http://fillmurray.com/60/60" alt=""></td>
							<td>Wok de salmón</td>							
							<td>29 de Abril de 2018</td>
							<td><span class="badge badge-warning">Platos principales</span></td>
							<td>
								<a class="btn btn-info acciones" href="#" role="button"><i class="far fa-eye"></i></a>
								<a class="btn btn-dark acciones" href="#" role="button"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-danger acciones" href="#" role="button"><i class="fas fa-trash"></i></a>
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
				<h5 class="modal-title text-center" id="exampleModalLabel">Eliminar receta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Eliminar receta <b>Quinoa con queso de oveja, puré de berenjenas y tomates asados</b>
			</div>
			<div class="modal-footer justify-content-around">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">confirmar</button>
			</div>
		</div>
	</div>
</div>

@endsection

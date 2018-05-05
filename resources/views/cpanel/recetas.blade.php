@extends ('layouts.master')

@section ('title')
Recipes - Home
@endsection

@section ('content')


<nav class="menu-cpanel">
	<div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
		<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
		<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
		<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
	</div>
</nav>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col m-auto">

				<h1 class="text-center m-4">Lista de recetas</h1>

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

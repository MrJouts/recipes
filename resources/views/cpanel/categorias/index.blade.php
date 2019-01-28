@extends ('cpanel.master')

@section ('title')
Catchef - Cpanel - Categorías
@endsection

@section ('content')

<section>
	<div class="container-fluid container-cpanel">

		<div class="row">
			<div class="col">
				<h1 class="my-4">Lista de categorías</h1>				
				@if(Session::has('status'))			
				@component('components.alert', ['tipo' => 'success'])
				{!! Session::get('status') !!}
				@endcomponent
				@endif
			</div>
		</div>

		<div class="row">			

			<div class="col-4">
				<form method="POST" action="{{ route('categorias.store') }}">
					@csrf
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Postres">
						@if($errors->has('nombre'))
						<small class="text-danger">{{ $errors->first('nombre') }}</small>
						@endif
					</div>

					<button type="submit" class="btn btn-primary">Crear categoría</button>
				</form>
			</div>

			<div class="col-6">
				<p class="mb-2">Todas las categorias</p>
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
							<th scope="row">{{ $categoria->id_categoria }}</th>
							<td>{{ $categoria->nombre }}</td>
							<td>
								
								<a class="btn btn-primary acciones" href="{{ route( 'categorias.edit', ['id' => $categoria->id_categoria] ) }}" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>

								<a class="btn btn-primary acciones" href="{{ route( 'categorias.confirmDestroy', ['id' => $categoria->id_categoria] ) }}" role="button" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
						
						@endforeach

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

@extends ('cpanel.master')

@section ('title')
Catchef - Cpanel - Recetas
@endsection

@section ('content')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col">

				<h1 class="my-4">Lista de recetas</h1>

				<a href="{{ route('recetas.create') }}" class="btn btn-primary mb-4">Agregar receta</a>
				
				@if(Session::has('status'))			
				@component('components.alert', ['tipo' => Session::get('class')])
				{!! Session::get('status') !!}
				@endcomponent
				@endif

				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th class="image" scope="col"><i class="far fa-image"></i></th>
							<th scope="col">Título</th>
							<th scope="col">Fecha de creación</th>
							<th scope="col">Categoría</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>

						@foreach ($recetas as $receta)

						<tr>
							<th scope="row">{{ $receta->id_receta }}</th>
							<td>
								<img class="img-fluid img-table" src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}">
							</td>
							<td>{{ $receta->titulo }}</td>
							<td>{{ $receta->created_at->format('jS \d\e F Y') }}</td>
							<td>
								@if ($receta->categoria == null)
								{{ 'sin categoría' }}
								@else
								{{ $receta->categoria->nombre }}
								@endif
							</td>
							<td>
								<a class="btn btn-primary acciones" href="{{ route( 'recetas.show', ['id' => $receta->id_receta] ) }}" role="button" data-toggle="tooltip" data-placement="top" title="Ver"><i class="far fa-eye"></i></a>
								<a class="btn btn-primary acciones" href="{{ route( 'recetas.edit', ['id' => $receta->id_receta] ) }}" role="button" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></a>
								<a class="btn btn-primary acciones" href="{{ route( 'recetas.confirmDestroy', ['id' => $receta->id_receta] ) }}" role="button" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"></i></a>
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

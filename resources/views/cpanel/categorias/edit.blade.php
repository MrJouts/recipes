@extends ('cpanel.master')

@section ('title')
Editar categoría
@endsection

@section ('content')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col-4">

				<div class="d-flex justify-content-between align-items-center">
					<h1 class="my-4">Editar categoría</h1>
					<a href="{{ url()->previous() }}" class="btn btn-warning">
						<i class="fas fa-angle-left"></i> Volver
					</a>
				</div>

				<form method="POST" action="{{ route('categorias.update' , ['id' => $categoria->id_categoria] ) }}">
					@csrf
					@method('PUT')

					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Postres" value="{{ old('nombre', $categoria->nombre) }}">
						@if($errors->has('nombre'))
						<small class="text-danger">{{ $errors->first('nombre') }}</small>
						@endif
					</div>

					<button type="submit" class="btn btn-primary mb-4">Guardar cambios</button>

				</form>

			</div>
		</div>
	</div>
</section>

@endsection
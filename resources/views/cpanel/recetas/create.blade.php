@extends ('layouts.master')

@section ('title')
Recipes - Home
@endsection

@section ('content')

@include ('cpanel.nav')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col-7">

				<div class="d-flex justify-content-between align-items-center">
					<h1 class="my-4">Crear receta</h1>
					<a href="{{ url()->previous() }}" class="btn btn-warning">
						<i class="fas fa-angle-left"></i> Volver
					</a>
				</div>

				<form method="POST" action="{{ route('recetas.store') }}">
					<div class="form-group">
						@csrf
						<label for="titulo">Título</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ñoquis con bolognesa" value="{{ old('titulo') }}">
						@if($errors->has('titulo'))
						<small class="text-danger">{{ $errors->first('titulo') }}</small>
						@endif
					</div>

					<p>Elegir imagen</p>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Subir imagen</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="img_src" name="img_src">
							<label class="custom-file-label" for="img_src">Elegir imagen</label>
						</div>
					</div>

					<div class="form-group">
						<label for="ingredientes">Ingredientes</label>
						<textarea class="form-control" name="ingredientes" id="ingredientes" cols="30" rows="5" value="{{ old('ingredientes') }}"></textarea>
						@if($errors->has('ingredientes'))
						<small class="text-danger">{{ $errors->first('ingredientes') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="preparacion">Preparación</label>
						<textarea class="form-control" name="preparacion" id="preparacion" cols="30" rows="10" value="{{ old('preparacion') }}"></textarea>
						@if($errors->has('preparacion'))
						<small class="text-danger">{{ $errors->first('preparacion') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="categoria">Categoría</label>
						<select id="id_categoria" name="id_categoria" class="form-control">
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->id_categoria }}">
								{{ $categoria->nombre }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
						<a  href="{{ url()->previous() }}" role="button" class="btn btn-light mb-4">Cancelar</a>
						<button type="submit" class="btn btn-primary mb-4">Crear receta</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</section>

@endsection
@extends ('cpanel.master')

@section ('title')
Catchef - Editar - {{ $receta->titulo }}
@endsection

@section ('content')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col-7">

				<div class="d-flex justify-content-between align-items-center">
					<h1 class="my-4">Editar receta</h1>
					<a href="{{ url()->previous() }}" class="btn btn-warning">
						<i class="fas fa-angle-left"></i> Volver
					</a>
				</div>

				<form method="POST" action="{{ route('recetas.update' , ['id' => $receta->id_receta] ) }}" enctype="multipart/form-data" class="form-editar">
					@csrf
					@method('PUT')
					<div class="form-group">

						<label for="titulo">Título</label>
						<input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $receta->titulo) }}">
						@if($errors->has('titulo'))
						<small class="text-danger">{{ $errors->first('titulo') }}</small>
						@endif
					</div>

					<p>Imagen</p>
					<div class="row d-flex mb-3">
						<div class="col-4">

							<img class="img-fluid img-form" src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}">
							
						</div>
						<div class="col-8 align-self-end">
							
							<label for="img_src">Elegir imagen</label>
							<input type="file" class="form-control" id="img_src" name="img_src" placeholder="Ñoquis con bolognesa" value="{{ old('img_src', $receta->img_src) }}">
							@if($errors->has('img_src'))
							<small class="text-danger">{{ $errors->first('img_src') }}</small>
							@endif
							
						</div>
					</div>

					<div class="form-group">
						<label for="ingredientes">Ingredientes</label>
						<textarea class="form-control" name="ingredientes" id="ingredientes" cols="30" rows="5">{{ old('ingredientes', $receta->ingredientes) }}</textarea>
						@if($errors->has('ingredientes'))
						<small class="text-danger">{{ $errors->first('ingredientes') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="preparacion">Preparación</label>
						<textarea class="form-control" name="preparacion" id="preparacion" cols="30" rows="10">{{ old('preparacion', $receta->preparacion) }}</textarea>
						@if($errors->has('preparacion'))
						<small class="text-danger">{{ $errors->first('preparacion') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="categoria">Categoría</label>
						<select id="id_categoria" name="id_categoria" class="form-control">
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->id_categoria }}"
								@if(old('id_categoria', $receta->id_categoria) == $categoria->id_categoria) 
								{{ 'selected' }}
								@endif
								>
								{{ $categoria->nombre }}
							</option>
							@endforeach
						</select>
					</div>

					<div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
						<a  href="{{ url()->previous() }}" role="button" class="btn btn-light mb-4">Cancelar</a>
						<button type="submit" class="btn btn-primary mb-4">Guardar cambios</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</section>

@endsection
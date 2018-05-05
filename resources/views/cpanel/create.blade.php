@extends ('layouts.master')

@section ('title')
Recipes - Home
@endsection

@section ('content')

<section>
	<div class="container">
		<h1 class="text-center m-4">Crear receta</h1>
		<div class="row">
			<div class="col-7">
				
				<a href="{{ url()->previous() }}" class="btn btn-warning mb-4">
					<i class="fas fa-angle-left"></i> Volver</a>
				<form>
					<div class="form-group">
						<label for="titulo">Título</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ñoquis con bolognesa">
					</div>

					<p>Elegir imagen</p>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Subir imagen</span>
						</div>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile01">
							<label class="custom-file-label" for="inputGroupFile01">Elegir imagen</label>
						</div>
					</div>

					<div class="form-group">
						<label for="ingredientes">Ingredientes</label>
						<textarea class="form-control" name="ingredientes" id="ingredientes" cols="30" rows="5"></textarea>
					</div>

					<div class="form-group">
						<label for="preparacion">Preparación</label>
						<textarea class="form-control" name="preparacion" id="preparacion" cols="30" rows="10"></textarea>
					</div>

					<div class="form-group">
						<label for="titulo">Categoría</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ñoquis con bolognesa">
					</div>

					<div class="form-group">
						<label for="categoria">State</label>
						<select id="categoria" class="form-control">
							<option selected>Postres</option>
							<option>Plato principal</option>
							<option>Dulces</option>
							<option>Carnes</option>
							<option>Ensaladas</option>
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
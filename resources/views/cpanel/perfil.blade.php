@extends ('layouts.master')

@section ('title')
Recipes - Perfil
@endsection

@section ('content')

@include ('cpanel.nav')


<section>
	<div class="container-fluid container-cpanel">

		<div class="row">
			<div class="col">
				<h1 class="my-4">Perfil</h1>
				
			</div>
		</div>

		<div class="row">

			<div class="col-6">
				<form>
					<div class="form-group">
						<label class="d-block" for="nombre">Avatar</label>
						<img src="http://fillmurray.com/200/200" alt="perfil">
					</div>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="nombre">Contraseña</label>
						<input type="password" class="form-control" id="nombre" name="nombre" placeholder="Postres">
					</div>
					<button type="submit" class="btn btn-primary">Actualizar perfil</button>

				</form>
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

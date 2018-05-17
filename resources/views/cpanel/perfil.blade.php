@extends ('cpanel.master')

@section ('title')
Recipes - Perfil
@endsection

@section ('content')

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

@endsection

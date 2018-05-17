@extends ('cpanel.master')

@section ('title')
Recipes - Perfil
@endsection

@section ('content')

<section id="perfil">
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
						<img class="img-fluid" src="{{ url('/img/perfil.jpg') }}" alt="">
					</div>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="{{ Auth::user()->name }}">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<input type="password" class="form-control" id="password" name="password" >
					</div>
					<button type="submit" class="btn btn-primary">Actualizar perfil</button>
				</form>
			</div>
		</div>

	</div>
</section>

@endsection

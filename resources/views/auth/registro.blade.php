@extends ('layouts.master')

@section ('title')
Recipes - Contacto
@endsection

@section ('content')

<section id="registro-1">
	<div class="container">
		<div class="row">
			<div class="col">				
				<h1 class="text-center m-5">Registro</h1>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-6 m-auto">

				<form action="{{ route('auth.doRegistro') }}" method="post">
					@csrf

					<div class="form-group">
						<label for="name">Nombre: </label>
						<input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
						@if($errors->has('name'))
						<small class="text-danger">{{ $errors->first('name') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
						@if($errors->has('email'))
						<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="password">Password: </label>
						<input type="password" id="password" name="password" class="form-control">
						@if($errors->has('password'))
						<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="password_confirmation">Confirmar Password: </label>
						<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
					</div>

					<button class="btn btn-primary">Registrar</button>

				</form>
			</div>
		</div>
	</div>
</section>

@endsection
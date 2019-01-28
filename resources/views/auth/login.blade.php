@extends ('layouts.master')

@section ('title')
Recipes - Login
@endsection

@section ('content')

<section id="login-1">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center m-5">Login</h1>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-6 m-auto">

				@if(Session::has('status'))
				<div class="alert alert-danger mb-3" role="alert">
					{{ Session::get('status') }}
				</div>
				@endif

				<form method="post" action="{{ route('auth.doLogin') }}">
					@csrf

					<div class="form-group">
						<label for="email">Correo electrónico: </label>
						<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
						@if($errors->has('email'))
						<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label for="password">Contraseña: </label>
						<input type="password" name="password" id="password" class="form-control">
						@if($errors->has('password'))
						<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
					</div>

					<button class="btn btn-primary">Ingresar</button>

				</form>
			</div>
		</div>
	</div>
</section>

@endsection
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
				@if(Session::has('status'))
				@component('components.alert', ['tipo' => Session::get('class')])
				{!! Session::get('status') !!}
				@endcomponent
				@endif

				<form method="POST" action="{{ route('usuarios.update' , Auth::user()->id ) }}" enctype="multipart/form-data" class="form-editar">
					@csrf
					<p>Avatar</p>
					<div class="row d-flex mb-3">
						<div class="col-4">
							@if (!Auth::user()->avatar)
							<img id="img-preview" class="img-fluid" src="{{ url('img/avatar.png') }}" alt="{{ Auth::user()->name }}">
							@else
							<img id="img-preview" class="img-fluid" src="{{ url('storage/' . Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
							@endif
						</div>
						<div class="col-8 align-self-end">
							<label for="img_src">Elegir imagen</label>
							<input type="file" class="form-control" id="img_src" name="avatar" placeholder="Ñoquis con bolognesa" value="{{ old('avatar') }}">
							@if($errors->has('avatar'))
							<small class="text-danger">{{ $errors->first('avatar') }}</small>
							@endif
						</div>
					</div>

					<div class="form-group">
						<label for="name">Nombre</label>
						<input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
						@if($errors->has('name'))
						<small class="text-danger">{{ $errors->first('name') }}</small>
						@endif
					</div>

					<button type="submit" class="btn btn-primary">Actualizar perfil</button>
				</form>
			</div>
		</div>

	</div>
</section>

@endsection

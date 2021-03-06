@extends ('layouts.master')

@section ('title')
Catchef - {{ $receta->titulo }}
@endsection

@section ('content')

<section id="recetas-single">
	<div class="container py-5">

		<div class="row d-flex align-items-center">
			<div class="col-4 text-right">
				<div class="wrapper-title">
					<div class="badge badge-primary mb-2">{{ $receta->categoria->nombre }}</div>
					<h1>{{ $receta->titulo }}</h1>
				</div>
			</div>
			<div class="col-8">
				<img class="img-fluid" src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}">
			</div>
		</div>

		<div class="row my-5">

			<div class="col-4 text-right">
				<h2 class="mb-4">Ingredientes</h2>

				<div class="ingredientes">
					{!! $receta->ingredientes !!}
				</div>

			</div>

			<div class="col-8">
				<div class="preparacion">
					<h2 class="mb-4">Preparación</h2>
					{!! $receta->preparacion !!}
				</div>
				<div class="comentarios">

					<h2 class="my-4">Comentarios</h2>
					@if (!$receta->comentarios)
					<p>Se el primero en dejar un comentario!</p>
					@else
					<ul class="list-unstyled comentarios-list">
						@foreach ($receta->comentarios as $comentario)
						<li class="media">
							
							@if (!$comentario->usuario->avatar)
							<img class="img-fluid mr-3 comentario-avatar" src="{{ url('img/avatar.png') }}" alt="{{ $comentario->usuario->name }}">
							@else
							<img class="img-fluid mr-3 comentario-avatar" src="{{ url('storage/' . $comentario->usuario->avatar) }}" alt="{{ $comentario->usuario->name }}">
							@endif

							<div class="media-body">
								<span class="comentario-user-name">{{ $comentario->usuario->name }}</span>

								<p>
									{{ $comentario->comentario }}
								</p>
								<small class="text-muted">
									<i class="fas fa-clock"></i>
									{{ $comentario->created_at->diffForHumans() }}
								</small>
							</div>
						</li>
						@endforeach
					</ul>
					@endif

					<h2 class="my-4">Dejar un comentario</h2>

					@if(Auth::check())
					<form method="POST" action="{{ route('recetas.comments', ['id' => $receta->id_receta]) }}">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="comentario">Comentario</label>
							<textarea class="form-control" name="comentario" id="comentario" cols="30" rows="10" placeholder="Escribe tu comentario aqui">{{ old('comentario') }}</textarea>
							@if($errors->has('comentario'))
							<small class="text-danger">{{ $errors->first('comentario') }}</small>
							@endif
						</div>
						<button type="submit" class="btn btn-primary">Comentar</button>
					</form>

					@else
					<p>Para dejar un comentario debes <a href="{{url('login')}}">iniciar sesion</a></p>
					@endif

				</div>
			</div>
		</div>
	</div>
</section>

@endsection
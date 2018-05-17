@extends ('layouts.master')

@section ('title')
Catchef - {{ $receta->titulo }}
@endsection

@section ('content')

<section id="recetas-single">
	<div class="container py-5">

		<div class="row d-flex align-items-center">
			<div class="col-4 text-right">
				<div class="badge badge-primary mb-2">{{ $receta->categoria->nombre }}</div>
				<h1>{{ $receta->titulo }}</h1>
			</div>
			<div class="col-8">
				<img class="img-fluid" src="{{ url('/img/'. $receta->img_src) }}" alt="">
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
				
				<a class="btn btn-primary" href="{{ url('/recetas') }}">Ver más recetas</a>
			</div>

		</div>

	</div>
</section>

@endsection

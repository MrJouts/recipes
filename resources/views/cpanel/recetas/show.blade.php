@extends ('layouts.master')

@section ('title')
Recipes - Home
@endsection

@section ('content')

@include('cpanel.nav')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col-8">

				<h1 class="my-4">Ver receta<small>En esta seccion podras ver todas tus recetas</small></h1>
				
				<div class="row">
					<div class="col">
						<p>Ruta imagen: {{ $receta->img_src }}</p>
						<h2>{{ $receta->titulo }}</h2>
						
						<img class="img-fluid"  src="{{ url('/img/'. $receta->img_src) }}" alt="">
						<h3 class="my-4">Ingredientes</h3>
						<p>{!! $receta->ingredientes !!}</p>

						<h3 class="my-4">Preparación</h3>
						<p>{!! $receta->preparacion !!}</p>
						<a class="btn btn-primary" href="#">Editar receta</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection


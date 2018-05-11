@extends ('layouts.master')

@section ('title')
Recipes - Home
@endsection

@section ('content')

@include('cpanel.nav')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col m-auto">

				<h1 class="my-4">Ver receta<small>En esta seccion podras ver todas tus recetas</small></h1>
				
				<div class="row">
					<div class="col">
						<p>Ruta imagen: {{ $receta->img_src }}</p>
						<h2>{{ $receta->titulo }}</h2>
						<p>{{ $receta->ingredientes }}</p>
						<p>{!! $receta->preparacion !!}</p>
						<a class="btn btn-primary" href="#">Editar receta</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection


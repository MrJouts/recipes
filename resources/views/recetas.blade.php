@extends ('layouts.master')

@section ('title')
Recipes - Recetas
@endsection

@section ('content')

<section id="recetas-1">
	<div class="container">
		<div class="row">
			<div class="col">
				
				<h1 class="text-center m-5">Recetas</h1>

			</div>
		</div>

		<div class="row">

			@foreach ($recetas as $receta)

			<div class="col-4 mb-4">	
				<div class="card">
				<div class="grid">
					<a href="{{ route( 'recetas.showFront', ['id' => $receta->id_receta] ) }}">
					<figure class="effect-chico">
						<img src="{{ url('/img/'. $receta->img_src) }}" alt="img15"/>			
					</figure>
				</a>
				</div>
					<div class="card-body">
						<span class="badge badge-primary">{{ $receta->categoria->nombre }}</span>
						<h5 class="card-title">{{ $receta->titulo }}</h5>
					</div>
				</div>						
			</div>	

			@endforeach

		</div>
	</div>
</section>

@endsection

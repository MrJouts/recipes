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

			@foreach ($categorias as $categoria)
			<div class="col-4 py-3">							
				<div class="grid">
					<figure class="effect-chico">
						<img src="{{ url('/img/'. $categoria->img_src) }}" alt="img15"/>
						<figcaption>
							<h2>{{ $categoria->nombre }}</h2>
							<a href="#">Ver recetas</a>
						</figcaption>			
					</figure>
				</div>
			</div>	
			@endforeach

		</div>
	</div>
</section>

@endsection

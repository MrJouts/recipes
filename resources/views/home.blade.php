@extends ('layouts.master')

@section ('title')
Catchef
@endsection

@section ('content')

<section id="home">

	<div class="container-fluid mb-4">
		<div class="row d-flex align-items-center justify-content-center text-center hero">
			<div class="col-4">
				<!-- <div class="hero"></div> -->
				<h1>Pizza de quesos azules, peras y nueces</h1>
				<p>Con variedad de quesos, hongos, peras… ¡y más! el chef argentino con raíces sicialianas, te propone que sorprendas a tus seres queridos con estas recetas fáciles y deliciosas. ¡Anímate!</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<div class="card">
					<img class="card-img-top img-fluid" src="http://fillmurray.com/300/200" alt="Card image cap">
					<div class="card-body">
						<h3 class="card-title">Card title</h3>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<img class="card-img-top img-fluid" src="http://fillmurray.com/300/200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<img class="card-img-top img-fluid" src="http://fillmurray.com/300/200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<img class="card-img-top img-fluid" src="http://fillmurray.com/300/200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<img class="card-img-top img-fluid" src="http://fillmurray.com/300/200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<img class="card-img-top img-fluid" src="http://fillmurray.com/300/200" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-12">
				
				<h2 class="my-4">Últimas recetas</h2>

			</div>
			@foreach ($ultimasRecetas as $receta)

			<div class="col-4 mb-4">	
				<div class="card">
					<div class="grid">
						<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $receta->id_receta] ) }}">
							<figure class="effect-chico">
								<img src="{{ url('/img/'. $receta->img_src) }}" alt="{{ $receta->titulo}}"/>			
							</figure>
						</a>
					</div>
					<div class="card-body">
						<span class="badge badge-primary">{{ $receta->categoria->nombre }}</span>
						<h3 class="card-title">{{ $receta->titulo }}</h3>
						<span>
							<i class="far fa-clock"></i>
							{{ $receta->created_at->diffForHumans() }}
						</span>
					</div>
				</div>						
			</div>	

			@endforeach

		</div>
		
		<div class="row">
			<div class="col-12">
				
				<h2 class="my-4">Recetas más populares</h2>
			</div>
			@foreach ($recetasPopulares as $receta)

			<div class="col-3 mb-4">	
				<div class="card">
					<div class="grid">
						<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $receta->id_receta] ) }}">
							<figure class="effect-chico">
								<img src="{{ url('/img/'. $receta->img_src) }}" alt="{{ $receta->titulo}}"/>			
							</figure>
						</a>
					</div>
					<div class="card-body">
						<span class="badge badge-primary">{{ $receta->categoria->nombre }}</span>
						<h3 class="card-title">{{ $receta->titulo }}</h3>
						<span>
							<i class="far fa-clock"></i>
							{{ $receta->created_at->diffForHumans() }}
						</span>
					</div>
				</div>						
			</div>	

			@endforeach

		</div>		
		<div class="row">

			<div class="col-8 mb-4">	
				<h2 class="my-4">Receta de día</h2>
				<div class="card">
					<div class="grid">
						<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $receta->id_receta] ) }}">
							<figure class="effect-chico">
								<img src="{{ url('/img/'. $recetaDelDia->img_src) }}" alt="{{ $recetaDelDia->titulo}}"/>			
							</figure>
						</a>
					</div>
					<div class="card-body">
						<span class="badge badge-primary">{{ $recetaDelDia->categoria->nombre }}</span>
						<h3 class="card-title">{{ $recetaDelDia->titulo }}</h3>
						<span>
							<i class="far fa-clock"></i>
							{{ $receta->created_at->diffForHumans() }}
						</span>
					</div>
				</div>						
			</div>	

			<div class="col-4">
				<h2 class="my-4">Categorías</h2>
				<ul class="list-group">
					@foreach ($categorias as $categoria)
					<li class="list-group-item">
						<i class="fas fa-utensils"></i>
						{{ $categoria->nombre }}
					</li>
					@endforeach
				</ul>
			</div>


		</div>
		
	</div>
</section>

@endsection

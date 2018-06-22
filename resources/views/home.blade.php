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

	<div class="container">

		<div class="row">
			<div class="col-12">
				
				<h2 class="section-title">Últimas recetas</h2>

			</div>
			@foreach ($ultimasRecetas as $receta)

			<div class="col-4 mb-4">	
				<div class="card">
					<div class="grid">
						<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $receta->id_receta] ) }}">
							<figure class="effect-chico">
								<img src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}">
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
				
				<h2 class="section-title">Recetas más populares</h2>
			</div>
			@foreach ($recetasPopulares as $receta)

			<div class="col-3 mb-4">	
				<div class="card">
					<div class="grid">
						<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $receta->id_receta] ) }}">
							<figure class="effect-chico">
								<img src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}">
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
				<h2 class="section-title">Receta de día</h2>
				<div class="card">
					<div class="grid">
						<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $recetaDelDia->id_receta] ) }}">
							<figure class="effect-chico">
								<img src="{{ url('storage/' . $recetaDelDia->img_src) }}" alt="{{ $recetaDelDia->titulo }}">
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
				<h2 class="section-title">Categorías</h2>
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

@extends ('layouts.master')

@section ('title')
Catchef - Recetas
@endsection

@section ('content')

<section id="recetas">
	<div class="container">
		<div class="row">
			<div class="col">
				
				<h1 class="text-center m-5 title">Recetas</h1>

			</div>
		</div>

		<div class="row">

			@foreach ($recetas as $receta)

			<div class="col-4 mb-4">	
				<div class="card">
				<div class="grid">
					<a href="{{ route( 'recetas.showFrontRecetas', ['id' => $receta->id_receta] ) }}">
					<figure class="effect-chico">
                        <img src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}"/>
					</figure>
				</a>
				</div>
					<div class="card-body">
						<span class="badge badge-primary">{{ $receta->categoria->nombre }}</span>
						<h2 class="card-title">{{ $receta->titulo }}</h2>
						<span>
							<i class="far fa-clock"></i>
							{{ $receta->created_at->diffForHumans() }}
						</span>
					</div>
				</div>						
			</div>	

			@endforeach

		</div>
	</div>
</section>

@endsection

@extends ('cpanel.master')

@section ('title')
Catchef - {{ $receta->titulo }}
@endsection

@section ('content')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col-7 col-xl-6">
				
				<div class="row">
					<div class="col">

						<div class="d-flex justify-content-between align-items-center">
							<h2 class="my-4">{{ $receta->titulo }}</h2>
							<a href="{{ url()->previous() }}" class="btn btn-warning">
								<i class="fas fa-angle-left"></i> Volver
							</a>
						</div>
						
						<img class="img-fluid" src="{{ url('storage/' . $receta->img_src) }}" alt="{{ $receta->titulo }}">

						<h3 class="my-4">Ingredientes</h3>
						<p>{!! $receta->ingredientes !!}</p>

						<h3 class="my-4">Preparación</h3>
						<p>{!! $receta->preparacion !!}</p>

						<a class="btn btn-primary" href="{{ route( 'recetas.edit', ['id' => $receta->id_receta] ) }}" role="button" title="Editar">Editar receta</a>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection
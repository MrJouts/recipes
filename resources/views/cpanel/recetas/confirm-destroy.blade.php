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

				<p>¿Desea eliminar la receta <b>{{ $receta->titulo }}</b> ? </p>

				<a class="btn btn-secondary" href="#">Cancelar</a>

				<form method="POST" action="{{ route('recetas.destroy', ['id' => $receta->id_receta]) }}">
					@csrf
					@method('DELETE')

					<button class="btn btn-danger">Eliminar</button>
					
				</form>

			</div>
		</div>
	</div>
</section>

@endsection


@extends ('cpanel.master')

@section ('title')
Catchef - Eliminar - {{ $categoria->titulo }}
@endsection

@section ('content')

<section>
	<div class="container-fluid container-cpanel">
		<div class="row">
			<div class="col-7">

				<h1 class="my-4">Eliminar categoría</h1>

				<p>¿Desea eliminar la categoría <b>{{ $categoria->nombre }}</b> ? </p>

				<form method="POST" action="{{ route('categorias.destroy', ['id' => $categoria->id_categoria]) }}">
					@csrf
					@method('DELETE')

					<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
						<a class="btn btn-secondary mr-3" href="{{ url()->previous() }}">Cancelar</a>
						<button class="btn btn-danger">Eliminar</button>
					</div>
					
				</form>

			</div>
		</div>
	</div>
</section>

@endsection
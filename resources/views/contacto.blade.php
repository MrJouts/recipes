@extends ('layouts.master')

@section ('title')
Catchef - Contacto
@endsection

@section ('content')

<section id="contacto-1">
	<div class="container">
		<div class="row">
			<div class="col">				
				<h1 class="text-center m-5 title">Contacto</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<img class="img-fluid" src="{{ url('/img/cat-chef.jpg') }}" alt="cat chef"/>
			</div>
			<div class="col-6">
				<h2 class="section-title">Una comunidad diferente, igual a vos</h2>
				<p>La gastronomía de Argentina combina influjos de la comida criolla, la nativa (a la cual pertenecen el mate y la mayoría de las comidas elaboradas con maíz, porotos, papa y/o mandioca como base principal), la africana subsahariana, la española y la italiana.</p>
				<p>Un factor determinante para su gastronomía es que Argentina resulta ser uno de los mayores productores agrícolas del planeta. Es un gran productor de trigo, poroto, choclo o maíz, carne (en especial vacuna), leche y, desde los años 1970, también gran productor de soja, aunque esta leguminosa no ha logrado la aceptación popular.</p>
				<p>De modo semejante, las enormes producciones trigueras hacen que el pan más común sea el pan blanco de harina de trigo y explican en gran medida el éxito de ciertas comidas de origen italiano que la utilizan.</p>
			</div>
		</div>

		<div class="row my-5">
			<div class="col-6">
				<h2 class="section-title">Tu opinion nos interesa</h2>
				<form>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" placeholder="Santiago">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="santiago.gallino@davinci.edu.ar">
					</div>
					<div class="form-group">
						<label for="mensaje">Mensaje</label>
						<textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="6" placeholder="Escribe aquí"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
		
	</div>
</section>

@endsection

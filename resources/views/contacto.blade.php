@extends ('layouts.master')

@section ('title')
Recipes - Contacto
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
				<h2>Lorem ipsum dolor.</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora error sapiente libero explicabo doloribus rerum dolore pariatur reiciendis autem! Doloribus soluta possimus repellat adipisci eius nostrum quo, dolore, porro eaque, expedita natus perferendis saepe. Dignissimos nobis voluptatum dolore impedit nihil.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos repellendus accusantium id possimus expedita nisi temporibus ullam dolor accusamus, ipsum, ad laboriosam dolores tempore quae iure debitis. Cumque, magni, reprehenderit!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis qui perferendis quibusdam, quasi, porro sit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel earum deleniti debitis saepe, autem aliquid!</p>
			</div>
		</div>

		<div class="row my-5">
			<div class="col-6">
				<h2>Tu opinion nos interesa</h2>
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

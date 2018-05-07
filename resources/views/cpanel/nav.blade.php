<nav class="menu-cpanel active">

	<div class="nav flex-column collapse" role="tablist" aria-orientation="vertical" >
		<a class="nav-link active" href="{{ route('recetas.index') }}" role="tab" aria-selected="true">
			<i class="fas fa-utensil-spoon"></i> Recetas
		</a>
		<a class="nav-link" href="{{ route('categorias.index') }}" role="tab" aria-selected="false">
			<i class="fas fa-lemon"></i> Categorías
		</a>
		<a class="nav-link" href="{{ url('cpanel/perfil') }}" role="tab" aria-selected="false">
			<i class="fas fa-user"></i> Perfíl
		</a>
		<a class="nav-link" href="{{ route('recetas.index') }}" role="tab" aria-selected="false">
			<i class="fas fa-cog"></i> Configuración
		</a>
	</div>

</nav>




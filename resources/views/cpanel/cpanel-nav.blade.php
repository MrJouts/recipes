<nav class="menu-cpanel active">
	<div class="nav flex-column collapse" role="tablist" aria-orientation="vertical" >

		@if (  Auth::user()->nivel == 'admin')
		<a class="nav-link {{ Request::is('cpanel/recetas') ? 'active' : '' }}" href="{{ route('recetas.index') }}" role="tab" aria-selected="true">
			<i class="fas fa-utensil-spoon"></i> Recetas
		</a>
		<a class="nav-link {{ Request::is('cpanel/categorias') ? 'active' : '' }}" href="{{ route('categorias.index') }}" role="tab" aria-selected="false">
			<i class="fas fa-lemon"></i> Categorías
		</a>
		<a class="nav-link" href="{{ route('recetas.index') }}" role="tab" aria-selected="false">
			<i class="fas fa-cog"></i> Configuración
		</a>
		<a class="nav-link" href="{{ route('usuarios.index') }}" role="tab" aria-selected="false">
			<i class="fas fa-users"></i> Usuarios
		</a>
		@endif

		<a class="nav-link {{ Request::is('cpanel/perfil') ? 'active' : '' }}" href="{{ url('cpanel/perfil') }}" role="tab" aria-selected="false">
			<i class="fas fa-user"></i> Perfíl
		</a>
		<a class="nav-link" href="{{ route('auth.logout') }}" role="tab" aria-selected="false">
			<i class="fas fa-sign-out-alt"></i> Cerrar sesión
		</a>
	</div>
</nav>
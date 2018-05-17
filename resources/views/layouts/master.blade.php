@include ('layouts.head')

<body>
	
	<header>

		@include ('layouts.nav')

	</header>

	<main>

		@yield ('content')

	</main>

	@include ('layouts.footer')

	@include ('layouts.scripts')


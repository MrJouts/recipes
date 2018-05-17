@include ('layouts.head')

<body>

	<header>

		@include ('cpanel.nav')

	</header>

	<main>

		@if(Auth::check())
		@include ('cpanel.cpanel-nav')
		@endif

		@yield ('content')

	</main>

	@include ('layouts.scripts')
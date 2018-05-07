
@include ('layouts.header')

<main>

	@if(Auth::check())
	@include ('cpanel.nav')
	@endif


	


	@yield ('content')


</main>

@include ('layouts.footer')


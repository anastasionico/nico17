<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	<header>
		@section('header')
            This is the master header.
        @show
	</header>
	<section>
		@section('mainSection')
            This is the mainsection.
        @show
	</section>
	<aside>
		@section('aside')
            This is the aside.
        @show
	</aside>
	<footer>
		@section('footer')
            This is the footer.
        @show
	</footer>
</body>
</html>
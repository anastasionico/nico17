<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<header>
		@include('layouts.header')
	</header>

	<section class="mainSection">
		@yield('hero')

		@yield('about')
		
		@yield('work')

		@yield('testimonial')

		@yield('blog')

    </section>
	
	<aside>
		@include('layouts.aside')
	</aside>
	
	<footer>
		@include('layouts.footer')
	</footer>
</body>

</html>
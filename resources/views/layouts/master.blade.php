<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
	<header>
		@include('layouts.header')
	</header>

	<section class="mainSection">
		
		@yield('hero')
		
		<section class="about--section">
			@yield('about')
		</section>

		<section class="work--section">
			@yield('work')
		</section>

		<section class="testimonial--section">
			@yield('testimonial')
		</section>

		<section class="blog--section">
			@yield('blog')
		</section>

    </section>
	
	<aside>
		@include('layouts.aside')
	</aside>
	
	<footer>
		@include('layouts.footer')
	</footer>
</body>

</html>
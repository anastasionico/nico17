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
		<section class="hero--section">
			@yield('hero')
		</section>
		
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
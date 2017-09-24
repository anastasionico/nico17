<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body >
	
	

	
	

	<section class="mainSection">

			<div class="hero--section">
				<div class="hero--section-content">
					<h1>
						anastasio<span>nico.uk</span>
					</h1>
					<p>Specialist in <br><b>Web Design</b>  and <br><b>Web Development</b></p>
				</div>
				
				<img class="hero--section-image" src="img/mobile-hero.png">
				
			</div>

			
		{{-- @yield('hero') --}}
		{{-- @yield('about') --}}

 		{{-- <div class="oneThird">
 			<div class="oneThird--big">
 				<div class="oneThird--big--content">a</div>
			</div>
 			<div class="oneThird--small">f</div>
 		</div>		 --}}
	</section>
	
	<header>
		@include('layouts.header')
	</header>
	@include('layouts.aside')	
	
	{{-- <footer>
		@include('layouts.footer')
	</footer> --}}
</body>

</html>
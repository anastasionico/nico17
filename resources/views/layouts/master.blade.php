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

		@yield('hero')
		@yield('homeAbout')
		@yield('homeWork')
		@yield('homeTestimonial')
		{{-- @yield('homeBlog') --}}

 		
 		{{-- 
		LAYOUT SAMPLE

 		<div class="oneThird">
 			<div class="oneThird--big">
 				<div class="oneThird--big--content">a</div>
			</div>
 			<div class="oneThird--small"></div>
 		</div>		

 		<div class="fullWidth">
 			<div class="fullWidth--content">A</div>
 			<div class="fullWidth--content">A</div>
 			<div class="fullWidth--content">A</div>
 			<div class="fullWidth--content">A</div>
 			<div class="fullWidth--content">A</div>
 		</div>

 		<div class="twoThird">
 			<div class="twoThird--small">
 				<div class="twoThird--small-content">
 					small-content
 				</div>
 			</div>
 			<div class="twoThird--big">
 				<div class="twoThird--big-content">
 					big-content
 				</div>
			</div>
		</div>

		<div class="sectionCenter">
			<div class="sectionCenter--content">
				section center
			</div>
		</div>
		 
		 --}}
	
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
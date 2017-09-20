<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			font-size: 17px;
		}
		
		header{
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			padding-top: 1rem;
			width: 5%;
			background-color: #35a;
			opacity: 0.5;

		}
		.hamburger{
			display: block;
			margin: 4px auto;
			background-color: #fff;
			width: 66%;
			height: 2px;
		}
		
		.mainSection{
			padding: 0 10%;
			width: 100%;
			background-color: #3aa;
		}
		
		aside{
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			width: 5%;
			background-color: #35a;
			opacity: 0.5;
		}

		footer{
			padding: 0 10%;
			width: 100%;
			background-color: #35a;
		}
	</style>
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
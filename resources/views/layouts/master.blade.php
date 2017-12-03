<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
  		
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		@yield('head')
	</head>
	<body>
		
		
		<div id="content">
			<section class="mainSection">
				@if ($errors->any())
					<div class="alert alert-danger alert-block" style="position: absolute;top:15rem;left:25%;width:50%;z-index: 20">  
						<a class="close" data-dismiss="alert" href="#" onclick="closeAlert()">
							×
			  			</a>
			  			@foreach ($errors->all() as $error)
			               	<h4 class="alert-heading">Too tired to type?</h4>
			               	<p>{{ $error }}</p>
			            @endforeach
			      	</div>
				@endif

				@foreach (['danger', 'warning', 'success', 'info'] as $msg)
					@if(Session::has($msg))

						<div class="alert alert-{{ $msg }} alert-block" style="position: absolute;top:15rem;left:25%;width:50%;z-index: 20">  
							<a class="close" data-dismiss="alert" href="#" onclick="closeAlert()">
								×
				  			</a>
				      		<h4 class="alert-heading">{{ ucfirst($msg) }}</h4>
				  			<p>{!! session($msg) !!}</p>
						</div>

					@endif
				@endforeach

				@yield('hero')
				@yield('homeAbout')
				@yield('work')
				@yield('homeTestimonial')
				@yield('blog')
				
			</section>
		
			@include('layouts.aside')	
		
			@include('layouts.footer')
		
		</div>

		@include('layouts.header')
		
	</body>
</html>
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
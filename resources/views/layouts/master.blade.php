<!DOCTYPE html>
<html>
	<head>
		@if (!strpos($_SERVER['REQUEST_URI'], 'blog/'))
			{{-- If the page is not a blog page show the default image when the user press the Facebook button --}}
		
			<meta property="og:type" content="image/jpeg" />
			<meta property="og:url" content="http://anastasionico.uk" />
			<meta property="og:title" content="anastasionico.uk | Freelance Web Developer Designer London, Hertfordshire UK" />
			<meta property="og:description" content="I am a freelance Web Developer and Web Designer working in London and Hertfordshire UK, Expert in building bespoke responsive websites, Online Marketing Services and SEO" />
			<meta property="og:image" content="http://anastasionico.uk/img/heroBW.jpg" />
		@else 
			<meta property="og:title" content="{{ ucfirst($content->name) }}">
			<meta property="og:description" content="{{ ucfirst($content->excerpt) }}">
			<meta property="og:image" content="http://www.anastasionico.uk/img/{{$segment}}/{{$content->img}}">
			<meta property="og:url" content="{{ url()->current() }}">
			<meta property="og:type"               content="article" />
		@endif

		@php
			//if the ip of the user is one of those two do no call google analytics
			$blacklist = ['2.31.193.21'];
		@endphp
		

		{{-- if is not blacklisted and if is a blog post with the status of 3 (published) use analytics --}}
		@if (!in_array($_SERVER['REMOTE_ADDR'], $blacklist))
			
			@if (!strpos($_SERVER['REQUEST_URI'], 'blog/') ||
				strpos($_SERVER['REQUEST_URI'], 'blog/') && ($content->status === 3)
			)
			    <!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52550566-2"></script>
				<script>
					  window.dataLayer = window.dataLayer || [];
					  function gtag(){dataLayer.push(arguments);}
					  gtag('js', new Date());

					  gtag('config', 'UA-52550566-2');
				</script>
			@endif
		@endif
		
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
  		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		

		@yield('head')

	</head>
	<body>
		
		
		<div id="content">
			
			<section class="mainSection">
				{{-- {{ dd($errors)}} --}}
				@if ($errors->any())
					<div class="alert alert-danger alert-block" style="position: absolute;top:15rem;left:25%;width:50%;z-index: 20">  
						<a class="close" data-dismiss="alert" href="#" onclick="closeAlert()">
							×
			  			</a>
			  			@foreach ($errors->all() as $error)
			               	<h4 class="alert-heading">Error Occured!</h4>
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
				@yield('subscribe')
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
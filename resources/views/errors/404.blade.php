<!DOCTYPE html>
<html>
	<head>

		<title>anastasionico.uk | Page Not Found</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
  		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		@yield('head')

	</head>
	<body>
		<div id="content">
			<div class="hero--section">
				<div class="hero--section-content">
					<h1>Are you lost?</h1>
					<b>404</b>
					<h4>This is awkward</h4>
					<br><br>
					<a href="/"  class="btn-cta-success">Find way Home</a>
				</div>
			</div>
			
			<section class="about--section bg-white c-blue skewed">
				<div class="oneThird skewReverse">
					<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<b>Hi,<br> I am Nico Anastasio, </b>
						<br><br><br>
						<p>A London based, freelancer PHP Web Developer.</p>
						<p>I have 6+ years of projects successfully deployed in my background.</p>
						<br>
						<p>Not enough?</p>
						<br>
						<p>I have professional experiences with a global franchise of <b>Mercedes Benz</b> and an <b>award-winning</b> marketing agency with worldwide partnerships situated in the heart of London.</p>
						<br>
						<img class='' src="/img/upwork.png">
						<br><br><br>
						<b>I believe in very few fundamentals ...</b>
						<br><br>
						<p>I am an expert in the design and building of websites and web application.</p>
						<p>I use PHP on daily basis mastering several frameworks such as Laravel, CakePHP and CodeIgniter</p>
						<br>
						<p>I am among the <b>top 20%</b> of freelancers on UpWork regarding the knowledge of PHP</p>
						<br>
						<p>The main focusing of my effort is on creating whole websites and intern platforms for businesses and self-employees.</p>
						<br>
						<p>Another thing that I love is helping my clients receiving more visitors and make <b>convert them into customers.</b></p>
						<br>
						<p>How do I do that?</p>
						<br>
						<p>To do that I have learned high-level techniques of <b>S.E.O.</b> placing myself among the top 20% expert in the field in the whole UpWork platform.</p>
						<br><br><br>
						<b>How would we interact?</b>
						<br><br>
						<p>I want to be sure that I can completely fulfill your desires.</p>
						<p>That means that we will spend our initial time together studying and designing the perfect service for you.</p>
						<p>Once you are happy, the development step will begin.</p>
						<br>
						<img class='clickable' src="/img/blog/the-list-in-html.jpeg">
						<br><br><br>
						<b>As far as payment terms</b>
						<br><br>
						<p>I charge 60 £/hr.</p>
						<p>Usually, the payment is split into two phases.</p>
						<p>The first just after the preview is ready (I won't charge for that).</p>
						<br> 
						<p>Once you are completely happy with the end product I will start to work on it until it is ready,</p>
						<p>the second half payment will happen just before the official deployment of the service you asked for.</p>
						<p>If requested I will also take care of domain and hosting.</p>
						<br>
						<p>Simple as that.</p>
						<br>
						<p class="alert alert-info">
							If you have any question, feel fre to ask.
						</p>
						<br>
						<p>Do you want more?</p>
						<br>
						<p>Have a look among the page of my website to learn more about me and when you're ready to get started, you'll just need to <b>click the "Hire me" button</b> below or at the top of the page. </p>
						<br>
						<p>Upwork will walk you through the process of setting everything up.</p>
						<br>
						
					
					</div>
				</div>
					<div class="oneThird--small">&nbsp;</div>
				</div>		
			</section>

			<div class="sectionCenter ">
				<div class="sectionCenter--content">
					<a href="file/NicoAnastasio_cv17.pdf" target="_blank" class="btn-cta">My CV</a>
				</div>
			</div>



			<section class="contactLinks--section bg-blue c-white skewed pt-5 pb-1 mb-50">
				
				<div class="pt-1 pb-1">
		 			<div class="sectionCenter">
						<div class="sectionCenter--content">
							<h3>Have a look at some of my projects or the most recent post on my blog</h3>
						</div>
					</div>	
		 		</div>

				<div class="fullWidth">
					<div class="fullWidth--content">
		 				<a href="/projects" class="btn-cta">Projects</a>
					</div>
		 			<div class="fullWidth--content">
						<a href="/blog" class="btn-cta">Blog</a>
		 			</div>
		 		</div>
			</section>
			
		
			@include('layouts.aside')	 
		
			@include('layouts.footer') 
		
		</div>

		@include('layouts.header')
		
	</body>
</html>

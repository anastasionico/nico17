@extends('layouts.master')

@section('title', 'anastasionico.uk | UpWork, Freelance Web Developer,Web Designer London, Hertfordshire UK')
@section('description', 'I am a freelancer Web Developer and Web Designer working in London and Hertfordshire UK, review my profile and visit my Upwork page')
@section('keywords', 'anastasionico, freelance, website, web designer, web developer, London, Hertfordshire, Upwork, build website')

@section('head')
	<style type="text/css">
		.hero--section:before{
			background: linear-gradient(-50deg, #35a 5%, #3aa 50%), url(/img/upwork.jpg);
		    background-blend-mode: multiply;
		    background-size: cover;
		    background-position: center center;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
		}		

	</style>
@endsection

@section('hero')
	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>I am a Freelancer</h1>
			<b>Specialist in </b>
			<h4><b>Web Design</b> and <b>Web Development</b></h4>
			<br><br>
			<a href="https://www.upwork.com/o/profiles/users/_~014900a8e33f3d8ce8/" target='_blank' class="btn-cta">Hire me</a>
		</div>
		
		
		
	</div>
@endsection

@section('homeAbout')
	<section class="about--section bg-white c-blue skewed pt-5 pb-5">
		<div class="skewReverse">

			<div class="oneThird">
				<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<b>Hi,<br> I am Nico Anastasio, </b>
						<br><br><br>
						<p>A London based, a freelancer Web Developer.</p>
						<p>I have 6+ years of projects successfully deployed projects in my background.</p>
						<br>
						<p>Not enough?</p>
						<br>
						<p>I have professional experiences with a global franchise of <b>Mercedes Benz</b> and an <b>award-winning</b> marketing agency with worldwide partnerships situated in the heart of London.</p>
						<br>
						<img class='clickable' src="http://www.anastasionico.uk/img/blog/what-is-web-design.jpg">
						<br><br><br>
						<b>I believe in very few fundamentals ...</b>
						<br><br>
						<p>I am an expert in the design and building of websites and web application.</p>
						<br>
						<p>I am among the <b>top 20%</b> of freelancers on UpWork regarding the knowledge of PHP</p>
						<br>
						<p>The main focusing of my effort is on creating whole websites and intern platforms for businesses and self-employees.</p>
						<br>
						<p>Another thing that I love is helping my clients receiving more visitors and make <b>convert them into customers.</b></p>
						<br>
						<p>How do I do that?</p>
						<br>
						<p>To do that I have learned high-level techniques of S.E.O. placing myself among the top 20% expert in the field in the whole UpWork platform.</p>
						<br><br><br>
						<b>How would we interact?</b>
						<br><br>
						<p>I want to be sure that I can completely fulfill your desires.</p>
						<p>That means that we will spend our initial time together studying and designing the perfect service for you.</p>
						<p>Once you are happy, the development step will begin.</p>
						<br>
						<img class='clickable' src="http://www.anastasionico.uk/img/blog/the-list-in-html.jpeg">
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
					</div>
				</div>
				
			</div>		
			
		</div>	

	</section>
@endsection
{{-- 
@section('work')
	
@endsection

@section('homeTestimonial')
	
	
@endsection --}}

@section('blog')
	<section class="blog--section bg-blue c-white skewed pt-5 ">
		<div class="sectionCenter ">
			<h3>Look forward to chatting with you.</h3>
			<br><br>
			<div class="sectionCenter--content">
				<a href="https://www.upwork.com/o/profiles/users/_~014900a8e33f3d8ce8/" target='_blank' class="btn-cta">
					Hire me
				</a>
			</div>
		</div>
	</section>
@endsection
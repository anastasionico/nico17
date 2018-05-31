
@extends('layouts.master')

@section('title', 'anastasionico.uk | UpWork, Freelance Web Developer,Web Designer London, Hertfordshire UK')
@section('description', 'I am a freelancer Web Developer and Web Designer working in London and Hertfordshire UK, review my profile and visit my Upwork page')
@section('keywords', 'anastasionico, freelance, website, web designer, web developer, London, Hertfordshire, Upwork, build website')

@section('head')
	<style type="text/css">
		.hero--section:before{
			/*background: url(/img/upwork.jpg);*/
			background: linear-gradient(-50deg, #3aa 50%, #35a 100%)/*, url(/img/upwork.jpg)*/;
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
			<h1>Anastasio Nico</h1>
			<h2>I am a Freelancer</h2>
			<br>
			<b>I specialize in building</b>
			<h4><b>PHP Websites</b> and <b>Web Applications</b></h4>
			<br><br>
			<a href="https://www.upwork.com/o/profiles/users/_~014900a8e33f3d8ce8/" target='_blank' class="btn-cta-success">Visit my UpWork</a>
		</div>
		
		
		
	</div>
@endsection

@section('homeAbout')
	<section class="about--section bg-white c-blue skewed pt-5 pb-5">
		<div class="skewReverse">
			
			<div class="fullWidth about--section-phasis">
	 			<div class="fullWidth--content about--section-phasisDivs">
					<span class="about--section-phasis-logo  bigCircle flexCenter">
						<i class="fa fa-globe fa-2x" aria-hidden="true"></i>
					</span>
					<h5 class="about--section-phasis-caption">2<br>Countries</h5>	
	 			</div>
	 			<div class="fullWidth--content about--section-phasisDivs">
	 				<span class="about--section-phasis-logo  bigCircle flexCenter">
						<i class="fa fa-suitcase fa-2x" aria-hidden="true"></i>
					</span>
					<h5 class="about--section-phasis-caption">6+<br> Years of experience</h5>
	 			</div>
	 			<div class="fullWidth--content about--section-phasisDivs">
	 				<span class="about--section-phasis-logo  bigCircle flexCenter">
						<i class="fa fa-smile-o fa-2x" aria-hidden="true"></i>
					</span>
					<h5 class="about--section-phasis-caption">30+<br> Happy Clients</h5>	
	 			</div>
	 			<div class="fullWidth--content about--section-phasisDivs">
	 				<span class="about--section-phasis-logo  bigCircle flexCenter">
						<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
					</span>
					<h5 class="about--section-phasis-caption">46<br> Blog posts written</h5>	
	 			</div>
	 			<div class="fullWidth--content about--section-phasisDivs">
	 				<span class="about--section-phasis-logo  bigCircle flexCenter">
						<i class="fa fa-code fa-2x" aria-hidden="true"></i>
					</span>
					<h5 class="about--section-phasis-caption">500k+<br> line of codes</h5>	
	 			</div>
	 		</div>

			<div class="oneThird">
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
					</div>
				</div>
			</div>		
			
		</div>	

	</section>
@endsection

{{-- @section('work')
	
@endsection --}}

@section('homeTestimonial')
	
	<section class="testimonial--section  c-blue" style="background: linear-gradient(-50deg, #aaa 0%, #fff 100%)">	
		<div class="twoThird">
			<div class="twoThird--small">
				<div class="twoThird--small-content">
					
					<div class="testimonials--container clearfix">
						
						<div data-quote="quote1" class="testimonials--container-photo bigCircle">
							<img src="img/testimonials/peter.jpg">	
						</div>							
						<div data-quote="quote2" class="testimonials--container-photo photo-prev bigCircle">
							<img src="img/testimonials/jigar.jpg">	
						</div>							
						<div data-quote="quote3" class="testimonials--container-photo photo-active bigCircle ">
							<img src="img/testimonials/giovanna.jpg">	
						</div>							
						<div data-quote="quote4" class="testimonials--container-photo photo-next bigCircle">
							<img src="img/testimonials/ken.jpg">	
						</div>							
						<div data-quote="quote5" class="testimonials--container-photo bigCircle">
							<img src="img/testimonials/david.jpg">	
						</div>							
				
					</div>

				</div>
			</div>
			<div class="twoThird--big">
				<div class="twoThird--big-content">
					
					<div class="testimonials--quote" id="quote1">
						<q>
							This guy is a badass!!!
						</q>
						<h4>F.I.P.E Web Design</h4>
						<em>Peter Azea  - C.E.O.</em>
					</div>
					<div class="testimonials--quote" id="quote2">
						<q>
							One of the most dedicated and passionate professional I have come across and his commitment to the field of web development is highly commendable. 
							<br>
							I would have no hesitation in recommending Nico in any organisation.
						</q>
						<h4>Imperial Commercials</h4>
						<em>Jigar N. Mehta  - Software Engineering</em>
					</div>
					<div class="testimonials--quote active" id="quote3">
						<q>
							Nico is an excellent developer who uses his considerable knowledge of online and digital trends to realize up to date projects. 
							<br>
							He has been influential in creating my most recent website and has made significant efforts to ensure I was kept informed and updated at each stage of the process
						</q>
						<h4>Petali di Wedding</h4>
						<em>Giovanna Leonardi - Execute Manager</em>
					</div>
					<div class="testimonials--quote" id="quote4">
						<q>
							He is enthusiastic, ambitious and driven with a real thirst for knowledge. 
							<br>
							During his time with us, he proved himself to be a great counselor to the other members of the team and pro-active with suggestions and ideas to improve my business.
						</q>
						<h4>Kick Fit Academy</h4>
						<em>Ken Pankiewicz  - Director</em>
					</div>
					<div class="testimonials--quote" id="quote5">
						<q>
							I worked with Nico on an article and was Iextremely impressed by his intelligence and dedication. 
							<br>
							During the course of the project, he demonstrated a keen ability to think outside the box. 
						</q>
						<h4>Talk IT Training</h4>
						<em>David Ringsell - Founder</em>
					</div>
				</div>
			</div>
		</div>	
	</section>
@endsection

@section('blog')
	<section class="blog--section bg-blue c-white skewed pt-5 ">
		<div class="sectionCenter ">
			<h3>Look forward to chatting with you.</h3>
			<br><br>
			<div class="sectionCenter--content">
				<a href="https://www.upwork.com/o/profiles/users/_~014900a8e33f3d8ce8/" target='_blank' class="btn-cta-success">
					Hire me
				</a>
			</div>
		</div>
	</section>
@endsection
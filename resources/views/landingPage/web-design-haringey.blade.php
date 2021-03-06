@extends('layouts.master')

@section('title', 'anastasionico.uk | Freelance Web Developer & Designer Haringey, North London')
@section('description', 'I am a freelance Web Developer and Web Designer working in Haringey North London, Expert in building bespoke responsive websites, Online Marketing Services and SEO')
@section('keywords', 'anastasionico, freelance, website, web designer, web developer, London, Haringey, seo, marketing')



@section('hero')
	<div class="hero--section ">
		
		<div class="hero--section-content">
			<h1>Web Design in Haringey</h1>
			<h4>your local expert in SEO & Web Design</h4>
			<br>
			<h2>anastasio<span>nico.uk</span></h2>
		</div>
		
		<div class="hero--section-foreground">
			<pre>
				Increase the visibility and attract more clients to your website. 
				<br>
				More clients to your website
				<br> 
				100% Google friendly and Responsive
				<br>
				Increasing organic traffic every month.
			</pre>
		</div>
		
	</div>
@endsection

@section('homeAbout')
	<section class="about--section bg-white c-blue">
		<div class="sectionCenter">
			<video class="videoCommercial" controls>
				<source src="video/commercial.mp4" type="video/mp4">
			</video>
		</div>
		
		<div class="oneThird py-5">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>Web Design</h3>
					<p>We are an experienced <b>Haringey based</b> website design and digital marketing company</p>
					<br>

					<p>With tons of businesses and competition in the London borough of Haringey is not easy to STAND OUT</p>
					<br>

					<p>We understand this and our goal is to make you attract more clients and boost your bottom line.</p>
					<br>

					<p>We are pride to <b>create attractive and effective websites</b> that deliver the highest quality solutions and compelling results.</p>
					<br>

					<p>We specialize in landing pages creation, website design and development & search engine optimization (SEO)</p>
					<br>


					<p>We tackle website projects head-on, <b>implementing the latest technology tools and techniques</b> in the industry and put you ahead of your online competition.</p>
					<br>


					<p>Whether you sell products or provide services, <br> we can HELP YOU DO MORE OF IT.</p>
					<br>

					<p>Explore our portfolio to get a better idea of what we can do for you.</p>

					<br>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
		<div class="sectionCenter pb-5">
			<div class="sectionCenter--content">
				<a href="mailto:nico@anastasionico.uk?Subject=web-designer-london-GETAQUOTE" target="_top"  class="btn-cta">Get a Quote</a>
			</div>
		</div>
 	</section>
@endsection

@section('work')
	<section class="work--section bg-blue c-white py-2">	
		<div class="fullWidth about--section-phasis">
 			<div class="fullWidth--content about--section-phasisDivs">
				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="c-blue fa fa-globe fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">2<br>Countries</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="c-blue fa fa-suitcase fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">6+<br>Years of experience</h5>
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="c-blue fa fa-smile-o fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">30+<br>Happy Clients</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
 					<i class="c-blue fas fa-brain fa-2x"></i>
				</span>
				<h5 class="about--section-phasis-caption">50+<br>Experieces shared</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="c-blue fa fa-code fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">500k+<br>line of codes</h5>	
 			</div>
 		</div>		
		
		
	</section>	
@endsection

@section('homeTestimonial')
	<section class="testimonial--section bg-white c-blue">	
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
							<img src="img/testimonials/tom.jpg">	
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
							I worked with Nico as a web developer in-house at Motus UK Mercedes-Benz division. 
							<br>
							He works hard and shows real grit & determination. When he commits to something he sees it through - Never sick or late
						</q>
						<h4>Motus, Mercedes Benz</h4>
						<em>Tom Hughes - Senior IT</em>
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
	<section class="blog--section skewed bg-blue c-white pt-5">
		<div class="sectionCenter mt-5">
			<div class="sectionCenter--content">
				<a href="mailto:nico@anastasionico.uk?Subject=web-designer-london-GETAQUOTE" target="_top"  class="btn-cta">Get a Quote</a>
			</div>
		</div>
	</section>
@endsection
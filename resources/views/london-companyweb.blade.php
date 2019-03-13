@extends('layouts.master')

@section('title', 'anastasionico.uk | Learn PHP and Web Development')
@section('description', 'Subscribe to my blog to be always up to date about PHP and Web Development')
@section('keywords', 'php', 'blog', 'learn php', 'learn web development', 'become a web developer')

@php
	$ip = $_SERVER['REMOTE_ADDR'];
	$visitorLocation = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
@endphp

@section('hero')
	<div class="hero--section ">
		
		<div class="hero--section-content">
			<h1>Web Design</h1>
			<h2>SEO & Web Design Company in London</h2>
			<br>
			<h4>
				The main goal is to increase the visibility and exposure online and attract more clients to your website. We makes sure you that your website is 100% Google friendly and you’re increasing organic traffic every month.
			</h4>
			<br>
			<a class='btn-cta' href = "mailto: nico@anastasionico.uk">Request a free website design consultation</a>
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
						<div class="oneThird--big--content ">
						<h3>Web Design in London</h3>
						<br>
						<p>
							Welcome to anastasionico.uk! We work with forward-thinking clients, Big or Small, to create effective websites & bottom line boosting digital campaigns.</p>
						<br>
						<p>
							We are an experienced London based website design and digital marketing company sworn to creating attractive and effective websites that attract more clients and boost your bottom line.
						</p>
						<br>
						<p>
							We pride ourselves on creating high-quality and effective digital solutions that above all deliver powerful results. We specialize in graphic design, search engine optimization, e-commerce website design and development, anastasionico.uk has established itself as the premiere creative agencies in London.
						</p>
						<br>
						<p>
							We tackle website projects head-on, researching and implementing the latest technology tools and techniques in the industry to put our clients ahead of their online competition.
						</p>
						<br>
						<p>
							Powered by our in-house team of professional web designers and internet marketing experts, our clients experience increases in organic website traffic, business leads, brand awareness and ultimately – revenue.
						</p>
						<br>
						<p>
							Whether you’re selling products or providing a service, we can help you do more of it. Explore our extensive portfolio and list of services to get a better idea of what we can do for you.
						</p>
					</div>
				</div>
			</div>
		</div>

	<section class="about--section pb-5">
		<div class="sectionCenter">
			<video class="videoCommercial" controls>
				<source src="video/commercial.mp4" type="video/mp4">
			</video>
		</div>
	</section>

	<section class="pt-5 pb-5 Nmt-10 bg-white c-blue">	
		<div class="oneThird pt-5 pb-1">
			<div class="sectionCenter">
				<div class="sectionCenter--content" id="map" style="width:78%;height: 500px"></div>
				<script>
					function initMap() {
					  // The location of Uluru
					  var London = {lat: 51.58205, lng: -0.098705};
					  // The map, centered at Uluru
					  var map = new google.maps.Map(
					      document.getElementById('map'), {
					      	zoom: 13, 
					      	center: London,
					      	styles: [
					            {elementType: 'geometry', stylers: [{color: '#3355aa'}]},
					            {elementType: 'labels.text.stroke', stylers: [{color: '#3355aa'}]},
					            {elementType: 'labels.text.fill', stylers: [{color: '#33aaaa'}]},
					            {
					              featureType: 'administrative.locality',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#7A74A9'}]
					            },
					            {
					              featureType: 'poi',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#7A74A9'}]
					            },
					            {
					              featureType: 'poi.park',
					              elementType: 'geometry',
					              stylers: [{color: '#239a9a'}]
					            },
					            {
					              featureType: 'poi.park',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#43baba'}]
					            },
					            {
					              featureType: 'road',
					              elementType: 'geometry',
					              stylers: [{color: '#4365Ba'}]
					            },
					            {
					              featureType: 'road',
					              elementType: 'geometry.stroke',
					              stylers: [{color: '#3050a0'}]
					            },
					            {
					              featureType: 'road',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#7987aA'}]
					            },
					            {
					              featureType: 'road.highway',
					              elementType: 'geometry',
					              stylers: [{color: '#33aaaa'}]
					            },
					            {
					              featureType: 'road.highway',
					              elementType: 'geometry.stroke',
					              stylers: [{color: '#204090'}]
					            },
					            {
					              featureType: 'road.highway',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#aAa4d9'}]
					            },
					            {
					              featureType: 'transit',
					              elementType: 'geometry',
					              stylers: [{color: '#3f5faf'}]
					            },
					            {
					              featureType: 'transit.station',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#7A74A9'}]
					            },
					            {
					              featureType: 'water',
					              elementType: 'geometry',
					              stylers: [{color: '#23459a'}]
					            },
					            {
					              featureType: 'water',
					              elementType: 'labels.text.fill',
					              stylers: [{color: '#39476A'}]
					            },
					            {
					              featureType: 'water',
					              elementType: 'labels.text.stroke',
					              stylers: [{color: '#23459a'}]
					            }
				         	]
					      });
					  // The marker, positioned at Uluru
					  var marker = new google.maps.Marker({position: London, map: map});
				  		marker.setIcon('img/marker-google.png');
					}
					
			    </script>
			     <script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYumPQubu3rHmqIg233v1F9e-WZL1huQs&callback=initMap">
	    		</script>
			</div>
		</div>	
	</section>
@endsection

@section('work')
	<section class="work--section bg-blue c-white pt-5 pb-5">	
		<div class="fullWidth">
			<div class="fullWidth--content pricing-sections">
				<div class="pricing-sections-namePlan">
					<small>BASIC PLAN</small>
				</div>	
				<div class="pricing-sections-price">
					<strong>£ 1399</strong>
				</div>	
				<div class="pricing-sections-features">
					<ul>
						<li>GDPR <span class="included">Conform</span></li>
						<li>Domain <span class="included">Included*</span></li>
						<li>Hosting <span>Not Included</span></li>
						<li>Back-end <span class="included">Bespoke</span></li>
						<li>Front-end <span>Theme</span></li>
						<li>S.E.O. <span>Google Analytics</span></li>
						<li>Support <span>Not Included</span></li>
					</ul>
				</div>	
				<div class="pricing-sections-cta">
					<a href="/contact" class="btn">Contact Me</a>
				</div>	
			</div>
			<div class="fullWidth--content pricing-sections">
				<div class="pricing-sections-namePlan">
					<small>STANDARD PLAN</small>
				</div>	
				<div class="pricing-sections-price">
					<strong>£ 1999</strong>

				</div>	
				<div class="pricing-sections-features">
					<ul>
						<li>GDPR <span class="included">Conform</span></li>
						<li>Domain <span class="included">Included*</span></li>
						<li>Hosting <span class="included">Included*</span></li>
						<li>Back-end <span class="included">Bespoke</span></li>
						<li>Front-end <span class="included">Bespoke</span></li>
						<li>S.E.O. <span>Google Analytics</span></li>
						<li>Support <span>Not Included</span></li>
					</ul>
				</div>	
				<div class="pricing-sections-cta">
					<a href="/contact" class="btn">Contact Me</a>
				</div>	
			</div>
			<div class="fullWidth--content pricing-sections">
				<div class="pricing-sections-namePlan">
					<small>PREMIUM PLAN</small>
				</div>	
				<div class="pricing-sections-price">
					<strong>£ 2499</strong>
				</div>	
				<div class="pricing-sections-features">
					<ul>
						<li>GDPR <span class="included">Conform</span></li>
						<li>Domain <span class="included">Included*</span></li>
						<li>Hosting <span class="included">Included*</span></li>
						<li>Back-end <span class="included">Bespoke</span></li>
						<li>Front-end <span class="included">Bespoke</span></li>
						<li>S.E.O. <span class="included">Long Term</span></li>
						<li>Support <span class="included">1 year free</span></li>
					</ul>
				</div>	
				<div class="pricing-sections-cta">
					<a href="/contact" class="btn">Contact Me</a>
				</div>	
			</div>
		</div>
		<div class="fullWidth">
			<small class="pricing-disclaimer">
				* Domain and hosting prices are meant for the first year. Prices could vary depending on features requested.
			</small>
		</div>	
	</section>
@endsection

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



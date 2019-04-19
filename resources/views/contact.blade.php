@extends('layouts.master')

@section('title', 'anastasionico.uk | Freelance Web Developer, Web Designer in London, contact me for professional website')
@section('description', 'Anastasio Nico. London & Hertfordshire based freelance Web Designer and Developer, I create website, improve SEO and Online Marketing Services')
@section('keywords', 'anastasio, nico, anastasionico, London, web designer, web developer, creation websites')

@section('hero')

	<div class="hero--section flexCenter" >
		
		{{ Form::open([
				'method' => 'POST', 
				'action' => ['ContactController@store'],
				'class' => 'formContact',
			]) 
		}}
			{{ csrf_field() }}
			
			<p>Hi, I am</p>
			<div class="form-control">
				<label>Your Name</label>
				<input type="text" name="name" id='nameField' {{-- onfocusin="centerFieldName(this)" --}}>	
			</div>
			
			<p>and I am contacting you because</p>
			<div class="form-control">
				<label>
					Your message
					<small class="help-block" id="messageHelpBlock" style="font-size:0.5rem;">At least 10 characters</small>
				</label>
				<textarea name='message' id="messageTextarea" rows="1" cols="33" {{-- onfocusin="centerFieldMessage(this)" --}}></textarea>

			</div>

			<p>You can reply back to </p>
			<div class="form-control">
				<label>Your email</label>
				<input type="email" name="email" {{-- onfocusin="centerFieldEmail(this)" --}}>	
			</div>

			<br>
			{!! NoCaptcha::display(['data-size' => 'compact']) !!}
			
			

			

			<input class="btn" type="submit" name="send" value="SEND">
		{{ Form::close() }}
	</div>
@endsection

@section('homeAbout')

	<section class="pt-15 pb-5 Nmt-10 bg-white c-blue">	
		<div class="oneThird pt-5">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>About me </h3>
					
					<hr class="border-blue my-1">
					<p>Hi,<br> I am Nico Anastasio,</p>
					<br>
					<strong>A London based, Web Developer.</strong>
					<p>I have 6+ years of projects successfully deployed in my background.</p>
					<br>
					<p>Not enough?</p>
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
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<br>
					<p>I have professional experiences with a global franchise of <b>Mercedes Benz</b> and an <b>award-winning</b> marketing agency with worldwide partnerships situated in the heart of London.</p>
					<br>
					<p>I do several things like write content for my blog and online magazines and help businesses build their presence online</p>
					<br>
					<em>
						For whatever reason you landed here, why don't you join the 
						<a href="https://www.facebook.com/anastasionico.uk/" target="_blank" >community we are building on Facebook?</a>
					</em>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>	

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

		<section class="bg-white c-blue">	
			<div class="oneThird pb-1" >
				<div class="oneThird--big">
					<div class="oneThird--big--content">	
						<ul class="contact-details">
							<li>
								<h3>
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									London and Hertfordshire (UK)
								</h3>
							</li>
							<li>
								<i class="fa fa-phone" aria-hidden="true"></i>
								<a href="tel:04407932902473">+44 079 3290 2473</a>
							</li>
							<li>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<a href = "mailto:nico@anastasionico.uk">nico@anastasionico.uk</a>
							</li>
						</ul>
						
						

					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>	
		</section>


		<div class="sectionCenter mt-5">
			<div class="sectionCenter--content">
				<a href="file/NicoAnastasio_cv19.pdf" target="_blank" class="btn-cta">My CV</a>
			</div>
		</div>
	
	</section>
@endsection

@section('work')
	{{-- Subscribe Section --}}
	<div class="sectionCenter py-5 bg-azure c-white">
		<div class="sectionCenter--content newsLetter clearfix p-3">
			<img class="newsLetter-image" src="/img/book-email-review.jpg" alt="get the weekly book's review">	
			<h3>
				Get my reviews of must-read books that will increase your skills.
			</h3>
			{{ Form::open([
					'method' => 'POST', 
					'action' => ['NewsLetterController@subscribe'],
					'class' => '',
				]) 
			}}
				{{ csrf_field() }}
				
				
				<div class="form-control ">
					<label>Enter your email address...</label>
					<input type="email" name="email" onfocusin="centerFieldEmail(this)" class="newsLetter-input">	
				</div>
				
				<input class="btn btn-cta" type="submit" name="send" value="I'm in">
			{{ Form::close() }}	
		</div>
	</div>
@endsection

@section('homeTestimonial')
	
	<section class="contactLinks--section bg-blue c-white skewed pt-5 pb-1">
		
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
@endsection



@section('blog')
	
	{{-- <script type="text/javascript">
		let nameField = document.querySelector('#nameField')
		nameField.addEventListener('focusin',function (){
			let parentFormControl = nameField.parentElement;
			parentFormControl.style.marginTop = '50%';
		});
		nameField.addEventListener('focusout',function (){
			let parentFormControl = nameField.parentElement;
			parentFormControl.style.marginTop = '0%';
		});
	</script>
	 --}}

@endsection


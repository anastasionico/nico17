@extends('layouts.master')

@section('title', 'anastasionico.uk | Web Developer, Web designer - contact me for a professional website')
@section('description', 'Anastasio Nico. Hatfield, Hertfordshire based freelance web designer and developer, I create website, improving SEO and write tutorial in my blog')
@section('keywords', 'anastasio, nico, anastasionico, Hatfield, web designer, web developer, creation websites')

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
				<input type="text" name="name">	
			</div>
			
			<p>and I am contacting you because</p>
			<div class="form-control">
				<label>
					Your message
					<small class="help-block" id="messageHelpBlock" style="font-size:0.5rem;">At least 10 characters</small>
				</label>
				<textarea name='message' id="messageTextarea" rows="1" cols="33"></textarea>

			</div>

			<p>You can reply back to </p>
			<div class="form-control">
				<label>Your email</label>
				<input type="email" name="email">	
			</div>

			<input class="btn" type="submit" name="send" value="SEND">
		{{ Form::close() }}
	</div>
@endsection

@section('work')

	<section class="pt-15 pb-5 Nmt-10 bg-white c-blue">	
	
		<div class="oneThird pb-1" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>Where to find me</h3>
					
					<hr class="border-blue my-1">

					<p>
						I am a Web Developer and Graphic Designer based in Hatfield (Hertfordshire).
						<br>
						
						I have been realizing websites, web applications and digital graphic designs for several years.
						<br>
						I provide advice and support for everything concerned the life on the web for both <b>privates</b> and <b>companies</b>.
						<br>
						My guidances comprehend design, seo, concepts, functionalities and so on.
						Send me a <b>message</b> using the form above I will ensure to answer you as soon as possible.

					</p>
					
					<img src="img/uk.png" alt="you can find me in Hatfield">
					
					<br><br><br>
					<h3>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						Hatfield, Hertfordshire
					</h3>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<a href="tel:07932902473">07932902473</a>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="sectionCenter mt-5">
			<div class="sectionCenter--content">
				<a href="file/NicoAnastasio_cv16.pdf" target="_blank" class="btn-cta">My CV</a>
			</div>
		</div>
	
	</section>
	
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



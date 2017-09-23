@extends('layouts.master')

@section('hero')
	<section class="hero--section">
		<div class="hero--section-content text-center">
			<h1>
				anastasio<span>nico.uk</span>
			</h1>
			<p>Specialist in <br><b>Web Design</b>  and <br><b>Web Development</b></p>
		</div>
		<div class="hero--section-image">
			<img src="img/mobile-hero.png">
		</div>
	</section>
@endsection

@section('about')
	<section class="about--section">
		<div class="about--section-content">
			<h3>About me</h3>
			
			<p>I am Nico. The Italian speaker, movie and design enthusiast. The one who can code, draw and make pasta at the same time.
			</p>
		</div>
		
		<hr>

		<div class="about--section-phasis">
			
			<span class="about--section-phasis-logo  bigCircle">
				<i class="fa fa-binoculars fa-2x" aria-hidden="true"></i>
			</span>
			<h5 class="about--section-phasis-caption">Discovery</h5>

			<span class="about--section-phasis-logo  bigCircle">
				<i class="fa fa-paint-brush fa-2x" aria-hidden="true"></i>
			</span>
			<h5 class="about--section-phasis-caption">Design</h5>	
			
			<span class="about--section-phasis-logo  bigCircle">
				<i class="fa fa-code fa-2x" aria-hidden="true"></i>
			</span>
			<h5 class="about--section-phasis-caption">Coding</h5>	
			
			<span class="about--section-phasis-logo  bigCircle">
				<i class="fa fa-check-square-o  fa-2x" aria-hidden="true"></i>
			</span>
			<h5 class="about--section-phasis-caption">Testing</h5>	
			

			<h5 class="about--section-phasis-caption">Assistence</h5>	
			<span class="about--section-phasis-logo  bigCircle">
				<i class="fa fa-ambulance  fa-2x" aria-hidden="true"></i>
			</span>
		</div>

		<div class="about--section-skills">
			<span  class="about--section-skills-logo smallCircle skill-1">
				html
			</span>
			<span  class="about--section-skills-logo smallCircle skill-2">
				Css
			</span>
			<span  class="about--section-skills-logo smallCircle skill-3">
				Sass
			</span>
		</div>

	</section>
@endsection

@section('work')
		This is the work.	
@endsection

@section('testimonial')
		This is the testimonial.	
@endsection

@section('blog')
		This is the blog.	
@endsection



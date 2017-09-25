@extends('layouts.master')

@section('hero')

	<div class="hero--section">
		<div class="hero--section-content">
			<h1>
				anastasio<span>nico.uk</span>
			</h1>
			<p>Specialist in <br><b>Web Design</b>  and <br><b>Web Development</b></p>
		</div>
		
		<img class="hero--section-image" src="img/mobile-hero.png">
		
	</div>

@endsection

@section('about')
	



	<section class="about--section">
		<div class="oneThird about--section">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>About me</h3>
				
					<p>I am Nico. The Italian speaker, movie and design enthusiast. The one who can code, draw and make pasta at the same time.
					</p>

					<hr>
				</div>
			</div>
			<div class="oneThird--small"></div>
		</div>		


 		<div class="fullWidth about--section-phasis">
 			<div class="fullWidth--content">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-binoculars fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Discovery</h5>
 			</div>
 			<div class="fullWidth--content">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-paint-brush fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Design</h5>	
 			</div>
 			<div class="fullWidth--content">
				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-code fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Coding</h5>	
 			</div>
 			<div class="fullWidth--content">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-check-square-o  fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Testing</h5>	
 			</div>
 			<div class="fullWidth--content">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-ambulance  fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Assistence</h5>	
 			</div>
 		</div>

 		<div class="sectionCenter">
			
			<div class="sectionCenter--content">
				<span  class="about--section-skills-logo mt-1 smallCircle flexCenter" id="skill-1">
					html
				</span>
			</div>
			<div class="sectionCenter--content">
				<span  class="about--section-skills-logo mt-1 smallCircle flexCenter" id="skill-2">
					Css
				</span>
			</div>
			<div class="sectionCenter--content">
				<span  class="about--section-skills-logo mt-1 smallCircle flexCenter" id="skill-3">
					Sass
				</span>
			</div>

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



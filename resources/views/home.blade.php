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

@section('homeAbout')
	<section class="about--section bg-white c-blue">
		<div class="oneThird">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>About me</h3>
				
					<p>I am Nico.
					<br>
					The Italian speaker, movie and <b>design enthusiast</b>.
					<br> 
					The one who can <b>code</b>, draw and make pasta at the same time.
					</p>

					<hr class="border-blue">
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

 		<div class="fullWidth about--section-phasis">
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-binoculars fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Discovery</h5>
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-paint-brush fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Design</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-code fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Coding</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-check-square-o  fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Testing</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
 				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-ambulance  fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Assistence</h5>	
 			</div>
 		</div>

 		<div class="about--section-skills pt-5 pb-5">
 			<div class="sectionCenter">
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-1">
						html
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-2">
						Css
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-3">
						Sass
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-4">
						html
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-5">
						Css
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-6">
						Sass
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-7">
						html
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-8">
						Css
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-9">
						Sass
					</span>
				</div>
				<div class="sectionCenter--content about--section-skills-divs">
					<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-10">
						html
					</span>
				</div>
			</div>	
 		</div>
 		
	</section>
@endsection

@section('work')
	<section class="work--section bg-blue c-white pt-5 pb-5">	
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>My Projects</h3>
				
					<p>
						I've succesfully completed every of my <b>projects</b> either for companies and individuals.
						<br>
						I create completely personalize <b>websites</b> in which i put bespoke CMS for a fast and easy usage.
					</p>
					
					<hr class="border-white">
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
		
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<div class="card">
						<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
						<div class="card--caption">
							<h4>Cation Consulting</h4>
							<p>
								Cation Consulting Limited is a small consultancy providing change management support in the areas
							</p>
							<em>
								Responsive Webdesign and CMS
							</em>

							<a class="btn btn-ghost">Visit Website</a>
							<a class="btn">See details</a>
						</div>	
					</div>
					
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>			

		<div class="oneThird" >
			<div class="oneThird--small">&nbsp;</div>
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<div class="card">
						<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
						<div class="card--caption">
							<h4>Yufash</h4>
							<p>
								Yufash believes there is no one better placed to create a woman’s perfect outfit, than the woman herself.

								By engaging women in the design process from start to finish, they can see their own style creations brought to life.
							</p>
							<em>
								Redesign website and CMS update
							</em>

							<a class="btn btn-ghost">Visit Website</a>
							<a class="btn">See details</a>
						</div>	
					</div>
				</div>
			</div>
		</div>			
		
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<div class="card">
						<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
						<div class="card--caption">
							<h4>Kick Fit Consult</h4>
							<p>
								With his bespoke consulting and mentoring programme for martial arts school owners,

								You’ll learn how to build a better business to boost your profits, attract and retain students, and gain a great reputation in your community.
							</p>
							<em>
								Responsive Webdesign and CMS
							</em>

							<a class="btn btn-ghost">Visit Website</a>
							<a class="btn">See details</a>
						</div>	
					</div>
					
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>			

		<div class="sectionCenter mt-5">
			<div class="sectionCenter--content">
				<a href='/projects' class="btn-cta">See More</a>
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
							<img src="img/testimonials/tom.jpg">	
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
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
						</q>
						<h4>Imperial Commercials</h4>
						<em>Tom Hughes  - Web Development Manager</em>
					</div>
					<div class="testimonials--quote active" id="quote3">
						<q>
							Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</q>
						<h4>Petali di Wedding</h4>
						<em>Giovanna Leonardi - Execute Manager</em>
					</div>
					<div class="testimonials--quote" id="quote4">
						<q>
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						</q>
						<h4>Kick Fit Academy</h4>
						<em>Ken Pankiewicz  - Director</em>
					</div>
					<div class="testimonials--quote" id="quote5">
						<q>
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
	<section class="blog--section bg-blue c-white skewed pt-5 pb-5">
		<div class="skewReverse">
			<div class="oneThird" >
				<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<h3>Articles</h3>
					
						<p>
							I've succesfully completed every of my <b>projects</b> either for companies and individuals.
							<br>
							I create completely personalize <b>websites</b> in which i put bespoke CMS for a fast and easy usage.
						</p>
						
						<hr class="border-white">
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>		
			
			<div class="oneThird" >
				<div class="oneThird--big">
					<div class="oneThird--big--content">
						<div class="card">
							<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
							<div class="card--caption">
								<div class="card--caption-CatnDate clearfix">
									<b>
										Category
									</b>	
									<em>
										28-09-2017
									</em>	
								</div>
								<h4>Cation Consulting</h4>
								<p>
									Cation Consulting Limited is a small consultancy providing change management support in the areas
								</p>
								
								<a class="btn">See details</a>
							</div>	
						</div>
						
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>			

			<div class="oneThird" >
				<div class="oneThird--small">&nbsp;</div>
				<div class="oneThird--big">
					<div class="oneThird--big--content">
						<div class="card">
							<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
							<div class="card--caption">
								<div class="card--caption-CatnDate clearfix">
									<b>
										Category
									</b>	
									<em>
										28-09-2017
									</em>	
								</div>
								<h4>Cation Consulting</h4>
								<p>
									Cation Consulting Limited is a small consultancy providing change management support in the areas
								</p>
								
								<a class="btn">See details</a>
							</div>	
						</div>
						
					</div>
				</div>
			</div>			

			<div class="oneThird" >
				<div class="oneThird--big">
					<div class="oneThird--big--content">
						<div class="card">
							<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
							<div class="card--caption">
								<div class="card--caption-CatnDate clearfix">
									<b>
										Category
									</b>	
									<em>
										28-09-2017
									</em>	
								</div>
								<h4>Cation Consulting</h4>
								<p>
									Cation Consulting Limited is a small consultancy providing change management support in the areas
								</p>
								
								<a class="btn">See details</a>
							</div>	
						</div>
						
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>			

			<div class="oneThird" >
				<div class="oneThird--small">&nbsp;</div>
				<div class="oneThird--big">
					<div class="oneThird--big--content">
						<div class="card">
							<div class="card--image" style="background-image:url('img/mobile-hero.png')"></div>
							<div class="card--caption">
								<div class="card--caption-CatnDate clearfix">
									<b>
										Category
									</b>	
									<em>
										28-09-2017
									</em>	
								</div>
								<h4>Cation Consulting</h4>
								<p>
									Cation Consulting Limited is a small consultancy providing change management support in the areas
								</p>
								
								<a class="btn">See details</a>
							</div>	
						</div>
						
					</div>
				</div>
			</div>			
			
			<div class="sectionCenter mt-5">
				<div class="sectionCenter--content">
					<a href='/blog' class="btn-cta">Browse Articles</a>
				</div>
			</div>
	
		</div>	
		

		
	</section>
@endsection
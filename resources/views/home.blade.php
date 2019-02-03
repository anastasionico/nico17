@extends('layouts.master')

@section('title', 'anastasionico.uk | Freelance Web Developer Designer London, Hertfordshire UK')
@section('description', 'I am a freelance Web Developer and Web Designer working in London and Hertfordshire UK, Expert in building bespoke responsive websites, Online Marketing Services and SEO')
@section('keywords', 'anastasionico, freelance, website, web designer, web developer, London, Hertfordshire, seo, marketing')



@section('hero')
	<div class="hero--section ">
		
		<div class="hero--section-content">
			<h1>
				anastasio<span>nico.uk</span>
			</h1>
			<h4>Artisan of the web</h4>
			<br>
			<h2>Specialist in <b>Web Design</b> and <b>Web Development</b></h2>
		</div>
		
		<div class="hero--section-foreground">
			<pre>
				<code>
					use Generator;
					$factory->define(App\User::class, function ($_Gen) {
					    static $password;
					    return [
					        'name' => $gen->name,
					        'email' => $gen->unique()->safeEmail,
					        'password' => $password ?: $password = bcrypt('secret'),
					        'remember_token' => str_random(10),
					    ];
					});
				</code>
			</pre>
		</div>
		
	</div>
@endsection

@section('homeAbout')
	<section class="about--section bg-white c-blue">
		<div class="oneThird">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>About me</h3>
					<p>Hi, I am Nico.</p>
					<br>
					<p>An Italian speaker, code and design enthusiast.</p>
					<br>
					<p>I am working in <strong>London and Hertfordshire</strong> as a <strong>Web Developer</strong> and <strong>Web Designer</strong>.</p>
					<br>
					<p>I do two things:</p>
					<p>I <strong>publish content on my blog</strong> that helps web developers improve their skills and share knowledge,</p>
					<p>and</p>
					<p>I help businesses by creating websites and web applications that are designed to fulfill their purpose, whether it is to <b>provide information</b> or convert visitors into <b>customers</b>.</p>
					<br>
					<em>
						For whatever reason you landed here, why don't you join the 
						<a href="https://www.facebook.com/anastasionico.uk/" target="_blank" >community we are building on Facebook?</a>
					</em>

					<hr class="border-blue">
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
		
		<div class="sectionCenter">
			<video class="videoCommercial" controls>
				<source src="video/commercial.mp4" type="video/mp4">
			</video>
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
					<i class="fa fa-check-square-o  fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Testing</h5>	
 			</div>
 			<div class="fullWidth--content about--section-phasisDivs">
				<span class="about--section-phasis-logo  bigCircle flexCenter">
					<i class="fa fa-code fa-2x" aria-hidden="true"></i>
				</span>
				<h5 class="about--section-phasis-caption">Coding</h5>	
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
 				@php
 					$i = 0;
 				@endphp
 				@foreach($skills as $skill)
 					@php
 						$i++
 					@endphp
 					<div class="sectionCenter--content about--section-skills-divs">
						<span  class="about--section-skills-divs-logo mt-1 smallCircle flexCenter" id="skill-{{$i}}">
							<small>{{ $skill->name}}</small>
							<span style="width: {{ $skill->value*2.5 }}px"></span>
						</span>
					</div>
 				@endforeach
			</div>	
 		</div>
 		
	</section>
@endsection

@section('work')
	<section class="blog--section   bg-blue c-white pt-5 pb-5">
		<div class="skewReverse">
			<div class="oneThird" >
				<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<h3>Articles</h3>
					
						<p>	
							Blogging was once used to share a person’s <b>thoughts</b>, 
							<br>
							Nowadays it is a platform that allows to communicate and receive <b>feedback</b> from plenty of people all around the world.
							<br>
							Have a look at some of my <b>blog post</b>.
						</p>

					
						<hr class="border-white">
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>		
			
			@php
				$postsIncrement = 0
			@endphp			
			@foreach($posts as $post)
				<div class="oneThird" >
					@php
						$postsIncrement++
					@endphp		
					@if( $postsIncrement %2 == 0 )
						<div class="oneThird--small">&nbsp;</div>
					@endif
					<div class="oneThird--big">
						<div class="oneThird--big--content">
							<div class="card">
								<div class="card--image" style="background-image:url('/img/blog/{{ $post->img }}')"></div>
								<div class="card--caption">
									<div class="card--caption-CatnDate clearfix">
										<b>
											{{ ucfirst($post->category->supercategory->name) }}
											({{ ucfirst($post->category->name) }})
											
										</b>	
										<em>
											{{ $post->published_at->toFormattedDateString() }}
										</em>
										<span class="card--caption-CatnDate-minutesToRead-bg">
					 						<span class="{{$post->minutes_to_read}}-minutes_to_read card--caption-CatnDate-minutesToRead-fg"></span>
					 						<small><b>{{$post->minutes_to_read}} </b>Minutes to read</small>
										</span>	
									</div>
									<h4>{{ ucfirst($post->name) }}</h4>
									<p>
										{{ ucfirst($post->excerpt) }}
									</p>
									@if( $post->cta_link)
										<a href="{{ $post->cta_link }}" target="_blank" class="btn btn-ghost">{{ $post->cta_text }}</a>
									@endif
									<a href="/blog/{{ $post->slug }}" class="btn">See details</a>
								</div>	
							</div>
							
						</div>
					</div>
				</div>			
			@endforeach

			<div class="sectionCenter mt-5">
				<div class="sectionCenter--content">
					<a href='/blog' class="btn-cta">Read {{ $postsCount - 5 }} more</a>
				</div>
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

@section('subscribe')
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

@section('blog')
	<section class="work--section bg-blue c-white skewed pt-5 pb-5">	
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>My Projects</h3>
				
					<p>
						I have successfully completed each of my <b>projects</b> either for companies and individuals.
						<br>
						I create completely personalized <b>web applications</b> in which I implement bespoke CMS for a fast and easy usage.
					</p>
					
					<hr class="border-white">
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
		
		@php
			$projectsIncrement = 0
		@endphp			
		@foreach($projects as $project)
			<div class="oneThird" >
				@php
					$projectsIncrement++
				@endphp		
				@if( $projectsIncrement %2 == 0 )
					<div class="oneThird--small">&nbsp;</div>
				@endif
				<div class="oneThird--big">
					<div class="oneThird--big--content">
						<div class="card">
							<div class="card--image" style="background-image:url('/img/projects/{{ $project->img }}')"></div>
							<div class="card--caption">
								<h4>{{ ucfirst($project->name) }}</h4>
								<p>
									{{ ucfirst($project->excerpt) }}
								</p>
								<em>
									@if($project->seo)
										<i class="fa fa-line-chart" aria-hidden="true"></i> S.E.O. &emsp;
									@endif
									@if($project->ecommerce)
										<i class="fa fa-shopping-cart" aria-hidden="true"></i> eCommerce &emsp;
									@endif
									@if($project->responsive)
										<i class="fa fa-mobile" aria-hidden="true"></i> Responsive &emsp;
									@endif
									@if($project->social_marketing)
										<i class="fa fa-commenting-o" aria-hidden="true"></i> Social Marketing &emsp;
									@endif
									@if($project->host_support)
										<i class="fa fa-ambulance" aria-hidden="true"></i> Host & Support &emsp;
									@endif
								</em>
								@if( $project->cta_link)
									<a href="{{ $project->cta_link }}" target="_blank" class="btn btn-ghost">Visit</a>
								@endif
								<a href="/projects/{{ $project->slug }}" class="btn">See details</a>
							</div>	
						</div>
						
					</div>
				</div>
			</div>			
		@endforeach

		<div class="sectionCenter mt-5">
			<div class="sectionCenter--content">
				<a href='/projects' class="btn-cta">Browse {{ $projectsCount - 5 }} More</a>
			</div>
		</div>
		
	</section>	
@endsection
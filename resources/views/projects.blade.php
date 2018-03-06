@extends('layouts.master')

@section('title', 'anastasionico.uk | Portfolio and previous projects')
@section('description', 'A list of some freelance and non projects that I carried out form my previous projects')
@section('keywords', 'web design portfolio, web developer portfolio, web designer, web developer, previous job, freelance, projects')

@section('hero')
	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>Portfolio</h1>
			<cite>"Quality without results is pointless. Results without quality is boring."</cite>
			<b>Johan Cruyff</b>
		</div>
		
	</div>
@endsection

@section('work')
	<section class="work--section pt-15 pb-5 Nmt-10 skewed bg-blue c-white">	
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>My Projects</h3>
				
					<p>
						Here is a list of some of the <b>projects</b> I have been involved in the last few years,
						<br>
						Browse them and discover which one you <b>like the most</b>.
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
		

		
	</section>
@endsection


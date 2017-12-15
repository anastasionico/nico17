@extends('layouts.master')

@section('title', 'anastasionico.uk |  Code, Graphic tutorials and Software guides')
@section('description', 'Here you find tutorials and step by step guides for coding with programming languages, draw with photoshop and the best tricks using all the softwares you like')
@section('keywords', 'anastasio, nico, anastasionico, tutorial, tutorials, software, websites, html5 , css, css3, javascript, photoshop,linux, internet,guide,code,graphic,tips')

@section('hero')
	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>The Journal</h1>
			<cite>"Write what you know. That should leave you with a lot of free time."</cite>
			<b>Howard Nemerov</b>
		</div>
		
	</div>
@endsection

@section('blog')
	<section class="blog--section bg-blue c-white pt-15 Nmt-10 skewed">	
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>Articles</h3>
				
					<p>	
						In this page, you will find my <b>blog posts</b>, 
						I write to share my <b>knowledge</b> and my <b>experiences</b>.
						<br>
						Skim them and you will find what you are looking for.
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
								</div>
								<h4>{{ ucfirst($post->name) }}</h4>
								<p>
									{{ ucfirst($post->excerpt) }}
								</p>
								@if( $post->cta_link)
									<a href="{{ $post->cta_link }}" target="_blank" class="btn btn-ghost">Visit</a>
								@endif
								<a href="/blog/{{ $post->slug }}" class="btn">See details</a>
							</div>	
						</div>
						
					</div>
				</div>
			</div>			
		@endforeach
			
	</section>
@endsection


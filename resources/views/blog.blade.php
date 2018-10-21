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
		<div class="oneThird pt-5" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h3>{{ ucfirst($segment ?? 'Articles')}}</h3>
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
		
		<div class="fullWidth bg-blue">
			
			@foreach($supercategories as $supercategory)
				<div class="miniCard is-visible blogCategory">
				
					<div class="miniCard--image" style="background-image:url('/img/blog/{{ $supercategory->img }}')"></div>
					<div class="miniCard--caption">
						<h4>
					 		{{ ucfirst($supercategory->name) }}
				 		</h4>
				 		<div class="miniCard--caption-CatnDate clearfix">
							<p>
								{{substr($supercategory->excerpt, 0, 150)}}
								@if(strlen($supercategory->excerpt) > 150)
									...
								@endif
								
							</p>	
						</div>
						<a href="/blogCat/{{ $supercategory->slug }}" class="btn">Filter</a>
						
					</div>	
				</div>
			@endforeach

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


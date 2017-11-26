@extends('layouts.master')

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
						I've succesfully completed every of my <b>projects</b> either for companies and individuals.
						<br>
						I create completely personalize <b>websites</b> in which i put bespoke CMS for a fast and easy usage.
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
										{{ $post->published_at}}
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


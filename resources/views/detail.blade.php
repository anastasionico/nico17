@extends('layouts.master')

@section('head')
	<style type="text/css">
		.hero--section:before{
			background-image: url("/img/projects/{{$content->img}}");
			background-size: cover;
		}		
	</style>
@endsection

@section('hero')
	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>{{ ucfirst($content->name) }}</h1>
		</div>
		
	</div>
@endsection

@section('homeAbout')

	<section class="pt-15 pb-5 Nmt-10 bg-white c-blue detail--page "> {{-- skewed	 --}}
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					
					<span class="my-1 d-block">
						<h3 class="d-inline">
							@if( $content->category )
								{{$content->category}}
							@else
								Project
							@endif
						</h3>	
						<em class="f-right clearfix">{{ $content->created_at->toFormattedDateString() }}</em>	
					</span>
					
					<hr class="border-blue my-1">

					<h5>
						{{ ucfirst($content->excerpt) }}
					</h5>
					
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content detail--page-index">
					{!! $content->content !!}
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content detail--page-index">
					<em>
						@if($content->seo)
							<i class="fa fa-line-chart" aria-hidden="true"></i> S.E.O. &emsp;
						@endif
						@if($content->ecommerce)
							<i class="fa fa-shopping-cart" aria-hidden="true"></i> eCommerce &emsp;
						@endif
						@if($content->responsive)
							<i class="fa fa-mobile" aria-hidden="true"></i> Responsive &emsp;
						@endif
						@if($content->social_marketing)
							<i class="fa fa-commenting-o" aria-hidden="true"></i> Social Marketing &emsp;
						@endif
						@if($content->host_support)
							<i class="fa fa-ambulance" aria-hidden="true"></i> Host & Support &emsp;
						@endif
					</em>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		@if( $content->cta_link)
			<div class="sectionCenter mt-5">
				<div class="sectionCenter--content">
					<a href="{{ $content->cta_link }}" target="_blank" class="btn btn-cta">Visit</a>
				</div>
			</div>
		@endif
	</section>

@endsection

@section('work')
	
	<section class="bg-blue c-white ">	
		<h3 class="text-center py-3">
			See other projects
		</h3>
		<div class="fullWidth bg-blue">
			
			@foreach($parents as $parent)
				<div class="miniCard is-visible">
					<div class="miniCard--image" style="background-image:url('/img/projects/{{ $parent->img }}')"></div>
					<div class="miniCard--caption">
						<div class="miniCard--caption-CatnDate clearfix">
							<b>
								@if( $parent->category )
									{{$parent->category}}
								@else
									Project
								@endif
							</b>	
							<em>
								{{ $parent->created_at->toFormattedDateString() }}
							</em>	
						</div>
						<h4>{{$parent->name}}</h4>
						<a href="/projects/{{ $parent->slug }}" class="btn">See details</a>
						@if( $parent->cta_link)
							<a href="{{ $parent->cta_link }}" target="_blank" class="btn btn-ghost">Visit</a>
						@endif
						
						
					</div>	
				</div>
			@endforeach	
			
 		</div>
	</section>
@endsection

{{-- @section('homeTestimonial')
	// this is the section with the comment
	<section class="bg-white c-blue detail--page  skewed">	
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<form>
						<div class="form-control">
							<label>Insert your comment here</label>
							<textarea rows="1"></textarea>
						</div>
						<input class="btn" type="submit" name="COMMENT" value="COMMENT">
					</form>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
			</div>

			<div class="oneThird--small">&nbsp;</div>
		</div>		
	</section>
@endsection --}}

















{{-- 
#####  USE THIS TEMPLATE TO CREATE HR, SCRIPTS, IMAGES, ALERTS, TABLES AND SO ON.  #####

<hr class="border-blue my-1">

<div class="oneThird--big-- clickable">
	<script src="https://gist.github.com/xfbs/1188092.js"></script>
</div>


<img class='clickable' src="img/blog/london.jpg">	


<p class="alert alert-danger">
	This is a Danger Alert 
</p>

<p class="alert alert-warning">
	This is a Warning Alert 
</p>

<p class="alert alert-success">
	This is a success Alert 
</p>

<p class="alert alert-primary">
	This is a primary Alert 
</p>

<p class="alert alert-info">
	This is a info Alert 
</p>


<table>
	<tr>
		<th>Lorem</th>
		<th>ipsum</th>
		<th>sit amet</th>
	</tr>
	<tr>
		<td>consectetur adipisicing elit</td>
		<td>sed do eiusmod</td>
		<td>tempor incididunt ut</td>
	</tr>
	<tr>
		<td>labore et</td>
		<td>dolore magna aliqua</td>
		<td>Ut enim ad minim veniam</td>
	</tr>
</table>

 --}}
@extends('layouts.master')

@section('title', "anastasionico.uk | ". $content->name )
@section('description', $content->excerpt )
@section('keywords', $content->keywords )

@section('head')
	<meta property="og:title" content="{{ ucfirst($content->name) }}">
	<meta property="og:description" content="{{ ucfirst($content->excerpt) }}">
	<meta property="og:image" content="www.anastasionico.uk/img/{{$segment}}/{{$content->img}}">
	<meta property="og:url" content="{{ $_SERVER['PHP_SELF']}}">
	



	<style type="text/css">
		.hero--section:before{
			background-image: url("/img/{{$segment}}/{{$content->img}}");
			background-size: cover;
		}		
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shCore.js" type="text/javascript"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shCore.css" rel="stylesheet" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushCss.js" type="text/javascript"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushJScript.js" type="text/javascript"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushPhp.js" type="text/javascript"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushBash.js" type="text/javascript"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/scripts/shBrushSql.js" type="text/javascript"></script> 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/SyntaxHighlighter/3.0.83/styles/shThemeMidnight.css" rel="stylesheet" type="text/css" />

	<script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script> 
	
	
@endsection

@section('hero')
	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>{{ ucfirst($content->name) }}</h1>
		</div>
		
	</div>

@endsection

@section('homeAbout')
	
	<section class="pt-15 pb-5 Nmt-10 bg-white c-blue detail--page">
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					
					<span class="my-1 d-block">
						<h3 class="d-inline">
							@if( $content->category )
								{{ ucfirst($content->category->supercategory->name) }}
								({{ ucfirst($content->category->name) }})
							@else
								Project
							@endif
						</h3>	
						<em class="f-right clearfix">
							@if( $content->category )
								{{ $content->published_at->toFormattedDateString() }}
							@else
								{{ $content->created_at->toFormattedDateString() }}
							@endif
						</em>	
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
			<div class="sectionCenter">
				<div class="sectionCenter--content">
					<a href="{{ $content->cta_link }}" target="_blank" class="btn btn-cta">Visit</a>
				</div>
			</div>
		@endif

		
		<div class="sectionCenter ">

			@php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; @endphp
			
			@if(strpos($actual_link, "blog/"))
				<div class="sectionCenter--content  shareButton-div-mobile clearfix p-3">
					
					<a href="https://www.facebook.com/sharer/sharer.php?u={{$actual_link}}" title="Share on Facebook" rel="nofollow" target="_blank" class="bigCircle flexCenter bg-white shareButton-div-mobile-circle">
						<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
					</a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url={{$actual_link}}&title={{ ucfirst($content->name) }}&summary={{ ucfirst($content->excerpt) }}&source=anastasionico.uk" title="Share on LinkedIn" rel="nofollow" target="_blank" class="bigCircle flexCenter bg-white shareButton-div-mobile-circle">
						<i class="fa fa-2x fa-linkedin" aria-hidden="true"></i>
					</a>	
				</div>
			@endif
		</div>


	</section>



	<div class="sectionCenter py-5 Nmt-10  bg-white c-white">
		<div class="sectionCenter--content newsLetter  clearfix p-3">
			<h3>Sign up for the Free to get access to my <br> <b>coding</b> and <b>design tips</b></h3>
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

				<input class="btn btn-cta" type="submit" name="send" value="SIGN UP">
			{{ Form::close() }}	
		</div>
	</div>

	
	<div class="oneThird bg-white c-blue">
		<div class="oneThird--big">
			<div class="oneThird--big--content detail--page-index">
				<div id="disqus_thread"></div>

				<script>
					/**
					*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
					*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
					
					var disqus_config = function () {
						this.page.url =  "{{ $actual_link }}" ;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = "{{ $_SERVER['REQUEST_URI'] }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					};
					
					(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://anastasionico-uk.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					                            
			</div>
		</div>
		<div class="oneThird--small">&nbsp;</div>
	</div>		

@endsection

@section('work')
	{{-- <section class=" pt-15 pb-5 Nmt-10 skewed bg-blue c-white">	 --}}
	<section class="pb-1 bg-blue c-white skewed">
		<h3 class="text-center py-3">
			@if( $content->category )
				Other posts that might interest you
			@else
				See other projects
			@endif
		</h3>
		<div class="fullWidth bg-blue">
			@foreach($otherContents as $otherContent)
				<div class="miniCard is-visible">
					<div class="miniCard--image" style="background-image:url('/img/{{ $segment }}/{{ $otherContent->img }}')"></div>
					<div class="miniCard--caption">
						<div class="miniCard--caption-CatnDate clearfix">
							<b>
								@if( $otherContent->category )
									{{ ucfirst($otherContent->category->supercategory->name) }}
									({{ ucfirst($otherContent->category->name) }})
								@else
									Project
								@endif
							</b>	
							<em>
								{{ $otherContent->created_at->toFormattedDateString() }}
							</em>	
						</div>
						<h4>
					 		{{ ucfirst($otherContent->name) }} 
				 		</h4>
						
						@if( $otherContent->cta_link)
							<a href="{{ $otherContent->cta_link }}" target="_blank" class="btn btn-ghost">Visit</a>
						@endif

						<a href="/{{ $segment }}/{{ $otherContent->slug }}" class="btn">See details</a>
						
					</div>	
				</div>
			@endforeach	
			
 		</div>
	</section>
	
	<script type="text/javascript">
     	SyntaxHighlighter.all()
	</script>
	<script id="dsq-count-scr" src="//anastasionico-uk.disqus.com/count.js" async></script>
@endsection



















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
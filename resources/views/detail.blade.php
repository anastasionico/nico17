@extends('layouts.master')

@php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; @endphp

@section('title', "anastasionico.uk | ". $content->name )
@section('description', $content->excerpt )
@section('keywords', $content->keywords )

@section('head')
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

	<script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(2(){1 h=5;h.I=2(){2 n(c,a){4(1 d=0;d<c.9;d++)i[c[d]]=a}2 o(c){1 a=r.H("J"),d=3;a.K=c;a.M="L/t";a.G="t";a.u=a.v=2(){6(!d&&(!8.7||8.7=="F"||8.7=="z")){d=q;e[c]=q;a:{4(1 p y e)6(e[p]==3)B a;j&&5.C(k)}a.u=a.v=x;a.D.O(a)}};r.N.R(a)}1 f=Q,l=h.P(),i={},e={},j=3,k=x,b;5.T=2(c){k=c;j=q};4(b=0;b<f.9;b++){1 m=f[b].w?f[b]:f[b].S(/\\s+/),g=m.w();n(m,g)}4(b=0;b<l.9;b++)6(g=i[l[b].E.A]){e[g]=3;o(g)}}})();',56,56,'|var|function|false|for|SyntaxHighlighter|if|readyState|this|length|||||||||||||||||true|document||javascript|onload|onreadystatechange|pop|null|in|complete|brush|break|highlight|parentNode|params|loaded|language|createElement|autoloader|script|src|text|type|body|removeChild|findElements|arguments|appendChild|split|all'.split('|'),0,{}))</script> 
	
	
@endsection

{{-- @section('hero')

	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>{{ ucfirst($content->name) }}</h1>
		</div>
		
	</div>
@endsection --}}




@section('homeAbout')
	{{-- Title and Excerpt --}}
	<section class="bg-white c-blue detail--page">
		<div class="oneThird pt-1">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h1>{{ ucfirst($content->name) }}</h1>
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
								@if($content->published_at > date('Y-m-d', strtotime("-6 months")))
									{{ $content->published_at->toFormattedDateString() }}
								@endif
							@else
								@if($content->created_at > date('Y-m-d', strtotime("-6 months")))
									{{ $content->created_at->toFormattedDateString() }}
								@endif
							@endif
						</em>	
					</span>
					
					<hr class="border-blue my-1">

					{{ ucfirst($content->excerpt) }}
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
	</section>	

	{{-- Image --}}
	<div class="sectionCenter bg-white">
		<div class="sectionCenter--content">
			<img src="/img/{{$segment}}/{{$content->img}}" alt="/img/{{$segment}}/{{$content->img}}">
		</div>
	</div>

	{{-- Content --}}
	<section class="bg-white c-blue detail--page">
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content detail--page-index">
					{!! $content->content !!}
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
	</section>
	
	{{-- Detail and CTA --}}
	<section class="bg-white c-blue detail--page">
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
	</section>

	@if( $content->cta_link )

		<div class="sectionCenter bg-white pt-5 pb-5">
			<div class="sectionCenter--content">
				<a href="{{ $content->cta_link }}" target="_blank" class="btn btn-cta">
					@if(strpos($actual_link, "blog/"))
						{{ $content->cta_text }}
					@else
						Visit
					@endif
				</a>

				
			</div>
		</div>
	@endif

	<div class="oneThird  bg-white c-blue">
		<div class="oneThird--big">
			<div class="oneThird--big--content">
				<em>
					If you like this content and you are hungry for some more <a href="https://www.facebook.com/anastasionico.uk/" target="_blank" >join the Facebook's community</a> in which we share info and news just like this one!
				</em>
			</div>
		</div>
		<div class="oneThird--small"></div>
	</div>		


	{{-- Mobile facebook and Linkedin share buttons --}}
	<section class="bg-white c-blue detail--page pb-5">
		<div class="sectionCenter ">

			
			
			@if(strpos($actual_link, "blog/"))
				<div class="sectionCenter--content  shareButton-div-mobile clearfix p-3">
					
					<a href="https://www.facebook.com/sharer/sharer.php?u={{$actual_link}}" title="Share on Facebook" rel="nofollow" target="_blank" class="bigCircle flexCenter bg-white shareButton-div-mobile-circle">
						<i class="fab fa-2x fa-facebook-f"></i>
					</a>
					<a href="http://twitter.com/share?text={{ ucfirst($content->excerpt) }}&url={{$actual_link}}&hashtags={{str_replace(' ', '', ucwords($content->keywords))}}"  class="bigCircle flexCenter bg-white shareButton-div-mobile-circle">
						<i class="fab fa-2x fa-twitter"></i>
					</a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url={{$actual_link}}&title={{ ucfirst($content->name) }}&summary={{ ucfirst($content->excerpt) }}&source=anastasionico.uk" title="Share on LinkedIn" rel="nofollow" target="_blank" class="bigCircle flexCenter bg-white shareButton-div-mobile-circle">
						<i class="fab fa-2x fa-linkedin-in"></i>
					</a>	
				</div>
			@endif
		</div>
	</section>

	
	{{-- Subscribe Section --}}
	<div class="sectionCenter py-5 Nmt-10 bg-white c-white">
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
	
	

	{{-- Similar Content --}}
	{{-- <div class="oneThird bg-white c-blue">
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
	</div>		 --}}
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
							<a href="{{ $otherContent->cta_link }}" target="_blank" class="btn btn-ghost">
								{{ $otherContent->cta_text }}
							</a>
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
	{{-- <script id="dsq-count-scr" src="//anastasionico-uk.disqus.com/count.js" async></script> --}}
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


<div class="faq bg-white c-blue ">
	<div class="faq-question">
		<div  class="faq-question-text">
			Is this a question? if yedivs this is a very long questing and you do not need to repeat it
		</div>
		<div class="faq-question-sign">+</div>
	</div>
	<div class="faq-answer">
		this is a very long question and you do not need to repeat it,
		this is a very long question and you do not need to repeat it,
		this is a very long question and you do not need to repeat it,
		this is a very long question and you do not need to repeat it,
	</div>
</div>




 --}}

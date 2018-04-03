<aside>

	<div class="scroll--ball-Div">
		<div class="scroll--balls">
			<span class='scroll--ball'></span>
			<span class='scroll--ball'></span>
			<span class='scroll--ball'></span>
			<span class='scroll--ball'></span>
			<span class='scroll--ball'></span>
		<div>
	</div>

	<div class="shareButton-div">
		@if(isset($content))
			@php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; @endphp
			
			<a href="https://www.facebook.com/sharer/sharer.php?u={{$actual_link}}" title="Share on Facebook" rel="nofollow" target="_blank" class="bigCircle flexCenter bg-white my-1 shareButton-div-circle">
				<i class="fa fa-2x fa-facebook" aria-hidden="true"></i>
			</a>
			<a href="https://www.linkedin.com/shareArticle?mini=true&url={{$actual_link}}&title={{ ucfirst($content->name) }}&summary={{ ucfirst($content->excerpt) }}&source=anastasionico.uk" title="Share on LinkedIn" rel="nofollow" target="_blank" class="bigCircle flexCenter bg-white my-1 shareButton-div-circle">
				<i class="fa fa-2x fa-linkedin" aria-hidden="true"></i>
			</a>

		@endif
	</div>
	
</aside>
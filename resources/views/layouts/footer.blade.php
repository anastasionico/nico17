<footer>
	<div class="footer--section">
		<div class="footer--section-contact">
			<div class="twoThird">
				<div class="twoThird--small text-left">
					<div class="twoThird--small-content" id='useful-link'>
						<h3>Useful links</34>

						<p><a href="/web-development-resources">Resources</a></p>
						<p><a href="/learn-php">Learn PHP</a></p>
						<p><a href="/creative-web-design-london">Creative Designer</a></p>
						<p><a href="/contact">Contact</a></p>
					</div>
				</div>
				<div class="twoThird--big">
					<div class="twoThird--big-content">
						<h3>Anastasio Nico</h3>
						<br>
						<small id="footerDescription">
							Web Designer / Web Developer based in London UK. 
							<br>
							I help buiness convert website's visitors into customers. 
							<br>
							I specialize in enhancing online visibility of business using high-quality solutions. 
						</small>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="footer--section-social">
			<div class="sectionCenter">
				<a href="mailto:anastasionico@gmail.com?subject=Mail from Nico17">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-1">
							<i class="far fa-envelope"></i>
							<small>nico@anastasionico.uk</small>
						</span>
					</div>
				</a> 
				<a href="https://www.facebook.com/anastasionico.uk" target="_blank">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-2">
							<i class="fab fa-facebook-f"></i>
							<small>/anastasionico.uk</small>
						</span>
					</div>
				</a>
				<a href="https://www.linkedin.com/in/anastasionico/" target="_blank">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-3">
							<i class="fab fa-linkedin-in"></i>
							<small>/anastasionico</small>
						</span>
					</div>
				</a>
				<a href="https://twitter.com/anastasio_nico" target="_blank">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-4">
							<i class="fab fa-twitter"></i>
							<small>/anastasio_nico</small>
						</span>
					</div>
				</a>
				<a href="https://github.com/anastasionico" target="_blank">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-5">
							<i class="fab fa-github"></i>
							<small>/anastasionico</small>
						</span>
					</div>
				</a>
			</div>
		</div>

		<div class="fullWidth footer--section-blog">
 			<div class="fullWidth--content">
 				<ul>
					<li><h4>Coding</h4></li>
					@php 
						$codingPostsNumber = 0;
					@endphp
					@foreach($blogpostsPublished as $blogpostPublished)

						@if( strtolower($blogpostPublished->category->supercategory->name) == 'coding' && $codingPostsNumber < 3)
							
							<li>
								<a class="footer--section-blog-link" href="/blog/{{$blogpostPublished->slug}}">
									{{ ucfirst($blogpostPublished->name) }}

								</a>
							</li>
							@php
								$codingPostsNumber++;
							@endphp
						@endif
					@endforeach
				</ul>
 			</div>
 			<div class="fullWidth--content">
 				<ul>
					<li><h4>Graphic</h4></li>
					@php 
						$graphicPostsNumber = 0;
					@endphp
					@foreach($blogpostsPublished as $blogpostPublished)
						@if( strtolower($blogpostPublished->category->supercategory->name) == 'graphic' && $graphicPostsNumber < 3)
							<li>
								<a href="/blog/{{$blogpostPublished->slug}}">
									{{ ucfirst($blogpostPublished->name) }}
								</a>
							</li>
							@php
								$graphicPostsNumber++;
							@endphp	
						@endif
					@endforeach
				</ul>
 			</div>
 			<div class="fullWidth--content">
				<ul>
					<li><h4>Utility</h4></li>
					@php 
						$utilityPostsNumber = 0;
					@endphp
					@foreach($blogpostsPublished as $blogpostPublished)
						@if( strtolower($blogpostPublished->category->supercategory->name) == 'utility' && $utilityPostsNumber < 3)
							<li>

								<a href="/blog/{{$blogpostPublished->slug}}">
									{{ ucfirst($blogpostPublished->name) }}
								</a>
							</li>
							@php
								$utilityPostsNumber++;
							@endphp
						@endif
					@endforeach					
				</ul>
 			</div>
 		</div>	
		
		<div class="footer--section-copyright">
			<small>&copy; Copyright {{date("Y")}} Anastasio Domenico, All Rights Reserved</small>
		</div>

	</div>
	
</footer>


<div id="popUpDelayed" class="newsLetter bg-white c-white p-3">
	<img class="newsLetter-image" src="/img/book-email-review.jpg" alt="get the weekly book's review">	
	<h6>
		Get my free books' review to improve your skill now!
	</h6>

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

	<a class="btn btn-ghost" onclick="popUpDelayedClose()">I don't want to improve</a>
</div>	









{{-- {!! NoCaptcha::renderJs() !!} --}}
<script type="text/javascript">
	function closeAlert(){
		var popup = document.querySelector('.alert');
		popup.style.display='none';
	}
	function popUpDelayedClose(){
		var popUpDelayed = document.querySelector('#popUpDelayed');
		popUpDelayed.style.display='none'; 
	}
	

	var messageHelpBlock = document.querySelector('#messageHelpBlock');
	var messageTextarea = document.querySelector('#messageTextarea');

	messageTextarea.onkeyup = function(){
		var messageTextareaLength = 10 - messageTextarea.value.length;
		if(messageTextareaLength > -1){
			messageHelpBlock.textContent = "At least " + messageTextareaLength + " characters more";	
		}else{
			messageHelpBlock.textContent = "Message long enough";
		}
		}
</script>
<script src="/js/main.js"></script>

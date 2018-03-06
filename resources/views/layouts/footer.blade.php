<footer>
	
	<div class="footer--section">
		<div class="footer--section-contact">
			<div class="twoThird">
				<div class="twoThird--small">
					<div class="twoThird--small-content">
						<h3>Anastasio Nico</h3>
						<small id="footerDescription">
							I am a Web Designer and Web Developer working in London and Hertfordshire.
							<br>
							Available for creating Web Applications and Graphic Projects.
						</small>
					</div>
				</div>
				<div class="twoThird--big">
					<div class="twoThird--big-content">
						{{ Form::open([
								'method' => 'POST', 
								'action' => ['ContactController@store'],
								'class' => 'footerForm',
							]) 
						}}
							{{ csrf_field() }}
						
							<div class="form-control">
								<label>Your Name</label>
								<input type="text" name="name">	
								
							</div>
							<div class="form-control">
								<label>
									Insert your message here
									<small class="help-block" id="messageHelpBlock" style="font-size:0.5rem;">At least 10 characters</small>
								</label>
								<textarea name='message' id="messageTextarea" rows="1" cols="33"></textarea>
							</div>
							<div class="form-control">
								<label>Your Email</label>
								<input type="text" name="email">
							</div>
							<input class="btn" type="submit" name="send" value="SEND">
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>	
		
		<div class="footer--section-social">
			<div class="sectionCenter">
				<a href="mailto:anastasionico@gmail.com?subject=Mail from Nico17">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-1">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<small>nico@anastasionico.uk</small>
						</span>
					</div>
				</a> 
				<a href="https://www.facebook.com/anastasionico.uk" target="_blank">
				<div class="sectionCenter--content">
					<span  class="social-logo mt-1 smallCircle flexCenter" id="social-2">
						<i class="fa fa-facebook" aria-hidden="true"></i>
						<small>/anastasionico.uk</small>
					</span>
				</div>
				</a>
				<a href="https://www.linkedin.com/in/anastasionico/" target="_blank">
				<div class="sectionCenter--content">
					<span  class="social-logo mt-1 smallCircle flexCenter" id="social-3">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
						<small>/anastasionico</small>
					</span>
				</div>
				</a>
				<a href="https://github.com/anastasionico" target="_blank">
					<div class="sectionCenter--content">
						<span  class="social-logo mt-1 smallCircle flexCenter" id="social-4">
							<i class="fa fa-github" aria-hidden="true"></i>
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
								<a href="/blog/{{$blogpostPublished->slug}}">
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

<script type="text/javascript">
	function closeAlert(){
		var popup = document.querySelector('.alert');
		popup.style.display='none';
	}
</script>
<script type="text/javascript">
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

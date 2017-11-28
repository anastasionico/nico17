<footer>
	<div class="footer--section">
		<div class="footer--section-contact">
			<div class="twoThird">
				<div class="twoThird--small">
					<div class="twoThird--small-content">
						<h3>Anastasio Nico</h3>
						<small>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
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
				<div class="sectionCenter--content">
					<span  class="social-logo mt-1 smallCircle flexCenter" id="social-1">
						mail
					</span>
				</div>
				<div class="sectionCenter--content">
					<span  class="social-logo mt-1 smallCircle flexCenter" id="social-2">
						fb
					</span>
				</div>
				<div class="sectionCenter--content">
					<span  class="social-logo mt-1 smallCircle flexCenter" id="social-3">
						LIn
					</span>
				</div>
			</div>
		</div>
			
		<div class="fullWidth footer--section-blog">
 			<div class="fullWidth--content">
 				<ul>
					<li><h4>Coding</h4></li>
					<li><p>link one</p></li>
					<li><p>link two</p></li>
					<li><p>link three</p></li>
				</ul>
 			</div>
 			<div class="fullWidth--content">
 				<ul>
					<li><h4>Coding</h4></li>
					<li><p>link one</p></li>
					<li><p>link two</p></li>
					<li><p>link three</p></li>
				</ul>
 			</div>
 			<div class="fullWidth--content">
				<ul>
					<li><h4>Coding</h4></li>
					<li><p>link one</p></li>
					<li><p>link two</p></li>
					<li><p>link three</p></li>
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

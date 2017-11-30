@extends('layouts.admin/admin')

@section('title', 'Anastasionico.uk | Dashboard')

@section('content')
	
	<div id="content">
	    <!--breadcrumbs-->
	    <div id="content-header">
	      	<div id="breadcrumb"> 
	      		<a href="/admin/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
	      		<a href="/admin/contact" title="" class="tip-bottom">
	      			Contact
	  			</a>
      		</div>
	      	<h1>
	          Inbox
	        </h1>
	    </div>
	    <!--End-breadcrumbs-->

	    <!--Action boxes-->
	    <div class="container-fluid">


	    	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
				@if(Session::has($msg))

					<div class="alert alert-{{ $msg }} alert-block"> 
  						<a class="close" data-dismiss="alert" href="#">
  							×
			  			</a>
	              		<h4 class="alert-heading">{{ ucfirst($msg) }}</h4>
	          			<p>{!! session($msg) !!}</p>
	          			
	      			</div>

				@endif
			@endforeach

			<hr>
		    
		    <div class="row-fluid">
		      	<div class="span12">
			        <div class="widget-box widget-chat">
				        <div class="widget-title"> <span class="icon"> <i class="icon-comment"></i> </span>
				        </div>
			          	<div class="widget-content nopadding">
			            	<div class="chat-users panel-right2">
				              	<div class="panel-title">
				                	<h5>Messages</h5>
				              	</div>
				              	<div class="panel-content nopadding">
				                  	<ul class="contact-list">
				                  		@foreach($inboxes as $inbox)
				                  			<li>
					                  			<a href="/admin/contact/{{ $inbox->id}}">
					                  				<span>
					                  					<h5>{{ $inbox->name }}</h5>
					                  					<em>{{ $inbox->email }}</em>
					                  					<p>{{ $inbox->created_at->diffForHumans() }}</p>
					                  					@if( $inbox->seen == null )
					                  						<i class="fa fa-envelope" aria-hidden="true"></i>
					                  					@endif
					                  					@if( $inbox->answered == null )
					                  						<span class="badge badge-important">
								                				<i class="fa fa-paper-plane" aria-hidden="true"></i>
								                			</span>	
					                  					@endif
					                  				</span>
					                  			</a>
		                  					</li>
				                  		@endforeach
									</ul>
				              	</div>
			            	</div>

				            <div class="chat-content panel-left2">
				            	@if(!$lastSeen)
				            		<h6>There are no messages yet</h6>
			            		@else
			            		  	<div class="chat-messages" id="chat-messages">
					                	<div id="chat-messages-inner">
					                		<h2>{{ $lastSeen->name }}</h2>
					                		<h4><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; {{ $lastSeen->email }}</h4>
					                		<h5><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp; {{ $lastSeen->created_at}}</h5>
					                		<p>
					                			<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
					                			&nbsp; {{$lastSeen->seen }}
					                		</p>
				                			<p>
				                				@if( $lastSeen->answered == null )
				                					<span class="badge badge-important">
						                				<i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp; Not Answered
													</span>	
												@else
													<i class="fa fa-paper-plane" aria-hidden="true"></i>
													&nbsp; {{$lastSeen->answered }}
			                  					@endif
				                			</p>
				                			<hr>
					                		{{ $lastSeen->message}}
					                	</div>
					              	</div>
					              	<div class="chat-message well">
					              		<form action="/admin/contact/answer" method="post">
                  							{{ csrf_field() }}
                    						<button type="submit" class="btn btn-success">Send</button>
                    						{{ Form::hidden('senderId', "$lastSeen->id") }}
                    						{{ Form::hidden('senderEmail', "$lastSeen->email") }}
	                  						<span class="input-box">
					                			<textarea name="message" class="span12" rows="1">{{ old('message' )}}</textarea>
					                		</span> 
				                		</form>
				                	</div>
			                	@endif
			            	</div>
			          	</div>
			        </div>
		      	</div>
		    </div>
		</div>
	</div>
@endsection


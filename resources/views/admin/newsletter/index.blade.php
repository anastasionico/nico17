	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    			<a href="/admin/newsletter" class="current">NewsLetter</a> 
    			</div>
			    <h1>Mailchimp API</h1>
		  	</div>



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
			
    			<div class="quick-actions_homepage">
      				
				        {{ Form::open([
									'method' => 'GET', 
									'action' => ['NewsLetterController@isSubscribed'],
								]) 
							}}
							{{ csrf_field() }}
							<div class="form-control">
								<input type="email" name="email" placeholder="Check email">	
							</div>

							<input class="" type="submit" name="send" value="Look up">
						{{ Form::close() }}	

				        
					
    			</div>
		    	
		    	<hr>
		    	
		    	<div class="row-fluid">
		    		<div class="span12">
		    			<div class="widget-box">
				          	<div class="widget-title"> <span class="icon"> <i class="icon-align-left"></i>  </span>
					            <h5>Newsletter</h5>
				          	</div>
				          	<div class="widget-content nopadding">
					            <table class="table table-bordered table-striped">
					              	
					              	<thead>
				                		<tr>
				                  			<th>ID</th>
				                  			<th>Email</th>
				                  			<th>Status</th>
						                	<th>Subscription</th>
						                	<th>Action</th>
						                </tr>
				              		</thead>
				              		
				              		<tbody>
				              			@foreach($membersList as $member)
				              				<tr class="odd gradeX">
					                  			<td>{{ $member['id'] }}</td>
					                  			<td>{{ $member['email_address'] }}</td>
					                  			@if($member['status'] === 'subscribed')
					                  				<td style="color:#28B959">
					                  					{{ $member['status'] }}
					                  				</td>
					                  			@else
					                  				<td style="color:#E87009">
					                  					{{ $member['status'] }}
					                  				</td>
					                  			@endif
					                  			<td>{{ $member['timestamp_signup'] }}</td>
												<td>
					                  				<a class="tip deleteItem" href="/admin/newsletter/unsubscribe/{{ $member['email_address'] }}" title="Delete">
		                  								<i class="icon-remove"></i>
	                  								</a> 
												</td>
				                  			</tr>		
				              			@endforeach
				              		</tbody>
			            		</table>
				          	</div>
				        </div>
		    		</div>
	    		</div>
	    		
	    		
	      	</div>

		</div>
	@endsection

	
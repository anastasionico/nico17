	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    			<a href="/admin/blog/supercategory" class="current">Blog Super Category</a> 
    			</div>
			    <h1>Blog Super Category</h1>
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
      				<ul class="quick-actions">
				        <li class="bg_lb"> 
				        	<a href="/admin/blog/supercategory/create"> 
				        		<i class="icon-plus"></i> 
			        			Create Super Category 
		        			</a> 
	        			</li>
					        
		      		</ul>
    			</div>
		    	
		    	<hr>
		    	
		    	<div class="row-fluid">
		    		<div class="span12">
		    			<div class="widget-box">
				          	<div class="widget-title"> <span class="icon"> <i class="icon-align-left"></i>  </span>
					            <h5>Super Category </h5>
				          	</div>
				          	<div class="widget-content nopadding">
					            <table class="table table-bordered table-striped">
					              	
					              	<thead>
				                		<tr>
				                  			<th>Image</th>
				                  			<th>ID</th>
				                  			<th>Name</th>
						                	<th>Excerpt</th>
						                	<th>Created</th>
						                	<th></th>
						                </tr>
				              		</thead>
				              		
				              		<tbody>
				              			@foreach($blogSupercategories as $blogSupercategory)
				              				<tr class="odd gradeX">
					                  			<td style="width: 50px;text-align: center;">
					                  				<img style='max-height: 75px' src='{{ asset("img/blog/$blogSupercategory->img") }}' alt='{{ $blogSupercategory->img }}'>
					                  			</td>
					                  			<td>{{ $blogSupercategory->id }}</td>
					                  			<td>
					                  				<a href="supercategory/{{ $blogSupercategory->id }}"> 
					                  					{{ ucfirst($blogSupercategory->name) }} <i class="fa fa-external-link" aria-hidden="true"></i>
													</a>
				                  				</td>
					                  			<td>{{ $blogSupercategory->excerpt }}</td>
					                  			<td>{{ $blogSupercategory->created_at->diffForHumans() }}</td>
					                  			<td>
					                  				{{-- <a class="tip" href="blogSupercategories/{{ $blogSupercategory->id }}/images" title="Images">
			                  							<i class="icon-picture"></i>
		                  							</a>  --}}
		                  							<a class="tip" href="/admin/blog/supercategory/{{ $blogSupercategory->id }}/edit" title="Edit">
			                  							<i class="icon-pencil"></i>
		                  							</a> 
			                  						{{ Form::open([
		              									'method' => 'DELETE', 
		              									'action' => ['BlogsupercategoryController@destroy' , $blogSupercategory->id],
		              									'style' => 'display:inline-block'
														]) 
													}}
														
															{{ Form::button('<i class="icon-remove"></i>', 
																array(
																	'type' => 'submit', 
																	'style' => 'color:#aaa;border:0;background:transparent;')) 
															}}
													{{ Form::close() }}
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

	
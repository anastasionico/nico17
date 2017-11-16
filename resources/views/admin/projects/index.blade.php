	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    			<a href="/admin/projects/projects" class="current">Projects</a> 
    			</div>
			    <h1>Projects</h1>
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
				        	<a href="/admin/projects/projects/create"> 
				        		<i class="icon-plus"></i> 
			        			Create Projects 
		        			</a> 
	        			</li>
					        
		      		</ul>
    			</div>
		    	
		    	<hr>
		    	
		    	<div class="row-fluid">
		    		<div class="span12">
		    			<div class="widget-box">
				          	<div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
					            <h5>Projects</h5>
				          	</div>
				          	<div class="widget-content nopadding">
					            <table class="table table-bordered table-striped">
					              	
					              	<thead>
				                		<tr>
				                  			<th>Image</th>
				                  			<th>ID</th>
				                  			<th>Name</th>
						                	<th>Slug</th>
						                	<th>Created</th>
						                	<th></th>
						                </tr>
				              		</thead>
				              		
				              		<tbody>
				              			@foreach($projects as $project)
				              				<tr class="odd gradeX">
					                  			<td style="width: 50px;text-align: center;">
					                  				<img style='max-height: 75px' src='{{ asset("img/projects/$project->img") }}' alt='{{ $project->img }}'>
					                  			</td>
					                  			<td>{{ $project->id }}</td>
					                  			<td>
					                  				<a href="{{ $project->cta_link }}" target="_blank"> 
					                  					{{ ucfirst($project->name) }} <i class="fa fa-external-link" aria-hidden="true"></i>
													</a>
				                  				</td>
					                  			<td>
					                  				<a href="/projects/{{ $project->slug }}" target="_blank"> 
					                  					{{ ucfirst($project->slug) }} <i class="fa fa-external-link" aria-hidden="true"></i>
													</a>
					                  			<td>{{ $project->created_at->diffForHumans() }}</td>
					                  			<td>
					                  				<a class="tip" href="projects/{{ $project->id }}/images" title="Images">
			                  							<i class="icon-picture"></i>
		                  							</a> 
					                  				<a class="tip" href="projects/{{ $project->id }}/edit" title="Edit">
			                  							<i class="icon-pencil"></i>
		                  							</a> 
			                  						{{ Form::open([
		              									'method' => 'DELETE', 
		              									'action' => ['ProjectController@destroy' , $project->id],
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

	
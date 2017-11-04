	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/home" title="Go to Home" class="tip-bottom">
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
					                  			<td style="width: 50px">
					                  				<img src="{{ $project->img }}" alt='{{ $project->img }}'>
					                  			</td>
					                  			<td>{{ $project->id }}</td>
					                  			<td>
					                  				<a href="{{ $project->cta_link }}" target="_blank"> 
					                  					{{ ucfirst($project->name) }} <i class="fa fa-external-link" aria-hidden="true"></i>

					                  				</a>
				                  				</td>
					                  			<td>{{ $project->slug }}</td>
					                  			<td>{{ $project->created_at }}</td>
					                  			<td>
					                  				<a class="tip" href="#" title="Edit">
			                  							<i class="icon-pencil"></i>
		                  							</a> 
			                  						<a class="tip" href="#" title="Delete">
		                  								<i class="icon-remove"></i>
		              								</a> 
					                  			</td>
					                  		</tr>		
				              			@endforeach
				              			{{-- <tr class="odd gradeX">
				                  			<td>Trident</td>
				                  			<td>Internet Explorer 4.0</td>
				                  			<td>Win 95+</td>
				                  			<td class="center"> 4</td>
				                  			<td class="center">X</td>
				                		</tr>
				                		<tr class="even gradeC">
				                  			<td>Trident</td>
				                  			<td>	Internet Explorer 5.0</td>
				                  			<td>Win 95+</td>
				                  			<td class="center">5</td>
				                  			<td class="center">C</td>
				                		</tr> --}}
				              		</tbody>
			            		</table>
				          	</div>
				        </div>
		    		</div>
	    		</div>
	    		
	    		
	      	</div>

		</div>
	@endsection

	
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
	      		<a href="/admin/projects/projects/{{$project->id}}/images" class="current">{{ ucfirst($project->name) }}</a> 
				</div>
		    <h1>Add an image for {{ ucfirst($project->name)}}</h1>
	  	</div>

		<div class="container-fluid">
			<div class="row-fluid">
		    	<div class="span12">
		      		<div class="widget-box">
		        		<div class="widget-title"> 
		        			<span class="icon"> <i class="icon-picture"></i> </span>
		          			<h5>Project Image</h5>
		        		</div>
				        
		        		@if(!empty($errors->all()))

			        		<div class="alert alert-error alert-block"> 
			        			<a class="close" data-dismiss="alert" href="#">×</a>
	              				<h4 class="alert-heading">Error!</h4>
	              				<ul>
			              			@foreach ($errors->all() as $message)
			              				<li>
			              					{{$message}}	
			              				</li>
			              			@endforeach		
		              			</ul>
	          				</div>
	      				
			        	@endif

			        	<div class="widget-content nopadding">

				          	<form action="/admin/projects/projects/{{ $project->id }}/images  " method="post" class="form-horizontal"  enctype="multipart/form-data">>

				          		{{ csrf_field() }}
					            <input type="hidden" name="project_id" class="span11" value="{{ $project->id }}" required />

			            		<div class="control-group">
				              		<label class="control-label">Image *</label>
			              			<div class="controls">
			                			<input type="file" name="img" class="span11" placeholder="image" required />
			                			<span class="help-block">File supported .png, .jpeg, .gif</span>
			              			</div>
			            		</div>
				            	
				            	<div class="control-group">
				            	  	<label class="control-label">Alt Text *</label>
				              		<div class="controls">
				                		<input type="text" name="alt" class="span11" placeholder="Alternative text" required />
				                		<span class="help-block">Single or multiple words with at least 5 characters</span>
				              		</div>
				            	</div>

	              				<div class="form-actions">
	            					<button type="submit" class="btn btn-success">Save</button>
	      						</div>

				        	</form>
		        		</div>
			      	</div>
			    </div>
			</div>	
		</div>
	
	</div>
@endsection


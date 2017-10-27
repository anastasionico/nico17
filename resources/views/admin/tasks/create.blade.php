	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/home" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    			<a href="/admin/tasks" class="current">Tasks</a> 
	    			<a href="/admin/tasks/create" class="current">Create</a> 
    			</div>
			    <h1>Create a Tasks</h1>
		  	</div>

			<div class="container-fluid">
				<div class="row-fluid">
			    <div class="span12">
			      <div class="widget-box">
			        <div class="widget-title"> 
			        	<span class="icon"> <i class="icon-check"></i> </span>
			          	<h5>Task Detail</h5>
			        </div>
			        
			        @if(!empty($errors->all()))
			        		
				        <div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
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
			          	<form action="/admin/tasks" method="post" class="form-horizontal">

			          		{{ csrf_field() }}
				            <div class="control-group">
				              <label class="control-label">Description *</label>
				              <div class="controls">
				                <input type="text" name="description" class="span11" placeholder="description" required />
				                <span class="help-block">Paragraph with at least 10 characters</span>
				              </div>
				            </div>
				            <div class="control-group">
				              <label class="control-label">Category *</label>
				              <div class="controls">
				                <input type="text" name="category" class="span11" placeholder="category" required />
				                <span class="help-block">Paragraph with at least 10 characters</span>
				              </div>
				            </div>
				            <div class="control-group">
              					<label class="control-label">Priority *</label>
              					<div class="controls">
                					<select name='priority' required>
					                  	<option value="5">To do Yesterday</option>
					                  	<option value="4">High Priority</option>
					                  	<option value="3">Medium Priority</option>
					                  	<option value="2">Low Priority</option>
					                  	<option value="1">Not Important</option>
									</select>
									<span class="help-block">Choose an option</span>
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

	
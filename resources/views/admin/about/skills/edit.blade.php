	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/home" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    			<a href="/admin/about/skills" class="current">Skills</a> 
	    			<a href="/admin/about/skills/{{ $skill->id}}/edit" class="current">{{ $skill->name}}</a> 
    			</div>
			    <h1>Edit {{$skill->name}}</h1>
		  	</div>

			<div class="container-fluid">
				<div class="row-fluid">
			    <div class="span12">
			      <div class="widget-box">
			        <div class="widget-title"> 
			        	<span class="icon"> <i class="fa fa-wrench" aria-hidden="true"></i> </span>
			          	<h5>Skill Detail</h5>
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
			          	<form action="/admin/about/skills/{{ $skill->id}}" method="post" class="form-horizontal">
			          		{{ method_field('PATCH') }}
			          		{{ csrf_field() }}
				            <div class="control-group">
				              <label class="control-label">Name *</label>
				              <div class="controls">
				                <input type="text" name="name" class="span11" value="{{$skill->name}}" required />
				                <span class="help-block">One word</span>
				              </div>
				            </div>
				            <div class="control-group">
				              <label class="control-label">Value *</label>
				              <div class="controls">
				                <input type="number" name="value" class="span11" value="{{$skill->value}}" required />
				                <span class="help-block">Level of knowledge from 1 to 99</span>
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

	
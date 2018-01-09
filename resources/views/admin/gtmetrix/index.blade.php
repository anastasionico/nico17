@extends('layouts.admin.admin')

@section('title', 'Anastasionico.uk | Dashboard')

@section('content')
	
	<div id="content">

	  	<div id="content-header">
		    <div id="breadcrumb"> 
		    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
		    		<i class="icon-home"></i> Home
	    		</a> 
    			<a href="/admin/gtmetrix" class="current">GTmetrix API</a> 
			</div>
		    <h1>GTmetrix API</h1>
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
		
			<hr>
	    	
	    	<div class="row-fluid">
	    		<div class="span12">
	    			<div class="widget-box">
	          			<div class="widget-title"> <span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
            				<h5>GTmetrix</h5>
	          			</div>
          				<div class="widget-content">
          					<form action="/admin/gtmetrix" method="post" class="form-horizontal">

				          		{{ csrf_field() }}
					            <div class="control-group">
					              <label class="control-label">Url to test *</label>
					              <div class="controls">
					                <input type="text" name="url_to_test" class="span11" placeholder="Url to test" required />
					                <span class="help-block">Insert the url GTmetrix has to test</span>
					              </div>
					            </div>
					            <div class="control-group">
	              					<label class="control-label">Location *</label>
	              					<div class="controls">
	                					<select name='location' class="form-control">
									    	<option value='1'>Vancouver, Canada</option>
									    	<option value='2'>London, UK</option>
									    	<option value='3'>Sydney, Australia</option>
									    	<option value='4'>Dallas, USA</option>
									    	<option value='5'>Mumbai, India</option>
									    	<option value='6'>Sao Paulo, Brazil</option>
									    	<option value='7'>Hong Kong, China</option>
									    </select>
										<span class="help-block">Choose an option</span>
	              					</div>
	            				</div>
	            				<div class="control-group">
	              					<label class="control-label">Browser *</label>
	              					<div class="controls">
	                					<select name='browser' class="form-control">
									    	<option value='1'>Firefox (Desktop)</option>
									    	<option value='3'>Chrome (Desktop)</option>
									    </select>
										<span class="help-block">Choose an option</span>
	              					</div>
	            				</div>
	            				<div class="control-group">
              						<label class="control-label">Enable Adblock</label>
          						  	<div class="controls">
	            						<label>
	          								<div class="radio" id="uniform-undefined">
	          									<span class="checked">
	          										<input type="radio" name="adblock" value="1" @if(old('adblock')) checked @endif>
	      										</span>
	  										</div>
	              							Yes
	          							</label>
	            						<label>
	              							<div class="radio" id="uniform-undefined">
	              								<span>
	              									<input type="radio" name="adblock" value="0" @if(!old('adblock')) checked @endif>
	          									</span>
	      									</div>
	              							No
	          							</label>
	          						</div>
	        					</div>



	            				<div class="form-actions">
	              					<button type="submit" class="btn btn-success">Run Test</button>
	            				</div>
					        </form>
	          			</div>
	        		</div>
	    		</div>
    		</div>
    	</div>
	</div>
@endsection


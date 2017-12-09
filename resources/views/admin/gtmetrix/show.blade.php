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
          					

          					{{dump($results)}}
	          			</div>
	        		</div>
	    		</div>
    		</div>
    	</div>
	</div>
@endsection


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
	          			<div class="widget-title"> 
	          				<span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
	          				<a href="{{$data['url_to_test']}}" target="_blank">
								<h5>
									{{$data['url_to_test']}}
            					</h5>
            				</a>
	          			</div>
          				<div class="widget-content">
          					<h6>Location:</h6>
      						@switch($data['location'])
      							@case(1)
							        Vancouver, Canada
							        @break
						        @case(2)
							        London, UK
							        @break
							    @case(3)
							        Sydney, Australia
							        @break
							    @case(4)
									Dallas, USA	
							        @break
							    @case(5)
									Mumbai, India
							        @break
							    @case(6)
									Sao Paulo, Brazil
							        @break
						   	@endswitch
          				
      						<h6>Browser:</h6>
      						@switch($data['browser'])
      							@case(1)
							        Firefox (Desktop)
							        @break
						        @case(3)
							        Chrome (Desktop)
							        @break
							@endswitch
							
          					<h6>ADblock:</h6>
      						{{ ($data['adblock'] === '0')? 'disabled': 'enabled' }}
          					
	          			</div>
	        		</div>
	    		</div>
    		</div>

    		<div class="row-fluid">
      			<div class="span6">
        			<div class="widget-box">
          				<div class="widget-title"> 
          					<span class="icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
	        				<h5>Performances</h5>
	          			</div>
	      				<div class="widget-content">
							<h6>Pagespeed Score:</h6>
							@switch($results['pagespeed_score'])
								@case($results['pagespeed_score'] < 70)
									@php $color = "progress-danger"; @endphp
									@break; 
								@case($results['pagespeed_score'] < 89)
									@php $color = "progress-warning"; @endphp
									@break; 
								@case($results['pagespeed_score'] > 89)
									@php $color = "progress-success"; @endphp
									@break; 		
							@endswitch
	  						<span class="icon24 icomoon-icon-arrow-up-2 green"></span> 
	  						<span class="pull-right strong">{{$results['pagespeed_score']}}</span>
                			<div class="progress progress-striped {{ $color}}">
                  				<div style="width: {{$results['pagespeed_score']}}%;" class="bar"></div>
                			</div>
      						
	  						<h6>Yslow Score:</h6>
	  						@switch($results['yslow_score'])
								@case($results['yslow_score'] < 70)
									@php $color = "progress-danger"; @endphp
									@break; 
								@case($results['yslow_score'] < 89)
									@php $color = "progress-warning"; @endphp
									@break; 
								@case($results['yslow_score'] > 89)
									@php $color = "progress-success"; @endphp
									@break; 		
							@endswitch
	  						<span class="icon24 icomoon-icon-arrow-up-2 green"></span> 
			  				<span class="pull-right strong">{{$results['yslow_score']}}</span>
			  				<div class="progress progress-striped  {{ $color}}">
                  				<div style="width: {{$results['yslow_score']}}%;" class="bar"></div>
                			</div>
	  						
  						</div>
        			</div>
      			</div>
      			<div class="span6">
        			<div class="widget-box">
          				<div class="widget-title"> 
          					<span class="icon"><i class="fa fa-table" aria-hidden="true"></i></span>
	        				<h5>Page Details</h5>
	          			</div>
	      				<div class="widget-content">
							<h6>Page elements (request):</h6>
	  						{{$results['page_elements']}}

	  						<h6>Fully loaded time:</h6>
	  						{{$results['fully_loaded_time']/1000}} s

	  						<h6>Total page size:</h6>
	       					@if ($results['page_bytes'] >= 1073741824)
        					    {{ number_format($results['page_bytes'] / 1073741824, 2) . ' GB' }}
        					@elseif ($results['page_bytes'] >= 1048576)
        					    {{ number_format($results['page_bytes'] / 1048576, 2) . ' MB' }}
        					@elseif ($results['page_bytes'] >= 1024)
        					    {{ number_format($results['page_bytes'] / 1024, 2) . ' KB' }}
        					@endif

        					<h6>GTmetrix report page:</h6>
	  						<a href="{{$results['report_url']}}" target="_blank">Report</a>
						</div>
        			</div>
      			</div>
    		</div>
    		

    		<div class="row-fluid">
      			<div class="span12">
        			<div class="widget-box">
          				<div class="widget-title"> <span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
	        				<h5>Row data</h5>
	          			</div>
	      				<div class="widget-content">
							{{-- {{dump($test)}} --}}
          					{{dump($results)}}
          					{{dump($resources)}}	
	  					</div>
        			</div>
      			</div>
      		</div>
    	
		</div>
	</div>
@endsection


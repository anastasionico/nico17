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
    			</div>
			    <h1>Skills</h1>
		  	</div>



		  	<div class="container-fluid">

    			<div class="quick-actions_homepage">
      				<ul class="quick-actions">
				        <li class="bg_lb"> 
				        	<a href="/admin/about/skills/create"> 
				        		<i class="icon-plus"></i> 
			        			Create skill 
		        			</a> 
	        			</li>
					        
		      		</ul>
    			</div>
		    	
		    	<hr>
		    	<div class="row-fluid">
		    		<div class="span12">

				        <div class="widget-box">
				          	<div class="widget-title"> 
				          		<span class="icon">
				          			<i class="fa fa-wrench" aria-hidden="true"></i>
								</span>
					            <h5>Skills list</h5>
				          	</div>
				          	<div class="widget-content">
					            <ul class="unstyled">

					            	@foreach($skills as $skill)
					            		<li> 
					            			<span class="icon24 icomoon-icon-arrow-up-2 green"></span> 
				            				{{$skill->name}}
				            				<span class="pull-right strong">
				            					
				            					<a class="tip" href="skills/{{$skill->id}}/edit" title="Edit">
		                  							<i class="icon-pencil"></i>
	                  							</a> 
												
	              								{{ Form::open([
	              									'method' => 'DELETE', 
	              									'route' => ['skills.destroy', $skill->id],
	              									'style' => 'display:inline-block'
													]) 
												}}
													
														{{ Form::button('<i class="icon-remove"></i>', 
															array(
																'type' => 'submit', 
																'style' => 'color:#aaa;border:0;background:transparent;')) 
														}}
													
												{{ Form::close() }}
			            						

													



			            					</span>
				            				<div class="progress progress-striped ">
					                  			<div style="width: {{$skill->value}}%;" class="bar">
					                  				{{$skill->value}}
					                  			</div>
											</div>
					                	</li>
					            	@endforeach
				            	</ul>
				          	</div>
			        	</div>
				        
			      	</div>
				</div>		    	
	      	</div>

		</div>
	@endsection

	
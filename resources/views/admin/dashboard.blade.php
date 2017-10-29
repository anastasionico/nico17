	@extends('layouts.admin/admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">
	    <!--breadcrumbs-->
	    <div id="content-header">
	      <div id="breadcrumb"> <a href="/admin/home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
	    </div>
	    <!--End-breadcrumbs-->

	    <!--Action boxes-->
	    <div class="container-fluid">
	      	<div class="quick-actions_homepage">
	        	<ul class="quick-actions">
		          	<li class="bg_lb span3"> 
			          	<a href="/" target="_blank"> 
	          				<i class="icon-home"></i> 
          					Home
      					</a> 
  					</li>
  					<li class="bg_ly"> 
			          	<a href="/projects"> 
	          				<i class="icon-fullscreen"></i> 
          					Projects
      					</a> 
  					</li>
  					<li class="bg_lo"> 
			          	<a href="/blog"> 
	          				<i class="icon-tint"></i> 
          					Articles
      					</a> 
  					</li>
  					<li class="bg_ls"> 
			          	<a href="/contact"> 
	          				<i class="icon-calendar"></i> 
          					Contacts
      					</a> 
  					</li>
  					<li class="bg_lg"> 
			          	<a href="/detail"> 
	          				<i class="icon-info-sign"></i> 
          					Detail
      					</a> 
  					</li>
  					<li class="bg_lb"> 
  						<a href="/admin/tasks"> 
  							<i class="icon-check-empty"></i> 
  							<span class="label label-important">{{ count($tasksUndone)}}</span> 
  							Pending Tasks
						</a> 
					</li>
					<li class="bg_lh"> 
  						<a href="/admin/about/skills"> 
							<i class="icon-wrench"></i> 
  							Skills
						</a> 
					</li>
  				</ul>
	      </div>
	      <!--End-Action boxes-->    

	      <div class="row-fluid">
	        <div class="span6">
	        	<div class="widget-box">
          			<div class="widget-title"> <span class="icon"><i class="fa fa-hourglass" aria-hidden="true"></i></span>
            			<h5>Current To Do list</h5>
          			</div>
      				<div class="widget-content">
            			<div class="todo">
              				<ul>
                				@foreach($tasksUndone as $taskUndone)
              						<li class="clearfix">
	                  					<div class="txt"> 
	                  						{{ $taskUndone->description }}
	                  						<span class="by label label-default">
	                  							{{ $taskUndone->category }}
              								</span> 
              								@switch($taskUndone->priority)
											    @case(1)
													<span class="date badge">
														Not Important
		                  							</span> 
											        @break
											    @case(2)
													<span class="date badge badge-inverse">
			                  							Low Priority	
		                  							</span> 
											        @break

											    @case(3)
											        <span class="date badge badge-info">
											        	Medium Priority
										        	</span> 
											        @break

											    @case(4)
											        <span class="date badge badge-warning">
											        	High Priority
										        	</span> 
											        @break
											    @case(5)
											        <span class="date badge badge-important">
											        	To do Yesterday
										        	</span> 
											        @break
											@endswitch
	                  					</div>
	                  					<div class="pull-right"> 
	                  						@php
	                  							$setDoneUrl = "/admin/tasks/setDone/". $taskUndone->id;
	                  							$editUrl = "/admin/tasks/edit/". $taskUndone->id;
	                  							$deleteUrl = "/admin/tasks/delete/". $taskUndone->id;
	                  						@endphp
	                  						<a class="tip" href="{{ $setDoneUrl}}" title="Set as Done">
	                  							<i class="icon-check"></i>
                  							</a> 
                  							<a class="tip" href="{{ $editUrl}}" title="Edit">
	                  							<i class="icon-pencil"></i>
                  							</a> 
	                  						<a class="tip" href="{{ $deleteUrl }}" title="Delete">
                  								<i class="icon-remove"></i>
              								</a> 
	                  					</div>
	                				</li>
              					@endforeach		                				
              				</ul>
            			</div>
          			</div>
        		</div>
	        </div>
	        <div class="span6">
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

	
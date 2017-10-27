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
    			</div>
			    <h1>Tasks</h1>
		  	</div>



		  	<div class="container-fluid">

    			<div class="quick-actions_homepage">
      				<ul class="quick-actions">
				        <li class="bg_lb"> 
				        	<a href="/admin/tasks/create"> 
				        		<i class="icon-plus"></i> 
			        			Create Task 
		        			</a> 
	        			</li>
					        
		      		</ul>
    			</div>
		    	
		    	<hr>
		    	
		    	<div class="row-fluid">
		    		<div class="span12">
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
	    		</div>
	    		
	    		<div class="row-fluid">
		    		<div class="span12">
    			        <div class="widget-box">
  							<div class="widget-title"> <span class="icon"> <i class="icon-check"></i> </span>
    							<h5>Tasks Finished</h5>
  							</div>
  							<div class="widget-content nopadding updates">
							
								@foreach($tasksDone as $taskDone)
		              				<div class="new-update clearfix"><i class="icon-ok-sign"></i>
										<div class="update-done">
											<strong>{{$taskDone->description}}</strong>
											<span>{{$taskDone->category}}</span> 
										</div>
	  									<div class="update-date">
											<span class="update-day">{{$taskDone->updated_at->format('d')}}</span>{{$taskDone->updated_at->format('M')}}
										</div>
	    							</div>
  								@endforeach
							
							</div>
						</div>
    				</div>
				</div>
	      	</div>

		</div>
	@endsection

	
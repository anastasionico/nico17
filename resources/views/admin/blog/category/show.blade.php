	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    			<a href="/admin/blog/supercategory">Blog Super Category</a> 
	    			<a href="/admin/blog/supercategory/{{ $blogcategory->supercategory->id }}">{{ $blogcategory->supercategory->name }}'s Posts</a> 
	    			<a href="/admin/blog/{{ $blogcategory->supercategory->id }}/category/{{ $blogcategory->id }}" class="current">{{ ucfirst($blogcategory->name) }}'s Details</a> 
    			</div>
			    <h1>{{ ucfirst($blogcategory->name) }}'s category posts </h1>
			    
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
				        	<a href="/admin/blog/{{ $blogcategory->supercategory->id }}/{{ $blogcategory->id }}/post/create"> 
				        		<i class="icon-plus"></i> 
			        			Create Post
			        			<br>
			        			<small>under {{ $blogcategory->name }} </small>
		        			</a> 
	        			</li>
					</ul>
    			</div> 
		    	
		    	<hr>
		    	

		    	<div class="row-fluid">
		    		<div class="span12">
		    			<div class="widget-box">
				          	<div class="widget-title"> <span class="icon"> <i class="icon-align-left"></i>  </span>
					            <h5> Category </h5>
				          	</div>
				          	<div class="widget-content nopadding">
					            <table class="table table-bordered table-striped">
					              	
					              	<thead>
				                		<tr>
				                  			<th>Image</th>
				                  			<th>ID</th>
				                  			<th>Name</th>
				                  			<th>Slug</th>
						                	<th>Excerpt</th>
						                	<th>Created</th>
						                	<th>Status</th>
						                	<th>Order</th>
						                	<th></th>
						                </tr>
				              		</thead>
				              		
				              		<tbody>
				              			@foreach($blogcategory->posts as $post)
											<tr class="odd gradeX">
					                  			<td style="max-width: 50px;text-align: center;">
					                  				<img style='max-height: 75px' src='{{ asset("img/blog/$post->img") }}' alt=''>
					                  			</td>
				                  				<td>{{ $post->id }}</td>
				                  				<td>
					                  				@if($post->cta_link)
						                  				<a href="{{ $post->cta_link }}" target="_blank"> 
						                  					{{ ucfirst($post->name) }} <i class="fa fa-external-link" aria-hidden="true"></i>
														</a>
													@else
														{{ ucfirst($post->name) }}
					                  				@endif
				                  				</td>
				                  				<td>
					                  				<a href="/blog/{{ $post->slug }}" target="_blank"> 
					                  					{{ ucfirst($post->slug) }} <i class="fa fa-link" aria-hidden="true"></i>
													</a>
												</td>
												
					                  			<td>{{ $post->excerpt }}</td>
					                  			<td>{{ $post->created_at->diffForHumans() }}</td>
					                  			<td>{{ $post->status }}</td>
					                  			<td>{{ $post->order }}</td>
					                  			{{-- <td style="min-width: 50px;text-align: center;">
					                  				<a class="tip" href="blogSupercategories/{{ $post->id }}/images" title="Images">
			                  							<i class="icon-picture"></i>
		                  							</a> 
		                  							<a class="tip" href="/admin/blog/{{ $blogcategory->id }}/category/{{ $post->id }}/edit" title="Edit">
			                  							<i class="icon-pencil"></i>
		                  							</a> 
		                  							{{ Form::open([
		              									'method' => 'DELETE', 
		              									'action' => array('BlogcategoryController@destroy', $post->category_id, $post->id),
		              									'style' => 'display:inline-block'
														]) 
													}}
														
															{{ Form::button('<i class="icon-remove"></i>', 
																array(
																	'type' => 'submit', 
																	'style' => 'color:#aaa;border:0;background:transparent;')) 
															}}
													{{ Form::close() }}
												</td> --}}
					                  		</tr>		
				              			@endforeach
				              		</tbody>
			            		</table>
				          	</div>
				        </div>
		    		</div>
	    		</div>
	    		
	    		
	      	</div>

		</div>
	@endsection

	
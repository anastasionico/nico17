	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

		  	<div id="content-header">
			    <div id="breadcrumb"> 
			    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
			    		<i class="icon-home"></i> Home
		    		</a> 
	    		</div>
			    <h1>Posts Index</h1>
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
				
		    	<div class="row-fluid">
		    		<div class="span12">
		    			<div class="widget-box">
				          	<div class="widget-title"> <span class="icon"> <i class="icon-align-left"></i>  </span>
					            <h5> Post List </h5>
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
						                	<th>Length</th>
						                	<th>Category</th>
						                	<th></th>
						                </tr>
				              		</thead>
				              		
				              		<tbody>
				              			@foreach($posts as $post)
											<tr class="odd gradeX">
					                  			<td style="max-width: 50px;text-align: center;">
					                  				<img style='max-height: 75px' src='{{ asset("img/blog/$post->img") }}' alt=''>
					                  			</td>
				                  				<td>{{ $post->id }}</td>
				                  				<td>
					                  				@if($post->cta_link)
						                  				<a href="{{ $post->cta_link }}" target="_blank"> 
						                  					{{ ucfirst($post->name) }} 
						                  					<i class="fa fa-external-link" aria-hidden="true"></i>
						                  				</a>
													@else
														{{ ucfirst($post->name) }}
					                  				@endif
					                  				@switch($post->status)
				                  					    @case(0)
													    	<span class="label label-important">Empty Content</span>
													        @break
													    @case(1)
													    	<span class="label label-important">Graphic Missing</span>
													        @break
														@case(2)
														<span class="label label-warning">Review Needed</span>
													        @break
													    @case(3)
													    	<span class="label label-success">
													    	Published
													    	{{ $post->published_at->formatLocalized('%d %b %Y')}}
													    	</span>
													        @break
													@endswitch
				                  				</td>
				                  				<td>
					                  				<a href="/blog/{{ $post->slug }}" target="_blank"> 
					                  					{{ ucfirst($post->slug) }} <i class="fa fa-link" aria-hidden="true"></i>
													</a>
												</td>
												<td>{{ $post->excerpt }}</td>
					                  			<td>{{ $post->created_at->diffForHumans() }}</td>
				                  				<td>{{ $post->minutes_to_read }} min </td>
				                  				<td>
				                  					{{ ucfirst($post->category->supercategory->name) }}
				                  					({{ ucfirst($post->category->name) }})
			                  					</td>
					                  			<td style="text-align: center;">
					                  				{{-- <a class="tip" href="blogsupercat/{{ $post->id }}/images" title="Images">
			                  							<i class="icon-picture"></i>
		                  							</a>  --}}
													<a class="tip" href="/admin/blog/{{ $post->category->supercategory->id }}/{{ $post->category->id }}/post/{{ $post->id }}/edit" title="Edit">
			                  							<i class="icon icon-pencil fa-lg"></i>
		                  							</a> 
													{{ Form::open([
		              									'method' => 'DELETE', 
		              									'action' => array('BlogpostController@destroy', $post->category->supercategory->id, $post->category->id, $post->id),
		              									'style' => 'display:inline-block'
														]) 
													}}
														{{ Form::button('<i class="icon-remove"></i>', 
															array(
																'type' => 'submit', 
																'class' => 'deleteItem',
																'style' => 'color:#aaa;border:0;background:transparent;')) 
														}}
													{{ Form::close() }}
												</td>
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

	
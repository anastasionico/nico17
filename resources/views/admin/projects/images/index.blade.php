	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

	@section('content')
		<div id="content">

	  	<div id="content-header">
		    <div id="breadcrumb"> 
		    	<a href="/admin/home" title="Go to Home" class="tip-bottom">
		    		<i class="icon-home"></i> Home
	    		</a> 
    			<a href="/admin/projects/projects" class="current">Projects</a> 
          <a href="/admin/projects/projects/{{$project->id}}/images" class="current">{{ ucfirst($project->name) }}</a> 
  			</div>
		    <h1>{{ ucfirst($project->name)}}s' image</h1>
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
			        	<a href="#"> 
			        		<i class="icon-plus"></i> 
		        			Add Image
	        			</a> 
        			</li>
				        
	      		</ul>
  			</div>
	    	
	    	<hr>
	    	
	    	<div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
                <h5>Gallery</h5>
              </div>
              <div class="widget-content">
                <ul class="thumbnails">
                  
                  @foreach($images as $image)
                    <li class="span2" style="border: 1px solid #35a"> 
                      <a> 
                        <img src="img/projects/{{$image->img}}" alt="{{$image->alt}}"> 
                      </a>
                      <div class="actions"> 
                        <a title="" class="" href="#">
                          <i class="icon-pencil"></i>
                        </a> 
                        <a class="lightbox_trigger" href="img/gallery/imgbox3.jpg">
                          <i class="icon-search"></i>
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

		</div>
	@endsection

	
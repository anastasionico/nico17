@extends('layouts.admin.admin')

@section('title', 'Anastasionico.uk | Dashboard')

@section('head')
  {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/languages/go.min.js"></script> --}}
@endsection

@section('content')
	<div id="content">

	  	<div id="content-header">
		    <div id="breadcrumb"> 
		    	<a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
		    		<i class="icon-home"></i> Home
	    		</a> 
    			<a href="/admin/projects/projects" class="current">Projects</a> 
    			<a href="/admin/projects/projects/{{ $project->id }}/edit" class="current">{{ ucfirst($project->name) }}</a> 
  			</div>
		    <h1>
          <a href="/projects/{{ $project->slug }}" target="_blank">
            <i class="fa fa-link" aria-hidden="true"></i>
          </a>
          Edit {{ $project->name }}
        </h1>
      </div>

		<div class="container-fluid">
			<div class="row-fluid">
		    <div class="span12">
		      <div class="widget-box">
		        <div class="widget-title"> 
		        	<span class="icon"> <i class="icon-briefcase"></i> </span>
	          	<h5>Project Detail -
                <a href="/projects/{{ $project->slug }}" target="_blank"> 
                  {{ ucfirst($project->slug) }} <i class="fa fa-link" aria-hidden="true"></i>
                </a>
              </h5>
              
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
	          	{{-- <form action="/admin/projects/projects" method="post" class="form-horizontal" enctype="multipart/form-data">> --}}
              {{ Form::open([
                    'action'  => ['ProjectController@update', $project->id],
                    'method'  => 'PUT',
                    'files'   => true,
                    'class'   => 'form-horizontal',
              ]) }}

              


            		{{ csrf_field() }}
		            <div class="control-group">
		              <label class="control-label">Name *</label>
		              <div class="controls">
		                <input type="text" name="name" class="span11" placeholder="name" id="fieldName" value="{{ $project->name }}" required />
		                <span class="help-block">Single or multiple words with at least 5 characters</span>
		              </div>
		            </div>
                <div class="control-group">
                  <label class="control-label">
                    Slug *
                  </label>
                  <div class="controls">
                    <input type="text" name="slug" class="span11" placeholder="slug" id="fieldSlug" value="{{ $project->slug }}" required />
                    <span class="help-block">Single or multiple words with at least 5 characters has to have dash in between the words</span>
                    
                  </div>
                </div>
		            <div class="control-group">
		              <label class="control-label">Excerpt *</label>
		              <div class="controls">
                    <textarea name="excerpt" id='excerpt'  class="span11" placeholder="content">{{ $project->excerpt }}</textarea>
                    <span class="help-block">
                      One or multiple sentences with at least 50 characters.
                      <span id='excerptSpan'></span>
                    </span>   
		              </div>
		            </div>
                <div class="control-group">
		              <label class="control-label">Content *</label>
		              <div class="controls">
		                <textarea id="ckContent" name="content" class="span11" placeholder="small description">
                      {!! $project->content !!}
                    </textarea>
		                <span class="help-block">Single or multiple words with at least 50 characters</span>
		              </div>
		            </div>
		            <div class="control-group">
                      <label class="control-label">Image</label>
                      <div class="controls">
                        <div class="uploader" id="uniform-undefined">
                          <input type="file" name="img" class="span11" style="opacity: 0;" value="{{ old('img')}}"/>
                          <span class="filename">No file selected</span>
                          <span class="action">Choose File</span>
                        </div>
                        <span class="help-block">File supported: jpeg, png, jpg, gif, svg</span>
                      </div>
                    </div>
                <div class="control-group">
                  <label class="control-label">Keywords *</label>
                  <div class="controls">
                    <input type="text" name="keywords" class="span11" placeholder="Keywords" value="{{ $project->keywords }}" required />
                    <span class="help-block">Multiple words, advised about 8</span>
                  </div>
                </div>
		            <div class="control-group">
		              <label class="control-label">CTA</label>
		              <div class="controls">
		                <input type="text" name="cta_link" class="span11" placeholder="http://www.anastasionico.uk" value="{{ $project->cta_link }}" />
		                <span class="help-block">Valid URL, need the protocol: http, https, ftp, etc</span>
		              </div>
		            </div>
                <div class="control-group">
        					<label class="control-label">S.E.O.</label>
    						  <div class="controls">
      						  <label>
    								  <div class="radio" id="uniform-undefined">
    									  <span class="checked">
                          <input type="radio" name="seo" value="1" @if( $project->seo ) checked @endif >
                        </span>
								      </div>
        							Yes
  							    </label>
      						  <label>
        							<div class="radio" id="uniform-undefined">
        								<span><input type="radio" name="seo" value="0" @if( !$project->seo ) checked @endif ></span>
									    </div>
        							No
    							  </label>
    							  <span class="help-block">Boolean, Have I done seo for this project?</span>
      					  </div>
    					  </div>
    					  <div class="control-group">
        					<label class="control-label">Ecommerce</label>
    						  <div class="controls">
        						<label>
      								<div class="radio" id="uniform-undefined">
      									<span class="checked">
                          <input type="radio" name="ecommerce" value="1" @if( $project->ecommerce ) checked @endif>
  										  </span>
									    </div>
          							Yes
      							</label>
        						<label>
          							<div class="radio" id="uniform-undefined">
          								<span>
          									<input type="radio" name="ecommerce" value="0" @if( !$project->ecommerce ) checked @endif>
      									</span>
  									</div>
          							No
      							</label>
      							<span class="help-block">Boolean, Does this project include an E-commerce?</span>
      					  </div>
    					  </div>
    					  <div class="control-group">
        				  <label class="control-label">Responsive</label>
    						  <div class="controls">
        						<label>
      								<div class="radio" id="uniform-undefined">
      									<span class="checked">
      										<input type="radio" name="responsive" value="1" @if( $project->responsive) checked @endif>
  										  </span>
								      </div>
        							Yes
      							</label>
        						<label>
        							<div class="radio" id="uniform-undefined">
        								<span>
        									<input type="radio" name="responsive" value="0" @if( !$project->responsive) checked @endif>
      									</span>
  						  			</div>
        							No
    				  			</label>
      							<span class="help-block">Boolean, Is this project responsive on mobile and tablet?</span>
        					</div>
    					  </div>
    					  <div class="control-group">
        					<label class="control-label">Social Marketing</label>
      						<div class="controls">
        						<label>
      								<div class="radio" id="uniform-undefined">
      									<span class="checked">
      										<input type="radio" name="social_marketing" value="1" @if($project->social_marketing ) checked @endif>
  										  </span>
									    </div>
    							    Yes
      							</label>
        						<label>
        							<div class="radio" id="uniform-undefined">
        								<span>
        									<input type="radio" name="social_marketing" value="0" @if(!$project->social_marketing ) checked @endif>
      									</span>
  									  </div>
      						  	No
      							</label>
      							<span class="help-block">Boolean, Have I done marketing on social for this project?</span>
        					</div>
      					</div>
    					  <div class="control-group">
        					<label class="control-label">Host & Support</label>
        						<div class="controls">
          						<label>
        								<div class="radio" id="uniform-undefined">
        									<span class="checked">
        										<input type="radio" name="host_support" value="1" @if($project->host_support) checked @endif>
    										</span>
										</div>
      							Yes
    							</label>
      						<label>
      							<div class="radio" id="uniform-undefined">
      								<span>
      									<input type="radio" name="host_support" value="0" @if(!$project->host_support) checked @endif>
    									</span>
  									</div>
      							No
    							</label>
    							<span class="help-block">Boolean, Do I provide support before and after?</span>
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
  
  <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        allowedContent: true,
        extraPlugins : 'syntaxhighlight'
      };
    </script>
    <script>
      CKEDITOR.plugins.addExternal( 'syntaxhighlight', '/vendor/plugins/syntaxhighlight/', 'plugin.js' );
      CKEDITOR.replace('ckContent', options);
    </script>


  <script type="text/javascript">
    var fieldName = document.querySelector('#fieldName');
    
    fieldName.addEventListener("keyup", createSlug);
    fieldName.addEventListener("focusout", createSlug);

    function createSlug(){
      var fieldSlug = document.querySelector('#fieldSlug');
      fieldSlug.value = fieldName.value.replace(/\s+/g, '-').toLowerCase(); 
    }

    var excerpt = document.querySelector('#excerpt');
    excerpt.onkeyup = function(){
      var excerptLengthSpan = document.querySelector('#excerptSpan');
      if(excerpt.value.length < 50){
        excerptLengthSpan.innerHTML = "<b>" + (50 - excerpt.value.length) + " missing </b>";
      }else{
        excerptLengthSpan.innerHTML = "<b> Enough characters </b>";
      }
    }
  </script>
@endsection
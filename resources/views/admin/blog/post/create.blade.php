	@extends('layouts.admin.admin')

	@section('title', 'Anastasionico.uk | Dashboard')

  @section('head')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  @endsection

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
		    <h1>
          Create a new post
        </h1>
      </div>

			<div class="container-fluid">
				<div class="row-fluid">
			    <div class="span12">
			      <div class="widget-box">
			        <div class="widget-title"> 
			        	<span class="icon"><i class="icon-align-left"></i> </span>
			          	<h5>Insert post detail</h5>
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
		          	<form action="/admin/blog/{{ $blogcategory->supercategory->id }}/{{ $blogcategory->id }}/post" method="post" class="form-horizontal" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    
                  {{ Form::hidden('category_id', "$blogcategory->id") }}
			            <div class="control-group">
			              <label class="control-label">Name *</label>
			              <div class="controls">
			                <input type="text" name="name" class="span11" placeholder="name" id="fieldName" value="{{ old('name') }}" required />
			                <span class="help-block">Single or multiple words with at least 5 characters</span>
			              </div>
			            </div>
                  <div class="control-group">
                    <label class="control-label">Slug *</label>
                    <div class="controls">
                      <input type="text" name="slug" class="span11" placeholder="slug" id="fieldSlug" value="{{ old('slug') }}" required />
                      <span class="help-block">Single or multiple words with at least 5 characters has to have dash in between the words</span>
                    </div>
                  </div>
			            <div class="control-group">
			              <label class="control-label">Excerpt *</label>
			              <div class="controls">
                      <textarea name="excerpt" id='excerpt' class="span11" placeholder="content">{{ old('excerpt' )}}</textarea>
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
                        {!! old('content') !!}
                      </textarea>
                      <span class="help-block">
                        One or multiple sentences with at least 50 characters
                        <span id='ckContentSpan'></span>
                      </span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Status</label>
                    <div class="controls">
                      <select >
                        <option>Empty Content</option>
                        <option>Graphic Missing</option>
                        <option>Review Needed</option>
                        <option>Published</option>
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Order</label>
                    <div class="controls">
                      <input type="text" name="number" id="number" value='{{ $blogcategory->posts->count()+1 }}'/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Image *</label>
                    <div class="controls">
                      <div class="uploader" id="uniform-undefined">
                        <input type="file" name="img" class="span11" style="opacity: 0;" value="{{ old('img')}}" required />
                        <span class="filename">No file selected</span>
                        <span class="action">Choose File</span>
                      </div>
                      <span class="help-block">File supported: jpeg, png, jpg, gif, svg</span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Minutes to Read</label>
                    <div class="controls">
                      <input type="text" name="number" id="number"/>
                    </div>
                  </div>  
				          <div class="control-group">
                      <label class="control-label">CTA</label>
                      <div class="controls">
                        <input type="text" name="cta_link" class="span11" placeholder="http://www.anastasionico.uk" value="{{ old('cta_link')}}" />
                        <span class="help-block">Valid URL, need the protocol: http, https, ftp, etc</span>
                      </div>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/languages/go.min.js"></script>
    {{-- <script>hljs.initHighlightingOnLoad();</script> --}}
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        allowedContent: true,
      };
    </script>
    <script>
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
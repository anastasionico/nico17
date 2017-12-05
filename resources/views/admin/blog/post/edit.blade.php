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
    			<a href="/admin/blog/supercategory">Blog Super Categories</a> 
          <a href="/admin/blog/supercategory/{{ $post->category->supercategory->id }}">{{ $post->category->supercategory->name }}'s Posts</a> 
          <a href="/admin/blog/{{ $post->category->supercategory->id }}/category/{{ $post->category->id }}">{{ ucfirst($post->category->name) }}</a> 
          <a href="/admin/blog/{{ $post->category->supercategory->id }}/{{ $post->category->id }}/post/{{ $post->id }}/edit" class="current">{{ ucfirst($post->name) }}</a> 
        </div>
		    <h1>
          <a href="/blog/{{ $post->slug }}" target="_blank">
            <i class="fa fa-link" aria-hidden="true"></i>
          </a>
          Edit {{ ucfirst($post->name) }}
        </h1>
	  	</div>

		<div class="container-fluid">
			<div class="row-fluid">
		    <div class="span12">
		      <div class="widget-box">
		        <div class="widget-title"> 
		        	<span class="icon"> <i class="icon-align-left"></i>  </span>
		          	<h5>Category Detail</h5>
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
	          	{{ Form::open([
                    'action' => array('BlogpostController@update', $post->category->supercategory->id, $post->category->id, $post->id),
                    'method'  => 'PUT',
                    'files'   => true,
                    'class'   => 'form-horizontal',
              ]) }}
            		{{ csrf_field() }}
                {{ Form::hidden('category_id', "$post->category_id") }}
                  <div class="control-group">
                    <label class="control-label">Name *</label>
                    <div class="controls">
                      <input type="text" name="name" class="span11" placeholder="name" id="fieldName" value="{{ $post->name }}" required />
                      <span class="help-block">Single or multiple words with at least 5 characters</span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Slug *</label>
                    <div class="controls">
                      <input type="text" name="slug" class="span11" placeholder="slug" id="fieldSlug" value="{{ $post->slug }}" required />
                      <span class="help-block">Single or multiple words with at least 5 characters has to have dash in between the words</span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Excerpt *</label>
                    <div class="controls">
                      <textarea name="excerpt" id='excerpt' class="span11" placeholder="content">{{ $post->excerpt }}</textarea>
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
                        {{ $post->content }}
                      </textarea>
                      <span class="help-block">
                        One or multiple sentences with at least 50 characters
                        <span id='ckContentSpan'></span>
                      </span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Status *</label>
                    <div class="controls">
                      <select name='status' id='status' onchange="setPublishedData()">
                        <option value="0" @php echo ($post->status == 0)? "selected" : ""; @endphp >Empty Content</option>
                        <option value="1" @php echo ($post->status == 1)? "selected" : ""; @endphp >Graphic Missing</option>
                        <option value="2" @php echo ($post->status == 2)? "selected" : ""; @endphp >Review Needed</option>
                        <option value="3" @php echo ($post->status == 3)? "selected" : ""; @endphp >Published</option>
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Order *</label>
                    <div class="controls">
                      <input type="text" name="order" id="number" value='{{ $post->order }}'/>
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
                    <label class="control-label">Minutes to Read</label>
                    <div class="controls">
                      <input type="range" name="minutes_to_read" id="minutes_to_read" value='{{ $post->minutes_to_read }}' min="1">
                      <span id='minutes_to_readSpan'><b>{{ $post->minutes_to_read }}</b></span>
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
                        <input type="text" name="cta_link" class="span11" placeholder="http://www.anastasionico.uk" value="{{ $post->cta_link }}" />
                        <span class="help-block">Valid URL, need the protocol: http, https, ftp, etc</span>
                      </div>
                  </div>
                  <div class="control-group">
                    <label for="normal" class="control-label">Published at</label>
                    <div class="controls">
                      <input type="text" id="mask-date" class="span8 mask text" name="published_at" value="{{ $post->published_at }}">
                      <span class="help-block ">yyyy-mm-dd</span> 
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
      var excerpt = document.querySelector('#excerpt');
      var excerptLengthSpan = document.querySelector('#excerptSpan');
      var ckContent = document.querySelector('#ckContent');
      var ckContentLengthSpan = document.querySelector('#ckContentSpan');
      var minutes_to_read = document.querySelector('#minutes_to_read');
      var minutes_to_readSpan = document.querySelector('#minutes_to_readSpan');
      

      // creation of the slug depending of the field name
      fieldName.addEventListener("keyup", createSlug);
      fieldName.addEventListener("focusout", createSlug);
      function createSlug(){
        var fieldSlug = document.querySelector('#fieldSlug');
        fieldSlug.value = fieldName.value.replace(/\s+/g, '-').toLowerCase(); 
      }
      
      // this function make appear the number of character of the excerpt field
      excerpt.onkeyup = function(){
        
        if(excerpt.value.length < 50){
          excerptLengthSpan.innerHTML = "<b>" + (50 - excerpt.value.length) + " missing </b>";
        }else{
          excerptLengthSpan.innerHTML = "<b> Enough characters </b>";
        }
      }
      
      // this function make appear the value of the minute to read field      
      minutes_to_read.onchange = function (){
        minutes_to_readSpan.innerHTML = "<b>" + minutes_to_read.value + "</b>";
      }
      
      // this function set the publish date according to the status of the post
      function setPublishedData() {
        var status = document.querySelector('#status');
        var statusValue = status.options[status.selectedIndex].value
        if(statusValue == 3){
          var maskDate = document.querySelector('#mask-date');
          maskDate.value = new Date(Date.now()).toLocaleDateString('zh-Hans-CN');
        }
      }
      
    </script>
  @endsection
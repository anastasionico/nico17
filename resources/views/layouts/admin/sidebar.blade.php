<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      	<li class="active">
        	<a href="/admin/dashboard"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> 
      	</li>
      	<li> 
      		<a href="/admin/tasks">
            <i class="icon icon-check"></i> 
            <span>Tasks</span>
            <span class="label label-success">
              <i class="fa fa-flag-checkered" aria-hidden="true"></i>
            </span>    
          </a> 
  		</li>
      	<li class="submenu"> 
	        <a href="#">
          		<i class="icon icon-user"></i> 
          		<span>About</span>
          </a>
        	<ul>
          		<li><a href="#">Text</a></li>
          		<li><a href="#">Phases</a></li>
          		<li>
                <a href="/admin/about/skills">
                  Skills
                  <span class="label label-success">
                    <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  </span>    
                </a>
              </li>
        	</ul>
      	</li>
      	<li class="submenu"> 
	        <a href="#">
          		<i class="icon icon-briefcase"></i> 
          		<span>Project</span>
          </a>
        	<ul>
              <li>
                <a href="/admin/projects/projects">
                  Projects
                  <span class="label label-success">
                    <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  </span>              
                </a>
              </li>
          		<li><a href="#">Home Text</a></li>
          		<li><a href="#">Project Page Text</a></li>
          </ul>
      	</li>
      	<li class="submenu"> 
	        <a href="#">
    		    <i class="icon-align-left"></i> 
        		<span>Blog</span>
          </a>
        	<ul>
          		<li>
                <a href="/admin/blog/supercategory">
                  Manage
                  <span class="label label-success">
                    <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  </span>              
                </a>
                
              </li>
              <li><a href="#">Home Text</a></li>
          		<li><a href="#">Blog Page Text</a></li>
          		<li>
                <a href="/admin/blog/postlist">Posts list
                <span class="label label-success">
                    <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  </span>              
                </a>
              </li>
        	</ul>
      	</li>
      	<li> 
      		<a href="#">
      			<i class="fa fa-bullhorn" aria-hidden="true"></i>
        		<span>Testimonials</span>
    		  </a> 
  		  </li>
      	<li> 
      		<a href="/admin/contact">
      			<i class="fa fa-envelope" aria-hidden="true"></i>
        		<span>Messages</span>
            <span class="label label-success">
              <i class="fa fa-flag-checkered" aria-hidden="true"></i>
            </span>              
               
            {{-- <span class="label label-important">
              <i class="fa fa-hourglass-o" aria-hidden="true"></i>
            </span> --}}
    		</a> 
  		</li>
    	<li> 
      		<a href="#">
      			<i class="fa fa-share-square" aria-hidden="true"></i>
        		<span>Social</span>
    		</a> 	
    	</li>
      <li> 
        <a href="/admin/gtmetrix">
          <i class="fa fa-search" aria-hidden="true"></i>
          <span>GTmetrix API</span>
        </a> 
      </li>  
      <a href="/admin/tasks">
        <li class="content"> <span>Tasks completed</span>
          <div class="progress progress-mini active progress-striped">
             
              @if ($tasksCount['total'] > 0) 
                @php            
                  $tasksPercentage = ($tasksCount['undone'] / $tasksCount['total'])  * 100; 
                  $tasksPercentage = round($tasksPercentage);
                @endphp
              @else
                @php
                  $tasksPercentage = 0;
                @endphp
              @endif
              
            
            <div style="width: {{ $tasksPercentage }}%;" class="bar"></div>
          </div>
          <span class="percent">{{ $tasksPercentage }}%</span>
          <div class="stat">{{ $tasksCount['undone'] }} done out of  {{ $tasksCount['total'] }}</div>
        </li>
      </a>
      <a href="/admin/blog/postlist">
        <li class="content"> <span>Blog post outstanding</span>
          @php
            $blogpostTotal = $blogpostsPublished->count() + $blogpostsOutstanding->count();
          @endphp
          
          @if ($blogpostTotal > 0) 
            @php            
              $blogpostPercentage = ($blogpostsOutstanding->count() / $blogpostTotal)  * 100; 
              $blogpostPercentage = round($blogpostPercentage);
            @endphp
          @else
            @php
              $blogpostPercentage = 0;
            @endphp
          @endif

          <div class="progress progress-mini active progress-striped">
            <div style="width: {{ $blogpostPercentage }}%;" class="bar"></div>
          </div>
          <span class="percent">{{ $blogpostPercentage }}%</span>
          <div class="stat">{{$blogpostsOutstanding->count()}} uncompleted out of {{$blogpostTotal}}</div>
        </li>  
      </a>
      
      
    </ul>
</div>
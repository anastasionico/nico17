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
                  <span class="label label-important">
                    <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                  </span>
                </a>
                
              </li>
              <li><a href="#">Home Text</a></li>
          		<li><a href="#">Blog Page Text</a></li>
          		<li><a href="#">Posts list</a></li>
        	</ul>
      	</li>
      	<li> 
      		<a href="#">
      			<i class="fa fa-bullhorn" aria-hidden="true"></i>
        		<span>Testimonials</span>
    		</a> 
  		</li>
      	<li> 
      		<a href="#">
      			<i class="fa fa-envelope" aria-hidden="true"></i>
        		<span>Messages</span>
    		</a> 
  		</li>
      	<li> 
      		<a href="#">
      			<i class="fa fa-share-square" aria-hidden="true"></i>
        		<span>Social</span>
    		</a> 	
    	</li>
      <li class="content"> <span>Tasks to Complete</span>
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
      <li class="content"> <span>Time</span>
        <?php
          $datetime1 = new DateTime('2017-12-01');
          $datetime2 = new DateTime();
          $interval = $datetime1->diff($datetime2);
          $interval->format('%R%a days');
          $numeric_interval = $interval->format('%a ');
          // $percent = $interval->format('%a') *
        ?>
        <div class="progress progress-mini active progress-striped">
          <div style="width: {{ $interval->format('%a') }}%;" class="bar"></div>
        </div>
        <span class="percent">{{ $interval->format('%R %a') }}</span>
        <div class="stat">Days</div>
      </li>
    </ul>
</div>
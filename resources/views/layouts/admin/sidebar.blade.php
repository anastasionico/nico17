<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      	<li class="active">
        	<a href="/admin/dashboard"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> 
      	</li>
      	<li> 
      		<a href="/admin/tasks"><i class="icon icon-check"></i> <span>Tasks</span></a> 
  		</li>
      	<li class="submenu"> 
	        <a href="#">
          		<i class="icon icon-user"></i> 
          		<span>About</span>
          		<span class="label label-important">3</span>
        	</a>
        	<ul>
          		<li><a href="#">Text</a></li>
          		<li><a href="#">Phases</a></li>
          		<li><a href="#">Skills</a></li>
        	</ul>
      	</li>
      	<li class="submenu"> 
	        <a href="#">
          		<i class="icon icon-briefcase"></i> 
          		<span>Project</span>
          		<span class="label label-important">3</span>
    		</a>
        	<ul>
          		<li><a href="#">Home Text</a></li>
          		<li><a href="#">Project Page Text</a></li>
          		<li><a href="#">Projects list</a></li>
    		</ul>
      	</li>
      	<li class="submenu"> 
	        <a href="#">
    		    <i class="fa fa-file-text" aria-hidden="true"></i>
          		<span>Blog</span>
          		<span class="label label-important">3</span>
    		</a>
        	<ul>
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
          <div style="width: 0%;" class="bar"></div>
        </div>
        <span class="percent">0%</span>
        <div class="stat">0 / 10</div>
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
        <span class="percent">{{ $interval->format('%R%a days') }}</span>
        <div class="stat">&nbsp;</div>
      </li>
    </ul>
</div>

<div id="header" style="">
	<h4 >
  		<a style="color: #35a;font-size: 1rem;" href="dashboard.html">Anastasio<span style="color:white;">nico.uk</span></a>
	</h4>
</div>

<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
  	<li  class="dropdown" id="profile-messages" >
  		<a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
  			<i class="icon icon-user"></i>  
				<span class="text">
          {{ ucfirst(Auth::user()->name)}}
        </span><b class="caret"></b>
			</a>
    </li>
  	<li>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
    </li>
    <li>
      <a title="" href="/" target="_blank">
        <i class="icon icon-eye-open"></i> <span class="text">FrontEnd</span>
      </a>
    </li>
    @if(count($blogpostsOutstanding) > 0)
      <li class="dropdown" id="menu-messages">
        <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
          <span style="color: #da542e">
            <i class="icon-align-left"></i>
            <span class="label label-important">{{ count($blogpostsOutstanding) }}</span>
          </span>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          @foreach($blogpostsOutstanding as $blogpostOutstanding)
            <li>
              <a title="" href="/admin/blog/{{$blogpostOutstanding->category->supercategory->id}}/{{$blogpostOutstanding->category->id}}/post/{{$blogpostOutstanding->id}}/edit">
                <i class="icon-align-left"></i> 
                  {{ ucfirst($blogpostOutstanding->name) }}                    
              </a>
            </li>  
          @endforeach
        </ul>
      </li> 
    @endif  
    @if(count($inboxOutstanding) > 0)
      <li>
        <a href="/admin/contact">
          <span style="color: #da542e">
            <i class="fa fa-envelope"></i>
            <span class="label label-important">{{ count($inboxOutstanding) }}</span>
          </span>
        </a>
      </li>
    @endif
  </ul>
</div>

{{-- <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> --}}
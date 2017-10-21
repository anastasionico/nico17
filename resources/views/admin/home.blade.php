@extends('layouts.admin')

@section('menuPrimary')
	<div class="col-sm-2" style="background-color: #236">
		<ul class="nav flex-column">
		  	<li class="nav-item">
			    <a class="nav-link active" href="#">Home</a>
			</li>
	  		<li class="nav-item">
		    	<a class="nav-link disabled" href="#">Task list</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link disabled" href="#">About</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link disabled" href="#">Projects</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link disabled" href="#">Testimonials</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link disabled" href="#">Blog</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link disabled" href="#">Social</a>
		  	</li>
		  	<li class="nav-item">
			    <a class="nav-link disabled" href="#">Contact & Social</a>
		  	</li>
		</ul>
	</div>	
@endsection

@section('content')
	<div class="col-sm-10" style="background-color: #125">
		<h1>This is the content</h1>
		
	</div>
	
@endsection
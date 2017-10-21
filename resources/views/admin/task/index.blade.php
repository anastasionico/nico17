@extends('layouts.admin')

@section('premenu')
@endsection

@section('jumbotron')
	<div class="jumbotron jumbotron-fluid text-center bg-light text-dark">
	  	<div class="container">
	    	<h1 class="display-3">Tasks</h1>
	    	<p class="lead">Manage the tasks of the website.</p>
	  	</div>
	</div>
@endsection

@section('submenu')
	<a href="#" class="my-2 btn btn-primary">Create new task</a>	
@endsection


@section('content')
	
	<section>
		<table class="table table-hover table-inverse table-responsive">
		  	<thead>
		    	<tr>
		      		<th>Tasks</th>
		      		<th>Category</th>
		      		<th>Priority</th>
		      		<th>Actions</th>
		    	</tr>
		  	</thead>
		  	<tbody>
		    	<tr>
		      		<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
		      		<td>Otto</td>
		      		<td>@mdo</td>
					<td>
						<div class="btn-group" role="group" aria-label="Basic example">
  							<a href="#" class="btn btn-info">Details</a>
  							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</td>
		    	</tr>
	    		<tr>
		      		<td>Jacob</td>
		      		<td>Thornton</td>
		      		<td>@fat</td>
		      		<td>
						<div class="btn-group" role="group" aria-label="Basic example">
  							<a href="#" class="btn btn-info">Details</a>
  							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</td>
		    	</tr>

		  	</tbody>
		</table>
	</section>
		
	
	
@endsection

@section('footer')
@endsection


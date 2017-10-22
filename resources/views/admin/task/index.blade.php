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
		      		<td>Watch Laracast tutorials and start creating tasks in php</td>
		      		<td>backend functionality</td>
		      		<td>1</td>
		      		<td>
						<div class="btn-group" role="group" aria-label="Basic example">
  							<a href="#" class="btn btn-info">Details</a>
  							<a href="#" class="btn btn-danger">Delete</a>
						</div>
					</td>
		    	</tr>
		    	<tr>
		      		<td>Fix hero content align of h1</td>
		      		<td>backend functionality</td>
		      		<td>10</td>
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


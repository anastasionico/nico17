@extends('layouts.master')

@section('hero')
	<div class="hero--section">
		
		<div class="hero--section-content">
			<h1>Laravel Promo Post</h1>
		</div>
		
	</div>
@endsection

@section('work')

	<section class="pt-15 pb-5 Nmt-10 bg-white c-blue detail--page skewed">	
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h1>Laravel</h1>
					
					<hr class="border-blue my-1">

					<em class="my-1  d-block">{{date("d-m-Y")}}</em>

					<p>
						The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

						However, if you are not using Homestead, you will need to make sure your server meets the following requirements:
					</p>
					
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content detail--page-index">
					<ul class="">
						<li><a href='#'>one</a></li>
						<li>
						 	<ul>
								<li><a href='#'>one</a></li>
								<li><a href='#'>one</a></li>
								<li><a href='#'>one</a></li> 		
						 	</ul>
						</li>
						<li><a href='#'>one</a></li>
						<li><a href='#'>one</a></li>
						<li><a href='#'>one</a></li>
					</ul>
					<hr class="border-blue my-1">
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.		
					</p>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<img class='clickable' src="img/blog/london.jpg">	
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		
		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content clickable">
					<script src="https://gist.github.com/xfbs/1188092.js"></script>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content alert alert-danger">
					This is a Danger Alert 
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content alert alert-warning">
					This is a Warning Alert 
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content alert alert-success">
					This is a success Alert 
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content alert alert-primary">
					This is a primary Alert 
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content alert alert-info">
					This is a info Alert 
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<img class='clickable' src="img/blog/hatfield.jpg">	
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<table>
						<tr>
							<th>Lorem</th>
							<th>ipsum</th>
							<th>sit amet</th>
						</tr>
						<tr>
							<td>consectetur adipisicing elit</td>
							<td>sed do eiusmod</td>
							<td>tempor incididunt ut</td>
						</tr>
						<tr>
							<td>labore et</td>
							<td>dolore magna aliqua</td>
							<td>Ut enim ad minim veniam</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		
		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content">
					<form>
						<div class="form-control">
							<label>Insert your comment here</label>
							<textarea rows="1"></textarea>
						</div>
						<input class="btn" type="submit" name="COMMENT" value="COMMENT">
					</form>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		

		<div class="oneThird" >
			<div class="oneThird--big">
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
				<div class="oneThird--big--content commentPosts">
					<b>Nico Anastasio</b>
					<em class="clearfix">
						<small>
							{{ date('d-m-Y')}}
						</small>
					</em>
					<p>
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<hr>
				</div>
			</div>

			<div class="oneThird--small">&nbsp;</div>
		</div>		



	</section>
	
@endsection



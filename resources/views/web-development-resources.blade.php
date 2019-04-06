@extends('layouts.master')

@section('title', 'anastasionico.uk | Resources for Web Developer and Web Designer')
@section('description', 'A list of the books, product, services and resources to help you begin, grow and scale your skills in Web Development!')
@section('keywords', 'anastasionico, tools, books, products, guides, make website, web designer, web developer, ')



@section('hero')
	<div class="hero--section ">
		
		<div class="hero--section-content">
			<h1>Resources </h1>
			<br>
			<h2>for Web Development</h2>
		</div>
		
		<div class="hero--section-foreground">
			<pre>
				<code>
					Learn to code
						Become a master
					Improve your skills in PHP and other fields of web development.
					Land in your dream job
				</code>
			</pre>
		</div>
		
	</div>
@endsection

@section('homeAbout')
	<section class="about--section bg-white c-blue">
		<div class="oneThird">
			<div class="oneThird--big">
				<div class="oneThird--big--content ">
					<h2>The tools you need to succeed ...</h2>
					<br>
					<h4>... at every level</h4>
					<br>
					
					<p>Welcome to the <b>Resources section</b> of anastasionico.uk</p>
					<br>
					
					<p>This is a list of the tools, applications and websites I firmly suggest for <b>improving your skills in web development</b>, especially in the field of PHP and back-end.</p>
					<br>
					
					<p>Before digging into the resources I know and trust.</p>
					<br>
					
					<p>An important disclosure:</p>
					<br>

					<i>Several of the links below are products that I made or are affiliate links, which means that if you choose to make a purchase, I will earn a commission.</i>
					<br><br>
					<i>This commission comes at <b>no additional cost to you.</b></i>
					<br><br>
					<i>Please understand that I recommend them because I truly believe they are useful (surely they have been very helpful to me and my career), not because of the small commissions I make if you decide to buy them.</i>
					<br><br>
					<i>Please DO NOT SPEND any money on these products unless you feel you need them or that they will assist you to achieve your goals.</i>
					<br><br>
					<br>
					<small>
						<em>
							Also, for whatever reason you landed here, Join the 
							<a href="https://www.facebook.com/anastasionico.uk/" target="_blank" >
								community to get other resources for free.
								<i class="fab fa-facebook"></i>
							</a>
						</em>	
					</small>
					<br><br>
				</div>
			</div>
			<div class="oneThird--small">&nbsp;</div>
		</div>		
		
 	</section>
@endsection


@section('work')
	<section class="work--section bg-blue c-white pt-5 pb-2">	
		<div class="skewReverse">
			<div class="oneThird" >
				<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<h3>Books That Will Teach You</h3>
					
						<p>I am an avid reader,</p>
						<br>
						<p>I realized that reading books allows me to <b>pick the brains</b> of people who are better than me,</p>
						<br>
						<p>The result is to exploit their experiences and <b>gain time to get to the same point where they are</b>.</p>
						<br>

						<p>For this reason, I started this web page by listing the books before any other kind of resources.</p>
						<br>

						<p>Below you will see a complete list of books that are suitable for different skill levels.</p>
						<br>

					
						<hr class="border-white">
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>		
			
			@php
				$books = [
					"1" => [
						"img" => "https://images-na.ssl-images-amazon.com/images/I/516kv5hpwuL._SX373_BO1,204,203,200_.jpg",
						"name" => "Modern PHP: New Features and Good Practices",
						"description" => "From the creator of PHP The Right Way, the popular initiative that encourages PHP best practices.
											You’ll learn best practices for application architecture and planning, databases, security, testing, debugging, and deployment.
						 					If you have a basic understanding of PHP and want to bolster your skills, this is your book",
						"author" => "Josh Lockhart",
						"link" => "https://amzn.to/2PnRdXj",
						"linkDesc" => "Learn More",
					],
					"2" => [
						"img" => "https://images-na.ssl-images-amazon.com/images/I/51NG-ZskTBL._SX348_BO1,204,203,200_.jpg",
						"name" => "PHP Objects, Patterns, And Practice",
						"description" => "The last edition of the book has been fully updated for PHP 7, PEAR has been replaced with Composer, and new material on PHP standards. It provides a solid grounding for objects, it builds on this foundation to instill core principles of software design",
						"author" => "Matt Zandstra",
						"link" => "https://amzn.to/2NxGZl8",
						"linkDesc" => "Learn More",
					],
					"3" => [
						"img" => "https://images-na.ssl-images-amazon.com/images/I/41ugbIjzETL._SX328_BO1,204,203,200_.jpg",
						"name" => "PHP 7 Zend Certification Study Guide",
						"description" => "Improve your programming knowledge and become Zend Certified. Zend Certification is an industry recognized standard for PHP engineers.  It is very difficult to pass the examination without extensive preparation.  Unlike other books on PHP, this book is very focused on reaching industry standards",
						"author" => "Andrew Beak",
						"link" => "https://amzn.to/2NwzPOn",
						"linkDesc" => "Learn More",
					],
					"4" => [
						"img" => "https://images-na.ssl-images-amazon.com/images/I/61DDZ%2B3AYDL._SX404_BO1,204,203,200_.jpg",
						"name" => "SQL Queries for Mere Mortals",
						"description" => "SQL Queries for Mere Mortals® has earned worldwide praise as the clearest, simplest tutorial on writing effective SQL queries. The authors have updated this hands-on classic to reflect new SQL standards and database applications and teach valuable new techniques",
						"author" => "John L. Viescas",
						"link" => "https://amzn.to/2yquPFr",
						"linkDesc" => "Learn More",
					],
					"5" => [
						"img" => "https://images-eu.ssl-images-amazon.com/images/I/41hfgiovchL.jpg",
						"name" => "PHP Programming Basics",
						"description" => "PHP is a widely-used open source general-purpose scripting language. It iѕ еаѕу tо lеаrn аnd with its last version among the most powerful programming language available for the web",
						"author" => "Nico Anastasio",
						"link" => "https://www.amazon.co.uk/dp/B07PBJCYGW",
						"linkDesc" => "Learn More",
					],
					"6" => [
						"img" => "https://images-eu.ssl-images-amazon.com/images/I/51N3Hfc4ArL.jpg",
						"name" => "The state of PHP 7.3 in 2019",
						"description" => "Since the advent of PHP 7 there have been dozens of improvements to the language.
							Like every December in recent years the central team that develops PHP gives us new features that if you fully understand will make our work days less stressful and above all more productive. From web developer to web developer, this is the collection and in-depth explanation of all the new features in PHP 7.3",
						"author" => "Nico Anastasio",
						"link" => "https://amzn.to/2PpbxeS",
						"linkDesc" => "Learn More",
					],
					"7" => [
						"img" => "https://images-eu.ssl-images-amazon.com/images/I/515NuiXN7wL.jpg",
						"name" => "The complete guide to OOP",
						"description" => "Learning object-oriented-programming is one if not the most valuable skill a web developer can learn. There are places, like London that are so competitive that you must have OOP among your abilities in order to get a job as a PHP Developer.It is a very big step forward to understand and being able to apply the principles but the amount of reward later in your career is going to be huge",
						"author" => "Nico Anastasio",
						"link" => "https://amzn.to/2C5Yhn7",
						"linkDesc" => "Learn More",
					],
					"8" => [
						"img" => "https://images-eu.ssl-images-amazon.com/images/I/41kqmRpQMbL.jpg",
						"name" => "The Definitive Guide to your next PHP framework",
						"description" => "If you have enough experience in web development, you have bumped into someone asking what is the best PHP framework.

							Nowadays there is a really wide choice in this matter.
							With new frameworks published almost on daily basis, it is 
							very difficult to keep up.

							This guide provides comprehensive explanations about 24 of the most popular frameworks available",
						"author" => "Nico Anastasio",
						"link" => "https://amzn.to/2PnkfWX",
						"linkDesc" => "Learn More",
					]
				];
				$booksIncrement = 0;
			@endphp			
			@foreach($books as $book)
				<div class="oneThird" >
					@php
						$booksIncrement++
					@endphp		
					@if( $booksIncrement %2 == 0 )
						<div class="oneThird--small">&nbsp;</div>
					@endif

					<div class="oneThird--big">
						<div class="oneThird--big--content">
							<div class="card">
								<div class="card--image" style="background-image:url({{ $book['img']}})"></div>
								<div class="card--caption">
									<h4>{{ $book['name']}}</h4>
									<p>{{ $book['description']}}</p>
									<em>Author: {{ $book['author']}}</em>
									<a href="{{ $book['link']}}" class="btn">{{ $book['linkDesc']}}</a>
								</div>	
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>	
	</section>
@endsection

@section('homeTestimonial')
	<section class="testimonial--section bg-white c-blue">	
	</section>
@endsection


@section('subscribe')
	{{-- Subscribe Section --}}
	<div class="sectionCenter py-5 bg-azure c-white">
		<div class="sectionCenter--content newsLetter clearfix p-3">
			<img class="newsLetter-image" src="/img/book-email-review.jpg" alt="get the weekly book's review">	
			<h3>
				Get my reviews of must-read books that will increase your skills.
			</h3>
			{{ Form::open([
					'method' => 'POST', 
					'action' => ['NewsLetterController@subscribe'],
					'class' => '',
				]) 
			}}
				{{ csrf_field() }}
				
				
				<div class="form-control ">
					<label>Enter your email address...</label>
					<input type="email" name="email" onfocusin="centerFieldEmail(this)" class="newsLetter-input">	
				</div>
				
				<input class="btn btn-cta" type="submit" name="send" value="I'm in">
			{{ Form::close() }}	
		</div>
	</div>
@endsection

@section('blog')
	<section class="blog--section skewed bg-blue c-white pt-5">
		<div class="skewReverse">
			<div class="oneThird" >
				<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<h3>Other resources from the net</h3>
						<p>This is the <b>information age</b>,</p>
						<br>
						<p>I'm sure you've heard this phrase over and over again.</p>
						<br>
						<p>And it's absolutely true, it takes less than two clicks to <b>get all the data you need</b> on all the topics you're interested in</p>
						<br>
						<p>Below you will find solutions from the web that will allow you to bring your <b>skills to the next level</b></p>
						<br>
					
						<hr class="border-white">
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>		
			
			@php
				$solutions = [
					"1" => [
						"img" => "https://i0.wp.com/phpmagazine.net/wp-content/uploads/2015/06/IMG_1952.jpg?fit=1033%2C483",
						"name" => "php.net",
							"description" => "the official PHP manual, where you will find all the useful information on migration, practical code and best practices",
						"author" => "Type: Documentation Online",
						"link" => "https://www.php.net/",
						"linkDesc" => "Learn More",
					],
					"2" => [
						"img" => "https://upload.wikimedia.org/wikipedia/en/a/a3/Treehouse%27s_logo_%28Jan_2015%29.png",
						"name" => "Teamtreehouse",
							"description" => "Learn web design, coding and much more with Treehouse. You can learn at your own pace and become job ready within months.",
						"author" => "Type: Web Platfrom",
						"link" => "http://treehouse.7eer.net/c/1374240/294479/3944",
						"linkDesc" => "Learn More",
					],
					"3" => [
						"img" => "http://www.usefulsites.in/wp-content/uploads/2013/11/w3school.jpg",
						"name" => "w3schools",
							"description" => "W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and more",
						"author" => "Type: Online Tutorials",
						"link" => "https://www.w3schools.com/",
						"linkDesc" => "Learn More",
					],
					"4" => [
						"img" => "https://madewithnetwork.ams3.cdn.digitaloceanspaces.com//spatie-space-production/1021/sRy3sWY2PYNchjfwqF2Y.png",
						"name" => "Laracasts",
							"description" => "It's kinda like Netflix for your Career",
						"author" => "Type: Online Tutorials",
						"link" => "https://laracasts.com/",
						"linkDesc" => "Learn More",
					],
					"5" => [
						"img" => "https://www.webhostingdir.co.uk/wp-content/uploads/2015/01/Bluehost-coupon.png",
						"name" => "BlueHost",
						"description" => "Bluehost is one of the largest website hosting providers and powers millions of websites. secure and reliable hosting services",
						"author" => "Type: Web Hosting ",
						"link" => "https://www.bluehost.com/track/anastasionico/",
						"linkDesc" => "Learn More",
					],
					"6" => [
						"img" => "https://github.githubassets.com/images/modules/open_graph/github-mark.png",
						"name" => "GitHub",
						"description" => "GitHub brings together the world's largest community of developers to discover, share, and build better software. From open source projects to private team",
						"author" => "Type: hosting service for version control using Git",
						"link" => "https://github.com",
						"linkDesc" => "Learn More",
					],
					"7" => [
						"img" => "https://pbs.twimg.com/media/C9N1UJPVoAEVHeL.jpg:large",
						"name" => "Sublime Text",
						"description" => "Sublime Text is a text editor for code, markup and prose. It provides slick user interface, extraordinary features and performance",
						"author" => "Type: cross-platform source code editor",
						"link" => "https://www.sublimetext.com/",
						"linkDesc" => "Learn More",
					],
					"8" => [
						"img" => "https://i1.wp.com/www.techcoffees.com/wp-content/uploads/2018/02/bootstrap-wallpaper.png?ssl=1",
						"name" => "Bootstrap",
						"description" => "Bootstrap is a free and open-source front-end web framework. It contains HTML and CSS-based design templates for typography, forms, buttons, navigation and more",
						"author" => "Type: front-end framework",
						"link" => "https://getbootstrap.com",
						"linkDesc" => "Learn More",
					],
				];
				$solutionsIncrement = 0;
			@endphp			
			@foreach($solutions as $solution)
				<div class="oneThird" >
					@php
						$solutionsIncrement++
					@endphp		
					@if( $solutionsIncrement %2 == 0 )
						<div class="oneThird--small">&nbsp;</div>
					@endif

					<div class="oneThird--big">
						<div class="oneThird--big--content">
							<div class="card">
								<div class="card--image" style="background-image:url({{ $solution['img']}})"></div>
								<div class="card--caption">
									<div class="card--caption-CatnDate clearfix">
										<b></b>	
										<em></em>
										<span class="card--caption-CatnDate-minutesToRead-bg" style="display: none;">
					 						<span class="0-minutes_to_read card--caption-CatnDate-minutesToRead-fg"></span>
					 						<small><b></small>
										</span>	
									</div>
									<h4>{{ $solution['name']}}</h4>
									<p>{{ $solution['description']}}</p>
									<em>{{ $solution['author']}}</em>
									<a href="{{ $solution['link']}}" class="btn">{{ $solution['linkDesc']}}</a>
								</div>	
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>	
	</section>
@endsection

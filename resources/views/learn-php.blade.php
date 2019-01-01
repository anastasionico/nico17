@extends('layouts.master')

@section('title', 'anastasionico.uk | Learn PHP and Web Development')
@section('description', 'Subscribe to my blog to be always up to date about PHP and Web Development')
@section('keywords', 'php', 'blog', 'learn php', 'learn web development', 'become a web developer')

@php
	$ip = $_SERVER['REMOTE_ADDR'];
	$ip = '2.31.135.100';
	$visitorLocation = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
@endphp

@section('hero')
	<div class="hero--section ">
		
		<div class="hero--section-content">
			<h2>
				Never been so many web developer in <span>{{ $visitorLocation->region }}</span>
			</h2>
			<br>
			<h4>It is time to beat you competition</h4>
		</div>
	</div>
@endsection

@section('homeAbout')
	<section class="about--section bg-white c-white">
		<div class="sectionCenter--content newsLetter clearfix p-3">
			<img class="newsLetter-image" src="/img/book-email-review.jpg" alt="get the weekly book's review">	
			<p>
				Get <b>free reviews</b> of the best books you need to read in 2019 to win your <b>next job</b>
			</p>
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
	</section>
@endsection

@section('subscribe')
	
	<section class="sectionCenter py-5 bg-white c-blue ">
		<div class="skewReverse">
			<div class="oneThird">
				<div class="oneThird--big">
					<div class="oneThird--big--content ">
						<h3>Why subscribe?</h3>
						<p>Web development is <b>rapidly evolving</b>.</p>
						<p>If you don't keep up with current technology you will be considered dinosaur pretty soon.</p>
						<br><br><br>

						<h3>What do I get?</h3>
						<p>There are over 50 <b>blog post</b> and other developers from around the work registered to my Facebook page,
						You can get advice and learn from me and others.</p>
						<br><br><br>

						<h3>How much does it cost?</h3>
						<p><b>Nothing</b>, just one click above and you will get free reviews in which I revied some of the best books for web developers (beginner AND expert), plus you'll get notified every time a <b>new post</b> will be published.</p>
						<br><br><br>

						<h3>I don't like your content, Can I unsubscribe?</h3>
						<p>The purpose of content I create is to <b>help people improve their skill</b> fast, leveraging my years of experience as a Web Developer,
						If you think they are not valuable, each on my email has and will always have an unsubscribe button and, of course, there will be no fee on doing that.</p>
						<br>
					</div>
				</div>
				<div class="oneThird--small">&nbsp;</div>
			</div>		
		</div>
	</section>
@endsection

@section('blog')
	<section class="blog--section bg-blue c-white skewed  ">
		<div class="skewReverse pb-5 pt-1">
			<div class="sectionCenter--content newsLetter clearfix p-3">
			<p>
				Discover the best books for <b>web developers</b> in circulation for free
			</p>
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

	</section>
@endsection
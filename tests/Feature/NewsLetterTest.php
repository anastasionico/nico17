<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Newsletter;
use App\Http\Controllers\NewsLetterController;

class NewsLetterTest extends TestCase
{
    use RefreshDatabase;

  	/** @test */
  	public function getSubscribers()
  	{
  		// given an admin and an email
	 	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
	    $email = 'anastasionico@gmail.com';

  		// when the admin visit the page admin/newsletter/getmembers
  		// then he has to see the email of the subscriber
  		$this->get("admin/newsletter")
    		->assertStatus(200)
    		->assertSee($email);
  	}

  	
}

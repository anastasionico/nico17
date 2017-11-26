<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_see_all_messages_in_inbox()
    {
    	// Given an admin and several messages
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
  		$messageOne = factory('App\Contact')->create(['email'=>'one@mail.com', 		'seen' => '2017-11-26 15:30:00']);
  		$messageTwo = factory('App\Contact')->create(['email'=>'two@mail.com', 		'seen' => '2017-11-26 15:30:00']);
  		$messageThree = factory('App\Contact')->create(['email'=>'three@mail.com', 	'seen' => '2017-11-26 15:30:00' , 'message' => 'this is a message three']);
  		$messageFour = factory('App\Contact')->create(['email'=>'four@mail.com']);
  		$messageFive = factory('App\Contact')->create(['email'=>'five@mail.com']);
  		// When the admin visit /admin/contact page
  		// Then he will see the text of the first message not seen and the name of the sender of all the others
  		$this->get('/admin/contact')
  			->assertSee($messageOne->email)
  			->assertSee($messageTwo->email)
  			->assertSee($messageThree->email)
  			->assertSee($messageFour->message)
  			->assertSee($messageFive->email);
  			
    	
    }
}

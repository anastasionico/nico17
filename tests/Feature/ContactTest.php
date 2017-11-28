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

    /** @test */
    public function an_admin_can_see_a_single_message_at_a_time()
    {
      // given an admin and a message
      $this->withoutExceptionHandling();
      $this->be(factory('App\User')->create());
      $messageOne = factory('App\Contact')->create();

      // when the admin hit the admin/contact/{id} of the message 
      // then the message become seen and the message is seen in the page
      $this->get("/admin/contact/$messageOne->id")
        ->assertSee($messageOne->message);
      $this->assertDatabaseHas('contacts', [
        'seen' => date('Y-m-d H:i:s') 
      ]);
    }

    /** @test */
    public function a_visitor_can_send_a_message()
    {
      // given a visitor
      $user = factory('App\User')->create();
      // when the visitor sent a form request via the contact form
      $message = [
        "name" => "This is my name",
        "message" => "Laravel provides an easy method of protecting your application from cross-site request forgeries. First, a random token is placed in your user's session",
        "email" => "anastasionico@gmail.com"
      ];
      $this->post('/admin/contact', $message);
      // then the message has to be saved into the database and the email seen in the contact page on the backend
      $this->assertDatabaseHas('contacts',[
        "name" => "This is my name",
        "message" => "Laravel provides an easy method of protecting your application from cross-site request forgeries. First, a random token is placed in your user's session",
        "email" => "anastasionico@gmail.com"
      ]);
    }

}

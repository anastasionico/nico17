<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class TaskTest extends TestCase
{
    use RefreshDatabase;

	/** @test */    
	public function admin_task_exists()
	{
		$user = factory('App\User')->create();

        $response = $this->actingAs($user)
                         ->withSession(['name' => 'sess'])
                         ->get('/admin/tasks');

		$response->assertStatus(200);
	}

	/** @test */
	public function admin_can_see_task_form_task_index()
	{
		
		$user = factory('App\User')->create();
		$task = factory('App\Task'::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['name' => 'sess'])
                         ->get('/admin/tasks');
		
		$response->assertSee($task->description);
  

	}
		


























  //   /** @test */
  //   public function admin_can_see_task_form_task_index()
  //   {
  //       //	given that the  admin visit the admin/tasks/index
  //       $response = $this->get('/admin/tasks/');

		// //	when a task is in the database
		// $tasks = factory("\App\Task" , 1)->create();
  //       //	then the admin have to be able to see it
        
  //       $response->assertSee($tasks->category);
  //   }
}

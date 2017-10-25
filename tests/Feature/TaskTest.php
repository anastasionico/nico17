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
                        ->get('/admin/tasks')
						->assertStatus(200);
	}

	/** @test */
	public function admin_can_see_tasks_from_task_index()
	{
		
		$user = $this->be(factory('App\User')->create());
		$task = factory('App\Task')->create();



        $response = $this->get('/admin/tasks')
						->assertSee($task->description);
  	}

  	/** @test */
	public function admin_can_see_finished_tasks_from_index_page()
	{
		$user = $this->be(factory('App\User')->create());
		$tasks = factory('App\Task')->create(['done' => 1]);

		$response = $this->get('admin/tasks')
						->assertSee($tasks->description);
	}		


	/** @test */
	public function admin_can_create_tasks(){

		$this->withoutExceptionHandling();
		// given and admin
		$this->be( $user = factory('App\User')->create());

		// where the admin creates a task and send the request to task/store
		$task = factory('App\Task')->make();
		$this->post('admin/tasks', $task->toArray());
		
		// the new task as to appear in the database
		// the new task has to have done as 0
		
		$response =  $this->assertDatabaseHas('tasks', [
       					 'description' => $task->description
    				])->assertEquals($task->done, 0);

		// work on the method taskController@store
		
	}





















}

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

	}

	/** @test */
	public function an_admin_car_set_a_task_as_done(){
		// given an authenticate user and a task
		$this->withoutExceptionHandling();
		$this->be($user = factory('App\User')->create());
		$task = factory('App\Task')->create();
		
		// when he set a task as completed
		$task->done = 1;
		$this->get('/admin/tasks/'. $task->id . '/setDone', $task->toArray());
		
		// then the task must have the done field as 0
		$this->assertEquals($task->done, 1);
	}


	/** @test */
	public function an_admin_can_delete_a_task(){
		//given an authenticate user and a task
		$this->withoutExceptionHandling();
		$this->be( $user = factory("App\User")->create());
		$task = factory('App\Task')->create();
		
		//when the user wants to delete a task completely
		$this->get('/admin/tasks/'. $task->id . '/delete');
		
		// the task must disappear from the database
		$this->assertDatabaseMissing('tasks', [
        	'id' => $task->id
    	]);
	}
}
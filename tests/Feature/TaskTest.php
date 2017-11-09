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
		$this->withoutExceptionHandling();
		$this->be( $user = factory('App\User')->create());
        $response = $this->get('/admin/tasks')
						->assertStatus(200);
	}

	/** @test */
	public function admin_can_see_tasks_from_task_index()
	{
		
		$this->be($user = factory('App\User')->create());
		$task = factory('App\Task')->create();

        $response = $this->get('/admin/tasks')
						->assertSee($task->description);
  	}

  	/** @test */
	public function admin_can_see_finished_tasks_from_index_page()
	{
		$this->be($user = factory('App\User')->create());
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
		$this->get('/admin/tasks/setDone/'. $task->id , $task->toArray());
		
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
		$response =$this->get('/admin/tasks/delete/'. $task->id);
		$this->assertDatabaseMissing('tasks', [
        					'id' => $task->id
    					]);
	}

	/** @test */
	public function an_admin_can_see_the_edit_task_page(){
		$this->withoutExceptionHandling();
		// given an user and a task
		$this->be( $user = factory('App\User')->create());
		$task = factory('App\Task')->create();

		// when the user goes to the update page, then he has to see the admin/edit page
		$this->get('/admin/tasks/edit/'. $task->id)
			->assertSee("Edit $task->description");
	}

	/** @test */
	public function an_admin_can_update_a_task(){
		
		$this->withoutExceptionHandling();
		// given a user and a task
		$this->be(factory('App\User')->create());
		$task = factory('App\Task')->create();

		// when the user sent a request with some new data, then the database has to be changed
		$taskNew['description'] = 'This is a new description';
		$taskNew['category'] = 'This is a new cat';
		$this->post('/admin/tasks/update/' . $task->id, $taskNew);

		$this->assertDatabaseHas('tasks',[
				'description' => $taskNew['description'],
			]);

	}
}	
	    
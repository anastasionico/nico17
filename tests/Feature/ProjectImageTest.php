<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectImage extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
	{
	    parent::setUp();

	    $_FILES = array(
	        'image'    =>  array(
	            'name'      =>  'test.jpg',
	            'tmp_name'  =>  __DIR__ . '/_files/phpunit-test.jpg',
	            'type'      =>  'image/jpeg',
	            'size'      =>  499,
	            'error'     =>  0
	        )
	    );
	}

    /** @test */
    public function an_admin_can_see_image_of_a_selected_project()
    {
    	// given an admin, a project, and images of the project
 		$this->withoutExceptionHandling();
 		$this->be( $user = factory('App\User')->create());
		$project = factory('App\Project')->create();  	
 		$image = factory('App\ProjectImage')->create(['project_id' => $project->id]);  	
    	
    	// when the admin goes to the images page of the project
    	$this->get('/admin/projects/projects/'. $project->id .'/images')
    			->assertSee($image->alt);
    	// he will see the image
    }

    /** @test */
    public function add_image_to_a_project()
    {
    	// given an admin and a project
    	$this->withoutExceptionHandling();
    	$this->be( $user = factory('App\User')->create());
    	$project = factory('App\Project')->create();
    	$image = factory('App\ProjectImage')->make();
    	
    	// when I upload an image using the project/project/1/image url
    	$this->post('/admin/projects/projects/'. $project->id .'/images', $image->toArray());
    	
    	// then the image as to be in the database and the project_id match the project
    	$this->assertDatabaseHas('project_images',[
    		'alt' => $image->alt,
		]);
    }

    /** @test */
    public function an_admin_can_create_a_project()
    {
    	// given an admin
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
    	$project = factory('App\Project')->make();

    	// when he send a request to store a project
    	$this->post('admin/projects/projects', $project->toArray() );
    	// then the project has to appear into the database
    	$this->assertDatabaseHas('projects', [
    		'name' => $project->name
		]);
    }
    // THE TEST FOR PROJECT STORE WORKS IMPLEMENT THE FORM NOW


}

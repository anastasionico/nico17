<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectImage extends TestCase
{
    use RefreshDatabase;

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
    		'img' => $image->img,
		]);
    }

    /** @test */
    public function an_admin_can_see_all_images_of_a_selected_project()
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
}

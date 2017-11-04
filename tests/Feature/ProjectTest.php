<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function projects_are_shown_in_the_admin_project_index()
    {
    	// given an authenticated user and a project
    	$this->withoutExceptionHandling();
    	$this->be( $user = factory('App\User')->create() );
    	$project = factory('App\Project')->create();

    	// when the user visit the admin/project/index page
    	// then he will see the project details
    	$this->get('/admin/projects/projects/')
    		->assertSee($project->slug);
    	
    }
}

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
    
    /** @test */
    public function an_admin_can_create_a_project()
    {
        // given an admin
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $project = factory('App\Project')->make([
            'name'      => 'this is a project',
            'excerpt'   => 'Distinctio quos consequatur necessitatibus facere expedita cumque facilis exercitationem nihil enim voluptatem consectetur veniam'
        ]);

        // when he send a request to store a project
        $this->post('admin/projects/projects', $project->toArray() );
        // then the project has to appear into the database
        $this->assertDatabaseHas('projects', [
            'name'      => $project->name,
        ]);
    }
    
    /** @test */
    public function an_admin_can_delete_a_project()
    {
        // given an admin and a project
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $project = factory('App\Project')->create();
        
        // when the admin delete the project 
        // $this->call('DELETE', 'admin/about/skills/'. $skill->id, ['_token' => csrf_token()]);
        $this->call('DELETE', "admin/projects/projects/$project->id", ['_token' => csrf_token()]);
        
        // then the project does not appear in the database anymore
        $this->assertDatabaseMissing('projects', ['id' => $project->id]);
    }

    /** @test */
    public function an_admin_can_update_a_project()
    {
        // given a admin and a project
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $project = factory('App\Project')->create();
        $projectUpdate['name'] = 'anastasioNicoTomHughes';
        
        // when the admin update the project
        $this->call('PUT',  "admin/projects/projects/$project->id", ['name' => $projectUpdate['name']]);


        // then the data in the database has to be updated
        $this->assertDatabaseHas('projects',[
            'name' => $projectUpdate['name'],
            ]);
    }
}

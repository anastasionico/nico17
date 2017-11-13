<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Frontend extends TestCase
{
    use RefreshDatabase;

   	/** @test */ 
	public function skills_are_visible_on_index_page(){
	    // given a visitor and a skill
	    $user = factory('App\User')->create();
	    $skill = factory('App\Skill')->create(['name' => 'cooking', 'value'=> 99]);
	    
	    // when he visits the home page 
	    // then he will see a skill and its value
	    $response = $this->get('')
	            ->assertStatus(200)
	            ->assertSee($skill->name);
  	}

  	/** @test */ 
	public function projects_are_visible_on_index_page(){
	    // given a visitor and a project
	    
	    $user = factory('App\User')->create();
	    $project = factory('App\Project')->create(['name' => 'Lorem Ipsum cooking']);
	    
	    // when he visits the home page 
	    // then he will see a project and its value
	   	$response = $this->get('')
   				->assertStatus(200)
	            ->assertSee($project->name);
  	}

  	/** @test */ 
	public function project_and_cta_are_visible_on_projects_page(){
	    // given a visitor and a project
	    
	    $user = factory('App\User')->create();
	    $project = factory('App\Project')->create([
    		'name' => 'Lorem Ipsum cooking',
			'cta_link' => 'http://www.anastasionico.uk'
		]);
		
	    // when he visits the home page 
	    // then he will see a project and its value
	   	$response = $this->get('/projects')
	            ->assertStatus(200)
	            ->assertSee("Lorem Ipsum cooking")
	            ->assertSee("http://www.anastasionico.uk")
	            ->assertSee("Visit");

  	}

  	/** @test */ 
	public function project_is_visible_cta_is_not_on_projects_page(){
	    // given a visitor and a project
	    
	    $user = factory('App\User')->create();
	    $project = factory('App\Project')->create([
    		'name' => 'Lorem Ipsum cooking',
			'cta_link' => null
		]);
		
	    // when he visits the home page 
	    // then he will see a project and its value
	   	$response = $this->get('/projects')
	            ->assertStatus(200)
	            ->assertSee("Lorem Ipsum cooking")
	            ->assertDontSee("visit");

  	}

  	/** @test */ 
	public function project_is_visible_on_project_page(){
	    // given a visitor and a project
	    
	    $user = factory('App\User')->create();
	    $project = factory('App\Project')->create([
    		'name' => 'Lorem Ipsum cooking',
			'cta_link' => null
		]);
		
	    // when he visits the home page 
	    // then he will see a project and its value
	   	$response = $this->get("/projects/$project->slug")
	            ->assertStatus(200)
	            ->assertSee("Lorem Ipsum cooking");
	}

	/** @test */ 
	public function otherProjects_are_visible_on_project_page(){
	    // given a visitor and a project
	    
	    $user = factory('App\User')->create();
	    $project = factory('App\Project')->create();
	    $otherProject = factory('App\Project')->create();
	    $otherProject2 = factory('App\Project')->create();
	    $otherProject3 = factory('App\Project')->create(['name'=>'forza milan']);
	    $otherProject4 = factory('App\Project')->create(['name'=>'forza catania']);
	    
	    
	    // when he visits the home page 
	    // then he will see a project and its value
	   	$response = $this->get("/projects/$project->slug")
	            ->assertStatus(200)
	            ->assertSee($otherProject->name)
	            ->assertSee($otherProject2->name)
	            ->assertSee($otherProject3->name)
	            ->assertDontSee($otherProject4->name);
	            
	}
}

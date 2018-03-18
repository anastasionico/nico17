<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FrontendTest extends TestCase
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
		
	    // when he visits the project page 
	    // then he will see a project and its value
	   	$response = $this->get("/projects/$project->slug")
	            ->assertStatus(200)
	            ->assertSee("Lorem Ipsum cooking");
	}

	/** @test */ 
	public function otherProjects_are_visible_on_project_page(){
	    // given a visitor and several projects
	    $user = factory('App\User')->create();
	    $project = factory('App\Project')->create(['name'=>'This is project one',]);
	    $project2 = factory('App\Project')->create(['name'=>'This is project Two']);
	    $project3 = factory('App\Project')->create(['name'=>'This is project Three']);
	    $project4 = factory('App\Project')->create(['name'=>'This is project Four']);
	    $project5 = factory('App\Project')->create(['name'=>'This is project Five']);
	    
	    
	    // when he visits the project page 
	    // then he will see three projects and their value
	   	$response = $this->get("/projects/$project->slug")
	            ->assertStatus(200)
	            ->assertSee(ucfirst($project->name))
	            ->assertSee(ucfirst($project2->name))
	            ->assertSee(ucfirst($project3->name))
	            ->assertSee(ucfirst($project4->name))
	            ->assertDontSee(ucfirst($project5->name));
	            
	}

	/** @test */ 
	public function posts_are_visible_on_index_page(){
	    // given a visitor and a post
	    
	    $user = factory('App\User')->create();
	    $post = factory('App\Blogpost')->create(['name'=>'This is home post one', 'status'=> 3 ]);
	    $post2 = factory('App\Blogpost')->create(['name'=>'This is home post Two', 'status'=> 3 ]);
	    $post3 = factory('App\Blogpost')->create(['name'=>'This is home post Three', 'status'=> 3 ]);
	    $post4 = factory('App\Blogpost')->create(['name'=>'This is home post Four', 'status'=> 1 ]);
	    $post5 = factory('App\Blogpost')->create(['name'=>'This is home post Five', 'status'=> 3 ]);
	    
	    // when he visits the home page 
	    // then he will see a post and its value
	    $response = $this->get('')
   				->assertStatus(200)
	            ->assertSee(ucfirst($post->name))
	            ->assertSee(ucfirst($post2->name))
	            ->assertSee(ucfirst($post3->name))
	            ->assertDontSee(ucfirst($post4->name))
	            ->assertSee(ucfirst($post5->name));
  	}

  	/** @test */ 
	public function post_and_cta_are_visible_on_posts_page(){
	    // given a visitor and a post
	    
	    $user = factory('App\User')->create();
	    $post = factory('App\Blogpost')->create([
    		'name' => 'Lorem Ipsum cooking',
    		'status' => 3,
			'cta_link' => 'http://www.anastasionico.uk'
		]);
		$post2 = factory('App\Blogpost')->create(['name'=>"This is post mustn't be seen", 'status'=> 1 ]);
	    // when he visits the home page 
	    // then he will see a post and its value
	   	$response = $this->get('/blog')
	            ->assertStatus(200)
	            ->assertSee("Lorem Ipsum cooking")
	            ->assertSee("http://www.anastasionico.uk")
	            ->assertSee("Visit")
	            ->assertDontSee(ucfirst($post2->name));
	}

	/** @test */ 
	public function post_is_visible_on_post_page(){
	    // given a visitor and a post
	    
	    $user = factory('App\User')->create();
	    $post = factory('App\Blogpost')->create([
    		'name' => 'Lorem Ipsum cooking',
    		'status' => 3,
			'cta_link' => null
		]);
		
	    // when he visits the post page
	    // then he will see a post and its value
	   	$response = $this->get("/blog/$post->slug")
	            ->assertStatus(200)
	            ->assertSee("Lorem Ipsum cooking");
	}

	/** @test */ 
	public function otherPosts_are_visible_on_post_page(){
	    // given a visitor and several blog posts
	    $user = factory('App\User')->create();
	    $post = factory('App\Blogpost')->create(['name'=>'This is post one', 'status'=> 3 ]);
	    $post2 = factory('App\Blogpost')->create(['name'=>'This is post Two', 'status'=> 3 ]);
	    $post3 = factory('App\Blogpost')->create(['name'=>'This is post Three', 'status'=> 3 ]);
	    $post4 = factory('App\Blogpost')->create(['name'=>'This is post Four', 'status'=> 3 ]);
	    $post5 = factory('App\Blogpost')->create(['name'=>'This is post Five', 'status'=> 3 ]);
	    
	    
	    // when he visits the post page 
	    // then he will see three posts and their value
	   	$response = $this->get("/blog/$post->slug")
	            ->assertStatus(200)
	            ->assertSee(ucfirst($post->name))
	            ->assertSee(ucfirst($post2->name))
	            ->assertSee(ucfirst($post3->name))
	            ->assertSee(ucfirst($post4->name))
	            ->assertDontSee(ucfirst($post5->name));
	            
	}
}

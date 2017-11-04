<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SkillTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(){
      parent::setUp();

      $this->admin = $this->be(factory('App\User')->create());
    }
    
    /** @test */
    public function admin_can_see_skill_list_page(){
      $this->withoutExceptionHandling();
      
      // given an admin and some skills
		  $skill = factory('App\Skill')->create();
    	
    	// when we get the page about/skills
    	// then he need to be able to see them in the page
    	$this->get('admin/about/skills/')
    					->assertSee($skill->name);
  }

  /** @test */
  public function admin_can_create_a_new_skill(){
    
    $this->withoutExceptionHandling();
    
    // given an admin
    // when he create a new skill
    $skill = factory('App\Skill')->make();
    $skill->name = "Productivity";
    $this->post('admin/about/skills', $skill->toArray());

    // then a new skill will appear in the database
    $this->assertDatabaseHas('skills',[
        'name' => $skill->name
      ]);

  }

  /** @test */
  public function admin_can_submit_the_form_to_create_a_new_skill(){
    
    $this->withoutExceptionHandling();
    
    // given an admin wants to create a new skill
    // when he goes to the create page he should be able to see the form 
    // then we will see the headline of the form
    $this->get('admin/about/skills/create')
      ->assertSee('Create a new Skill');
  
  }

  /** @test */
  public function admin_can_delete_a_skill(){
    $this->withoutExceptionHandling();

    // give an admin and a skill
    $skill = factory('App\Skill')->create();
    $response = $this->call('DELETE', 'admin/about/skills/'. $skill->id, ['_token' => csrf_token()]);
    $this->assertDatabaseMissing('skills', ['id' => $skill->id]);
    
  }
    
  /** @test */
  public function admin_can_see_the_edit_page(){
    $this->withoutExceptionHandling();
    
    // given an admin and a skill
    $skill = factory('App\Skill')->create();
    
    // when we visit the edit page
    // he should see the form and the name of the skill
    $this->get("admin/about/skills/$skill->id/edit")
      ->assertSee("Edit $skill->name");
  }

  /** @test */
  public function admin_can_update_a_skill(){
    $this->withoutExceptionHandling();
    
    // given an admin and a skill
    $skill = factory('App\Skill')->create();

    $skill->name = 'pippo';
    $skill->value = '89';
    
    // when the admin submit a new request
    // then the data in the database must be changed 
    $response = $this->call('PATCH',  "admin/about/skills/". $skill->id, ['_token' => csrf_token(),'name'=>$skill->name,'value'=>$skill->value]);
    $this->assertDatabaseHas('skills', [
        'name' => 'pippo',
        'value' => 89
      ]);
    
  }


  /** @test */ 
  public function skill_are_visible_on_index_page(){
    // given a visitor and a skill
    $this->withoutExceptionHandling();
    $user = factory('App\User')->create();
    $skill = factory('App\Skill')->create(['name' => 'cooking', 'value'=> 99]);
    
    // when he visits the home page 
    // then he will see a skill and its value
    $response = $this->get('/');
    $response = $this->get('')
            ->assertSee($skill->name);
  }
}

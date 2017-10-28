<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SkillTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_see_skill_list_page(){
  
      // given an admin and some skills
		  $this->be(factory('App\User')->create());
    	$skill = factory('App\Skill')->create();
    	
    	// when we get the page about/skills
    	// then he need to be able to see them in the page
    	$this->get('admin/about/skills')
    					->assertSee($skill->name);
  }

  /** @test */
  public function admin_can_create_a_new_skill(){
    
    $this->withoutExceptionHandling();
    // given an admin
    $this->be(factory('App\User')->create());

    // when he create a new skill
    $skill = factory('App\Skill')->make();
    $this->post('admin/about/skills', $skill->toArray());

    // then a new skill will appear in the database
    $this->assertDatabaseHas('skills',[
        'name' => $skill->name
      ]);

  }
}

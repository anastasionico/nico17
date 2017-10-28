<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SkillTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_see_skill_list_page(){
  //   	$this->withoutExceptionHandling();

  //   	// given an admin and some skills
		$this->be($user = factory('App\User')->create());
    	$skill = factory('App\Skill')->create();
    	
  //   	// when we get the page about/skills
  //   	// then he need to be able to see them in the page
    	$response = $this->get('admin/about/skills')
    					->assertSee($skill->name);

    	
    }

}

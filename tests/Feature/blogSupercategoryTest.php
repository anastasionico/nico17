<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class blogSupercategoryTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function an_admin_can_see_blog_supercategories()
    {
    	// given an admin and a couple of supercategories
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
  		$supercategory1 = factory('App\BlogSupercategory')->create(['name'=> 'Pinco Pallino']);
		$supercategory2 = factory('App\BlogSupercategory')->create();
		$supercategory3 = factory('App\BlogSupercategory')->create();
		
		// when the admin visit admin/blog/supercategory
		// then he have to see the the supercategory
		$supercategoryCount = \App\BlogSupercategory::count();

		$this->get('/admin/blog/supercategory')
			->assertStatus(200)
			->assertSee("Pinco Pallino");
		$this->assertEquals(3, \App\BlogSupercategory::count());
    }
    
    /** @test */
    public function an_admin_can_create_blog_supercategories()
    {
    	// given an admin
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
    	
    	// when he create a supercategory
    	// then the supercategory has to be in the database
    	$supercategory = factory('App\BlogSupercategory')->make(['name' => 'Pinco Pallino']);
    	$this->post('admin/blog/supercategory', $supercategory->toArray());
    	$this->assertDatabaseHas('blog_supercategories', ['name' => 'Pinco Pallino']);
    }
}

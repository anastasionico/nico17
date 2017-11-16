<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogsupercategoryTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function an_admin_can_see_blog_supercategories()
    {
    	// given an admin and a couple of supercategories
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
  		$supercategory1 = factory('App\Blogsupercategory')->create(['name'=> 'Pinco Pallino']);
		$supercategory2 = factory('App\Blogsupercategory')->create();
		$supercategory3 = factory('App\Blogsupercategory')->create();
		
		// when the admin visit admin/blog/supercategory
		// then he have to see the the supercategory
		$supercategoryCount = \App\Blogsupercategory::count();

		$this->get('/admin/blog/supercategory')
			->assertStatus(200)
			->assertSee("Pinco Pallino");
		$this->assertEquals(3, \App\Blogsupercategory::count());
    }
    
    /** @test */
    public function an_admin_can_create_blog_supercategories()
    {
    	// given an admin
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
    	
    	// when he create a supercategory
    	// then the supercategory has to be in the database
    	$supercategory = factory('App\Blogsupercategory')->make(['name' => 'Pinco Pallino']);
        
    	$this->post('admin/blog/supercategory', $supercategory->toArray());
    	$this->assertDatabaseHas('blogsupercategories', ['name' => 'Pinco Pallino']);
    }

    /** @test */
    public function an_admin_can_delete_a_blog_supercategory()
    {
        // given an admin and a supercategory
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        
        // when the admin delete the supercategory 
        $this->call('DELETE', "admin/blog/supercategory/$supercategory->id", ['_token' => csrf_token()]);
        
        // then the supercategory does not appear in the database anymore
        $this->assertDatabaseMissing('blogsupercategories', ['id' => $supercategory->id]);
    }
}

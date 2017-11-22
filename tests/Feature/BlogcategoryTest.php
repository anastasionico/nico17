<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogcategoryTest extends TestCase
{
    
    use RefreshDatabase;
    /** @test */
    public function an_admin_can_see_blog_categories()
    {
    	// given an admin and a couple of categories
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
  		$supercategory = factory('App\Blogsupercategory')->create();
  		$category1 = factory('App\Blogcategory')->create(['name'=> 'Pinco Pallino', 'supercategory_id' => $supercategory->id]);
		$category2 = factory('App\Blogcategory')->create(['name'=> 'Paperino', 'supercategory_id' => $supercategory->id]);
		$category3 = factory('App\Blogcategory')->create(['name'=> 'Topolino', 'supercategory_id' => $supercategory->id]);
		
		// when the admin visit admin/blog/supercategory/5
		// then he have to see the category
		$this->get('admin/blog/supercategory/1')
			->assertStatus(200)
			->assertSee("Pinco Pallino");
	}

	/** @test */
    // public function an_admin_can_create_blog_categories()
    // {
    // 	// given an admin and a supercategory
    // 	$this->withoutExceptionHandling();
    // 	$this->be(factory('App\User')->create());
    // 	$supercategory = factory('App\Blogsupercategory')->create();
    	
    // 	// when he create a category
    // 	// then the category has to be in the database and has to have the right supercategory

    // 	$category = factory('App\Blogcategory')->make(['name' => 'Pinco Pallino', 'supercategory_id' => $supercategory->id]);
        
    // 	$this->post("admin/blog/$supercategory->id/category/create", $category->toArray());
    // 	$this->assertDatabaseHas('blogcategories', ['name' => 'Pinco Pallino']);
    // }

}

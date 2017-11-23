<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogpostTest extends TestCase
{
    use RefreshDatabase;
	/** @test */

    public function an_admin_can_see_posts()
    {
    	$this->withoutExceptionHandling();
    	// give an admin, a supercategory, a category and some posts
    	$this->be(factory('App\User')->create());
    	$supercategory = factory('App\Blogsupercategory')->create();
    	$category = factory('App\Blogcategory')->create(['supercategory_id' => $supercategory->id]);
    	$postOne = factory('App\Blogpost')->create([
    		'category_id' => $category->id,
    		'name' => "pippo"
    		]);
    	$postTwo = factory('App\Blogpost')->create(['category_id' => $category->id]);
    	$postThree = factory('App\Blogpost')->create(['category_id' => $category->id]);

    	// when the admin visit the page admin/blog/{supercategory}/category/{category}
    	// then he has to see all the posts that belongs to that category
    	$this->get("/admin/blog/$supercategory->id/category/$category->id")
    		->assertStatus(200)
    		->assertSee(ucfirst("$postOne->name"))
    		->assertSee(ucfirst("$postTwo->name"))
    		->assertSee(ucfirst("$postThree->name"))
    		;
    	
    }
}

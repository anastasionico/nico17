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
  		$category1 = factory('App\Blogcategory')->create(['name'=> 'Pinco Pallino', 'supercat_id' => $supercategory->id]);
		$category2 = factory('App\Blogcategory')->create(['name'=> 'Paperino', 'supercat_id' => $supercategory->id]);
		$category3 = factory('App\Blogcategory')->create(['name'=> 'Topolino', 'supercat_id' => $supercategory->id]);
		
		// when the admin visit admin/blog/supercategory/5
		// then he have to see the category
		$this->get('admin/blog/supercategory/1')
			->assertStatus(200)
			->assertSee("Pinco Pallino");
	}

    /** @test */
    public function an_admin_cat_fill_the_form_for_creating_blog_categories()
    {
        // given an admin and a super blog category
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        // when i what to create a blog category
        // then i will be able to see the form
        $this->get("admin/blog/$supercategory->id/category/create")
            ->assertStatus(200)
            ->assertSee("$supercategory->name");

    }
	
    /** @test */
    public function an_admin_can_create_blog_categories()
    {
    	// given an admin and a supercategory
    	$this->withoutExceptionHandling();
    	$this->be(factory('App\User')->create());
    	$supercategory = factory('App\Blogsupercategory')->create();
    	
    	// when he create a category
    	// then the category has to be in the database and has to have the right supercategory
    	$category = factory('App\Blogcategory')->make(['name' => 'Pinco Pallino', 'supercat_id' => $supercategory->id]);
    	$response = $this->post("admin/blog/$supercategory->id/category", $category->toArray());
    	$this->assertDatabaseHas('blogcat', ['name' => 'Pinco Pallino']);
        $response->assertRedirect("/admin/blog/supercategory/$supercategory->id");
    }

    /** @test */
    public function an_admin_can_edit_a_blog_supercategory()
    {
        // given an admin, a supercategory and a blog category
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $categoryOne = factory('App\Blogcategory')->create(['name' => 'Pinco Pallino', 'supercat_id' => $supercategory->id]);
        $categoryTwo = factory('App\Blogcategory')->create(['name' => 'Topolino Pallino', 'supercat_id' => $supercategory->id]);

        // when he need to edit it
        // then he will see the form and the name of the supercategory
        $this->get("admin/blog/$supercategory->id/category/$categoryTwo->id/edit")
            ->assertSee($categoryTwo->name);
    }

    /** @test */
    public function an_admin_can_update_a_blog_category()
    {
        // given an admin a supercategory and a blog category
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create(['supercat_id' => $supercategory->id]);
        $categoryTwo = factory('App\Blogcategory')->create(['name' => 'Pippo', 'supercat_id' => $supercategory->id]);
        $categoryUpdate['name'] = 'anastasioNicoTomHughes';
        // when he update the category
        // then the category has to appear different in the database
        $this->call('PATCH', "admin/blog/$supercategory->id/category/$categoryTwo->id", $categoryUpdate);
        $this->assertDatabaseHas('blogcat', ['name' => 'anastasioNicoTomHughes']);
    }

    /** @test */
    public function an_admin_can_delete_a_blog_category()
    {
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create(['name' => 'Giuseppe Mascara' ,'supercat_id' => $supercategory->id]);
        
        // when the admin delete the supercategory 
        $this->call('DELETE', "admin/blog/$supercategory->id/category/$category->id", ['_token' => csrf_token()]);
        
        // then the supercategory does not appear in the database anymore
        $this->assertDatabaseMissing('blogcat', ['id' => $category->id]);
    }
}

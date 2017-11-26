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
    		->assertSee(ucfirst("$postThree->name"));
    }

    /** @test */
    public function an_admin_can_see_the_create_a_new_post_form()
    {
        // given an admin, a supercategory, a category
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategory->id]);
        // when the admin get the page for creating a new post
        // then he has to be able to see the form
        $this->get("admin/blog/$supercategory->id/$category->id/post/create")
            ->assertStatus(200);
    }

    /** @test */
    public function an_admin_can_create_a_post()
    {
        // given an admin, a supercategory, a category
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategory->id]);
        $post = factory('App\Blogpost')->make([
            'category_id' => $category->id,
            'name'      => 'this is a project',
            'excerpt'   => 'Distinctio quos consequatur necessitatibus facere expedita cumque facilis exercitationem nihil enim voluptatem consectetur veniam'
        ]);

        // when he send a request to store a post
        $this->post('admin/blog/$supercategory->id/$category->id/post', $post->toArray() );
        // then the post has to appear into the database
        $this->assertDatabaseHas('blogposts', [
            'name'      => $post->name,
        ]);
    }

    /** @tests */
    public function an_admin_can_see_the_post_edit_form()
    {
        // given an admin, a supercategory, a category, and a post
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategory->id]);
        $post = factory('App\Blogpost')->create([
            'category_id' => $category->id,
            'name'      => 'this is a project',
            'excerpt'   => 'Distinctio quos consequatur necessitatibus facere expedita cumque facilis exercitationem nihil enim voluptatem consectetur veniam'
        ]);
        
        // when the admin goes to the admin/blog/{supercategory}/{category}/post/{post}/edit page
        // he can see the form 
        $this->get("admin/blog/$supercategory->id/$category->id/post/$post->id/edit")
            ->assertStatus(200)
            ->assertSee("Edit " .  ucfirst($post->name));
    }

    /** @test */
    public function an_admin_can_update_a_post()
    {
        // given an admin, a supercategory, a category, and a post
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategory->id]);
        $post = factory('App\Blogpost')->create([
            'category_id' => $category->id,
            'name'      => 'this is a project',
            'excerpt'   => 'Distinctio quos consequatur necessitatibus facere expedita cumque facilis exercitationem nihil enim voluptatem consectetur veniam'
        ]);
        $postUpdate = [
            'name'      => 'Pinco Pallino',
            'excerpt'   => 'An adult Frank Walker talks to an unseen group about the future, beginning with his visit to the 1964 New York World'
        ];
        // when the admin update the post
        $response = $this->call('PATCH', "admin/blog/$supercategory->id/$category->id/post/$post->id", $postUpdate);
        // the new data has to appear in the database
        $this->assertDatabaseHas('blogposts' ,[
            'name'      => 'Pinco Pallino',
            'excerpt'   => 'An adult Frank Walker talks to an unseen group about the future, beginning with his visit to the 1964 New York World'
        ]);
        $response->assertRedirect("admin/blog/$supercategory->id/category/$category->id");
    }

    /** @test */
    public function an_admin_can_delete_a_post()
    {
        // given an admin, a supercategory, a category, and a post
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategory->id]);
        $post = factory('App\Blogpost')->create([
            'category_id' => $category->id,
            'name'      => 'Pinco Pallino',
            'excerpt'   => 'An adult Frank Walker talks to an unseen group about the future, beginning with his visit to the 1964 New York World'
        ]);
        // when the admin delete a post
        $response = $this->call('DELETE', "admin/blog/$supercategory->id/$category->id/post/$post->id");
        // the new data has to disappear in the database
        $this->assertDatabaseMissing('blogposts' ,[
            'name'      => 'Pinco Pallino',
            'excerpt'   => 'An adult Frank Walker talks to an unseen group about the future, beginning with his visit to the 1964 New York World'
        ]);
        $response->assertRedirect("admin/blog/$supercategory->id/category/$category->id");
    }

    /** @test */
    public function an_admin_can_see_all_from_post_list_page()
    {
        // Given an admin and several posts
        $this->withoutExceptionHandling();
        $this->be(factory('App\User')->create());
        $supercategory = factory('App\Blogsupercategory')->create();
        $supercategoryTwo = factory('App\Blogsupercategory')->create();
        $category = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategory->id]);
        $categoryTwo = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategoryTwo->id]);
        $categoryThree = factory('App\Blogcategory')->create([ 'supercategory_id' => $supercategoryTwo->id]);
        $post = factory('App\Blogpost')->create(['category_id' => $category->id]);
        $postTwo = factory('App\Blogpost')->create(['category_id' => $categoryTwo->id]);
        $postThree = factory('App\Blogpost')->create(['category_id' => $categoryThree->id]);
        $postFour = factory('App\Blogpost')->create(['category_id' => $categoryTwo->id]);
        $postFive = factory('App\Blogpost')->create(['category_id' => $categoryThree->id]);
        $postSix = factory('App\Blogpost')->create(['category_id' => $category->id]);
        
        // when e get the post list page
        //  then he will see all the posts
        $this->get('/admin/blog/postlist')
            ->assertStatus(200)
            ->assertSee(ucfirst($post->name))
            ->assertSee(ucfirst($postTwo->name))
            ->assertSee(ucfirst($postThree->name))
            ->assertSee(ucfirst($postFour->name))
            ->assertSee(ucfirst($postFive->name))
            ->assertSee(ucfirst($postSix->name));
    }
}

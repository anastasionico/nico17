<?php

namespace App\Http\Controllers;

use App\Blogpost;
use App\Blogcategory;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blogsupercategory, $blogcategory)
    {
        $blogcategory = Blogcategory::findOrFail($blogcategory);
        return view('admin/blog/post/create' , compact('blogcategory'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post = request()->validate([
            'category_id'      => 'required|integer|exists:blogcategories,id',
            'name'      => 'required|min:5|string',
            'slug'      => 'required|min:5|alpha_dash',
            'excerpt'   => 'required|min:50|string|',
            'content'   => 'required|min:50|string',
            'status'    => 'required|numeric',
            'order'     => 'required|numeric',
            'img'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'minutes_to_read'    => 'nullable|numeric',
            'cta_link'  => 'url|nullable',
            'published_at'    => 'nullable|date',
        ]);

        // creating the image beforer the creation of the record into the database
        $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img/blog'), $imageName);
        $post['img'] = $imageName;

        $newPost = Blogpost::create($post);

        
        \Session::flash('success', "The post '$newPost->name' has been created ");
        // /admin/blog/$newPost->category_id->/category/$newPost->category_id
        return redirect("admin/blog/supercategory/$newPost->supercategory_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function show(Blogpost $blogpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogpost $blogpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogpost $blogpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogpost $blogpost)
    {
        //
    }
}

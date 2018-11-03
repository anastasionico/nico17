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
            'category_id'      => 'required|integer|exists:blogcat,id',
            'name'      => 'required|min:5|string',
            'slug'      => 'required|min:5|alpha_dash',
            'excerpt'   => 'required|min:50|string|',
            'content'   => 'required|min:50|string',
            'keywords'  => 'required|string|',
            'status'    => 'required|numeric',
            'order'     => 'required|numeric',
            'img'       => 'required|image|mimes:jpeg,jpg,gif,svg',
            'minutes_to_read'    => 'nullable|numeric',
            'cta_link'  => 'url|nullable',
            'cta_text'  => 'string|nullable|required_if:cta_link,',
            'published_at'    => 'nullable|date',
        ]);

        // creating the image beforer the creation of the record into the database
        $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img/blog'), $imageName);
        $post['img'] = $imageName;

        $newPost = Blogpost::create($post);

        $category = Blogcategory::findOrFail($newPost->category_id);
        \Session::flash('success', "The post '$newPost->name' has been created ");
        return redirect("admin/blog/$category->supercat_id/category/$newPost->category_id");
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
    public function edit($blogsupercategory, $blogcategory, $post)
    {
        $post = Blogpost::findOrFail($post);
        return view('admin/blog/post/edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$blogsupercategory, $blogcategory, $post)
    {
        $post = Blogpost::findOrFail($post);
        $postUpdate = request()->validate([
            'category_id'      => 'integer|exists:blogcat,id',
            'name'      => 'min:5|string',
            'slug'      => 'min:5|alpha_dash',
            'excerpt'   => 'min:50|string|',
            'content'   => 'min:50|string',
            'keywords'  => 'string|',
            'status'    => 'numeric',
            'order'     => 'numeric',
            'img'       => 'image|mimes:jpeg,jpg,gif,svg',
            'minutes_to_read'    => 'nullable|numeric',
            'cta_link'  => 'url|nullable',
            'cta_text'  => 'string|nullable|required_if:cta_link,',
            'published_at'    => 'nullable|date',

        ]);

        if($request->img){
            // creating the image beforer the creation of the record into the database
            $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
            request()->img->move(public_path('img/blog'), $imageName);
            $postUpdate['img'] = $imageName;

            // // Create new imagick object
            // $im = new \Imagick(public_path('img/blog/') . $imageName);
            // // Compression and quality
            // $im->setImageCompression(\Imagick::COMPRESSION_JPEG);
            // $im->setImageCompressionQuality(75);

            // // Write the image back
            // $im->writeImages(public_path('img/blog/') . $imageName, true);
        }
        $post->update($postUpdate);
        
        \Session::flash('success', "The post '$post->name' has been updated");
        return redirect("admin/blog/$blogsupercategory/category/$blogcategory");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogsupercategory, $blogcategory, $post)
    {
        $post = Blogpost::findOrFail($post);
        $post->delete();
        \Session::flash('success', 'You have delete ' . $post->name);
        return redirect("admin/blog/$blogsupercategory/category/$blogcategory");
    }

    public function postlist()
    {
       $posts = Blogpost::orderBy('id', 'desc')->get();
       return view('admin/blog/postlist', compact('posts'));
    }
}

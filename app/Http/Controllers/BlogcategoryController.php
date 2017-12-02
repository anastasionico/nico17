<?php

namespace App\Http\Controllers;

use App\Blogcategory;
use App\Blogsupercategory;
use Illuminate\Http\Request;

class BlogcategoryController extends Controller
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
    public function create(Request $request)
    {
        
        $blogsupercategory = Blogsupercategory::find($request->supercategory);
        
        return view('admin/blog/category/create', compact('blogsupercategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogCategory = request()->validate([
            'supercat_id'      => 'required|integer|exists:blogsupercat,id',
            'name'      => 'required|min:5|string',
            'slug'      => 'required|min:5|alpha_dash|unique:blogcat,slug',
            'excerpt'   => 'required|min:50|string|',
            'img'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // creating the image beforer the creation of the record into the database
        $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img/blog'), $imageName);
        $blogCategory['img'] = $imageName;

        $newCategory = Blogcategory::create($blogCategory);
        \Session::flash('success', "The category '$newCategory->name' has been created ");
        return redirect("admin/blog/supercategory/$newCategory->supercat_id");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function show($blogsupercategory, $blogcategory)
    {
        

        $blogcategory = Blogcategory::find($blogcategory);   
        
        return view("admin/blog/category/show", compact('blogcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($blogsupercategory, $blogcategory)
    {
        $blogcategory = Blogcategory::find($blogcategory);
        return view('/admin/blog/category/edit', compact('blogcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blogsupercategory, $blogcategory)
    {
        $blogcategory = Blogcategory::findOrFail($blogcategory);
        $categoryUpdate = request()->validate([
            'supercat_id'      => 'integer|exists:blogsupercat,id',
            'name'      => 'min:5|string',
            'slug'      => 'min:5|alpha_dash',
            'excerpt'   => 'min:50|string|',
            'img'       => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        if($request->img){
            // creating the image before the creation of the record into the database
            $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
            request()->img->move(public_path('img/blog'), $imageName);
            $categoryUpdate['img'] = $imageName;
        }
        $blogcategory->update($categoryUpdate);
        

        \Session::flash('success', "The blog's category '$blogcategory->name' has been updated ");
        return redirect("admin/blog/supercategory/$blogcategory->supercat_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogcategory  $blogcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogsupercategory, $blogcategory)
    {
        $blogcategory = Blogcategory::findOrFail($blogcategory);
        $blogcategory->delete();
        \Session::flash('success', 'You have delete ' . $blogcategory->name);
        return back();
    }
}

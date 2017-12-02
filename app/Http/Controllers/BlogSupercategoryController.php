<?php

namespace App\Http\Controllers;

use App\Blogsupercategory;
use Illuminate\Http\Request;

class BlogsupercategoryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogsupercat = Blogsupercategory::all();
        return view('admin/blog/supercategory/index', compact('blogsupercat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blog/supercategory/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $superCategory = request()->validate([
            'name'      => 'required|min:5|string',
            'slug'      => 'required|min:5|alpha_dash|unique:blogcat,slug',
            'excerpt'   => 'required|min:50|string|',
            'img'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // creating the image beforer the creation of the record into the database
        $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img/blog'), $imageName);
        $superCategory['img'] = $imageName;


        $newsuperCategory = Blogsupercategory::create($superCategory);

        \Session::flash('success', "The super category '$newsuperCategory->name' has been created ");
        return redirect('/admin/blog/supercategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogsupercategory  $supercategory
     * @return \Illuminate\Http\Response
     */
    public function show(Blogsupercategory $supercategory)
    {
        $categories = $supercategory->categories();
        return view("admin/blog/supercategory/show", compact('supercategory', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogsupercategory  $supercategory
     * @return \Illuminate\Http\Response
     */

    public function edit(Blogsupercategory $supercategory)
    {
        
        $supercategory = Blogsupercategory::findOrFail($supercategory->id);
        return view('/admin/blog/supercategory/edit', compact('supercategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogsupercategory  $supercategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogsupercategory $supercategory)
    {
         $supercategoryUpdate = request()->validate([
            'name'      => 'min:5|string',
            'slug'      => 'min:5|alpha_dash',
            'excerpt'   => 'min:50|string|',
            'img'       => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        if($request->img){
            // creating the image before the creation of the record into the database
            $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
            request()->img->move(public_path('img/blog'), $imageName);
            $supercategoryUpdate['img'] = $imageName;
        }
        $supercategory->update($supercategoryUpdate);
        

        \Session::flash('success', "The blog's super category '$supercategory->name' has been updated ");
        return redirect('/admin/blog/supercategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogsupercategory  $supercategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogsupercategory $supercategory)
    {
        $supercategory = Blogsupercategory::findOrFail($supercategory->id);
        $supercategory->delete();
        \Session::flash('success', 'You have delete ' . $supercategory->name);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\BlogSupercategory;
use Illuminate\Http\Request;

class BlogSupercategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogSupercategories = BlogSupercategory::all();
        return view('admin/blog/supercategory/index', compact('blogSupercategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogSupercategory  $blogSupercategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogSupercategory $blogSupercategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogSupercategory  $blogSupercategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogSupercategory $blogSupercategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogSupercategory  $blogSupercategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogSupercategory $blogSupercategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogSupercategory  $blogSupercategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogSupercategory $blogSupercategory)
    {
        //
    }
}

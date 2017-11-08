<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin/projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/projects/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $project = request()->validate([
            'name'      => 'required|min:5|string',
            'slug'      => 'required|min:5|alpha_dash',
            'excerpt'   => 'required|min:50|string|',
            'content'   => 'required|min:50|string',
            'img'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'cta_link'  => 'url|nullable',
            'seo'       => 'boolean',
            'ecommerce' => 'boolean',
            'responsive'        => 'boolean',
            'social_marketing'  => 'boolean',
            'host_support'      => 'boolean',
        ]);

        // creating the image beforer the creation of the record into the database
        $imageName = request()->slug . '.' .request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img/projects'), $imageName);
        $project['img'] = $imageName;


        Project::create($project);

        $request->session()->flash('success', 'This Project was successful Created');
        return redirect('/admin/projects/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}

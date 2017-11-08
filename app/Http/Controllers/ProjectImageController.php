<?php

namespace App\Http\Controllers;

use App\ProjectImage;
use Illuminate\Http\Request;
use App\Project;

class ProjectImageController extends Controller
{
    
    public function index(Project $project)
    {
        $images = Project::find($project->id)->images;
        return view("admin/projects/images/index", compact('project', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        $project = Project::find($project->id);
        return view("admin/projects/images/create", compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $img = request()->validate([
            'img'           => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'alt'           => 'required|string',
            'project_id'    => 'required|exists:projects,id'
        ]);


        $imageName = request()->alt . '.' .request()->img->getClientOriginalExtension();
        request()->img->move(public_path('img/projects'), $imageName);
        
        ProjectImage::create(['img' => $imageName, 'alt' => $request->alt,'project_id' => $request->project_id ]);
        $request->session()->flash('success', 'the image was successful added to the database');
        return redirect("admin/projects/projects/$request->project_id/images");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectImage $projectImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectImage $projectImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectImage $projectImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectImage  $projectImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectImage $projectImage)
    {
        //
    }
}

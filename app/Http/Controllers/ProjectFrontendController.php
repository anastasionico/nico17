<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectFrontendController extends Controller
{
    public function index()
    {
    	$projects = Project::orderBy('created_at', 'desc')->get();
    	return view('projects', compact('projects'));
    }

    public function show($param)
    {
    	$content = Project::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();

        return view('detail', compact('content'));
    }
}

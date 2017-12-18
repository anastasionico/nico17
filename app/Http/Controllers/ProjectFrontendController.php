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

    public function show(Request $request, $param)
    {
        $segment = $request->segment(1);
    	$content = Project::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();
        $otherContents = Project::select('img', 'created_at', 'name', 'cta_link', 'slug')
                    ->where('id', '!=', $param)
                    ->where('slug', '!=', $param)
                    ->limit(3)
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('detail', compact('content', 'otherContents','segment'));
    }
}

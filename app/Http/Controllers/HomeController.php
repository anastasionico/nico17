<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Skill;
use App\Project;
use App\Blogsupercategory;
use App\Blogcategory;
use App\Blogpost;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasksUndone = Task::where('done', 0)->orderBy('priority','desc')->get();
        $skills = Skill::all();
        $projects = Project::all();
        $blogsupercat = BlogSupercategory::all();
        $blogcat = Blogcategory::all();
        $blogpostsPublished = Blogpost::where('status', '3')->get();
        $blogpostsOutstanding = Blogpost::where('status','!=', '3')->get();
        return view('/admin/dashboard', compact('tasksUndone','skills','projects', 'blogsupercat', 'blogcat', 'blogpostsPublished', 'blogpostsOutstanding'));
    }
}

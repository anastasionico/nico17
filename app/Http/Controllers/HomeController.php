<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Skill;

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
        return view('/admin/dashboard', compact('tasksUndone','skills'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasksUndone = Task::where('done', 0)->orderBy('priority','desc')->get();
        $tasksDone = Task::where('done', 1)->orderBy('updated_at','desc')->get();

        return view('admin/tasks/index', compact('tasksUndone','tasksDone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tasks/create');
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
            'description' => 'required|string|min:10',
            'category' => 'required|string|min:5',
            'priority' => 'required|numeric|between:1,5',
            
        ]);
    
        Task::create($post);

        return redirect('/admin/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('/admin/tasks/edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $updatedData = request()->validate([
            'description' => 'string|min:10',
            'category' => 'string|min:5',
            'priority' => 'numeric|between:1,5',
            
        ]);

        $task = Task::find($task->id);
        if(isset($updatedData['category'])){ $task->category = $updatedData['category'];}
        if(isset($updatedData['description'])){ $task->description = $updatedData['description'];}
        if(isset($updatedData['priority'])){ $task->priority = $updatedData['priority'];}
        $task->save();
        
        return redirect('/admin/tasks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/admin/tasks');
    }

    public function setDone(Request $request, Task $task)
    {
        $task->done = 1;
        $task->save();

        return redirect('/admin/tasks');
    }

}
    
  // public function update(Request $request, $id)
  //   {
  //       //validate
  //       $this->validate(request(),[
  //           'name' => 'required',
  //           'description' => 'nullable',
  //           'priority' => 'integer',
  //           'user_id' => 'integer|required'
  //       ]);
        
  //       //save
  //       $task = Task::find($id);
  //       $task->name = $request->input('name');
  //       $task->description = $request->input('description');
  //       $task->priority = $request->input('priority');
  //       $task->user_id = $request->input('user_id');
  //       $task->save();
        
  //       //redirect
  //       return redirect("/tasks");
  //   }

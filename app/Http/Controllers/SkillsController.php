<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin/about/skills/index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('hello');
        return view('admin/about/skills/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = request()->validate([
            'name' => 'required|string|min:2',
            'value' => 'required|numeric|between:1,99',
        ]);
        
        Skill::create($skill);

        $request->session()->flash('success', $skill['name']. ' was successful Created');
        return redirect('admin/about/skills/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $skill = Skill::findOrFail($skill->id);
        return view('admin/about/skills/edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $skillUpdated = request()->validate([
            'name' => 'required|string|min:2',
            'value' => 'required|numeric|between:1,99',
        ]);
        
        
        if (array_key_exists("name",$skillUpdated)){
            $skill->name = $skillUpdated['name'];
        }
        if (array_key_exists("value",$skillUpdated)){
            $skill->value = $skillUpdated['value'];
        }
        $skill->save();

        $request->session()->flash('success', $skill->name. ' was successful Updated');
        return redirect('admin/about/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        
        $skill = Skill::findOrFail($skill->id);
        $skill->delete();
        \Session::flash('success', 'You have delete ' . $skill->name);
        return back();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skill = Skill::paginate(2);
        return view('admin.skills.main', compact('skill'));
    }

    // CRUD CREATE
    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'logo' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
        ]);

        $skill = new Skill();
        $skill->logo = $request->logo;
        $skill->title = $request->title;
        $skill->description = $request->description;
        $skill->save();

        return redirect()->route('skills.index')->with('success', 'skill add !');
    }


    // CRUD EDIT-UPDATE
    public function edit(Skill $id)
    {
        $skill = $id;
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Skill $id, Request $request)
    {
        $skill = $id;
        $skill->logo = $request->logo;
        $skill->title = $request->title;
        $skill->description = $request->description;
        $skill->save();

        return redirect()->route('skills.index');
        return redirect('skills.index' . $skill->id);
    }
    // CRUD DELETE
    public function destroy(Skill $id)
    {
        $id->delete();
        return redirect()->back()->with('warning', 'skill delete');
    }

    // CRUD SHOW
    public function show(Skill $id)
    {
        return view('admin.skills.show', compact('id'));
    }
}

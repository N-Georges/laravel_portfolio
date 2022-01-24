<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('admin.project.main', compact('project'));
    }
    // CRUD CREATE
    public function create()
    {
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->image = $request->image;
        $project->title = $request->title;
        $project->save();

        return redirect()->route('project.index');
    }


    // CRUD EDIT-UPDATE
    public function edit(Project $id)
    {
        $project = $id;
        return view('admin.project.edit', compact('project'));
    }

    public function update(Project $id, Request $request)
    {
        $project = $id;
        $project->image = $request->image;
        $project->title = $request->title;
        $project->save();

        return redirect()->route('project.index');
        return redirect('project.index' . $project->id);
    }
    // CRUD DELETE
    public function destroy(Project $id)
    {
        $id->delete();
        return redirect()->back();
    }

    // CRUD SHOW
    public function show(Project $id)
    {
        return view('admin.project.show', compact('id'));
    }
}

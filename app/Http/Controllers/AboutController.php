<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.main', compact('about'));
    }


    // CRUD CREATE
    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'text_1' => ['required'],
            'text_2' => ['required'],
            'text_3' => ['required'],
            'image' => ['required'],
        ]);


        $about = new About();
        $about->text_1 = $request->text_1;
        $about->text_2 = $request->text_2;
        $about->text_3 = $request->text_3;
        $about->image = $request->image;
        $about->save();

        return redirect()->route('about.index')->with('success', 'post add');
    }


    // CRUD EDIT-UPDATE
    public function edit(About $id)
    {
        $about = $id;
        return view('admin.about.edit', compact('about'));
    }

    public function update(About $id, Request $request)
    {
        $about = $id;
        $about->text_1 = $request->text_1;
        $about->text_2 = $request->text_2;
        $about->text_3 = $request->text_3;
        $about->image = $request->image;
        $about->save();

        return redirect()->route('about.index');
        return redirect('about.index' . $about->id);
    }
    // CRUD DELETE
    public function destroy(About $id)
    {
        $id->delete();
        return redirect()->back()->with('warning', 'post delete');
    }

    // CRUD SHOW
    public function show(About $id)
    {
        $about = About::all();
        return view('admin.about.show', compact('about'));
    }
}

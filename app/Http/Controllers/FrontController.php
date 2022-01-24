<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $about = About::all()->first();
        $skill = Skill::all();
        return view('home', compact('about', 'skill'));
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}

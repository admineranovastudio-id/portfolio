<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\About;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('num')->get();
        $about = About::first();

        return view('home', compact('projects', 'about'));
    }
}

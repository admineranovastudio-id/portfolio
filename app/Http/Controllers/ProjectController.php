<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('num')->get();
        return view('projects.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $projects = Project::orderBy('num')->get();
        
        $projectIndex = $projects->search(function ($p) use ($slug) {
            return $p->slug === $slug;
        });

        $project->prev = $projectIndex > 0 ? $projects[$projectIndex - 1]->slug : null;
        $project->next = $projectIndex < $projects->count() - 1 ? $projects[$projectIndex + 1]->slug : null;

        return view('projects.show', compact('project', 'slug', 'projects'));
    }
}

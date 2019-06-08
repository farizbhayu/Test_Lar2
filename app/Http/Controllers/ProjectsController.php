<?php

namespace App\Http\Controllers;

use App\Project;

// use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();

        // return $projects;

        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $project = new Project();
        $project->title = request('title');
        $project->desc = request('desc');

        $project->save();

        return redirect('/projects');
    }
}

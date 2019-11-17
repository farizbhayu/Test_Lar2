<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $projects = Project::where('owner_id', auth()->id())->get();

        // return $projects;

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project){
        // abort_unless(auth()->user()->owns($project), 403);
        // if($project->owner_id !== auth()->id()){
        //     abort(403);
        // }
        // $this->authorize('update', $project);
        // abort_unless(\Gate::allows('update', $project), 403);

        return view('projects.show', compact('project'));
    }

    public function create() {
        return view('projects.create');
    }


    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {
        $project->update(request(['title', 'desc']));

        return redirect('/projects');
    }

    public function destroy(Project $project) {
        $project->delete();
        return redirect('/projects');
    }

    public function store() {
        $attributes = request()->validate(
            ['title' => ['required', 'min:3'],
            'desc' => ['required', 'min:3']
        ]);

        $attributes['owner_id'] = auth()->id;

        Project::create($attributes);

        /* request()->validate([
            'title' => ['required', 'min:3'],
            'desc' => ['required', 'min:3']
        ]);

        Project::create(request([
            'title',
            'desc'
        ])); */

        return redirect('/projects');
    }
}

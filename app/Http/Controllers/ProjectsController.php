<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
// import this namespace so can then reference things within that file path. otherwise wouldhave to have \App\Proects in the model calls
// \App because it is at the root.

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // retrieves all projects of the model Project
        // return $projects // display the array of objects as a json
        //***all three below work to pass the data to the view */
        // return view('projects.index')->withProjects($projects);
        // return view('projects.index', compact('projects'));
        return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
        Project::create($validated);
        return redirect('/projects');

        // can specify validation rules for different inputs - for each on erros object in baldes willdisplay error messages
        // larave.com for validation rules for whole host of them

        // the below is vulnerab;e to injection attack - creating a new input 
        // field in html and changing the input value to somethign else
        // if you havent't set fillablae / guarded in the Model.
        // Project::create(request()->all());

        // Project::create(request(['title', 'description']));
        // above is shorter form of below.
        // Project::create([
        //     'title' => request('title'),
        //     'description' => request('description'),
        // ]);
        // // LONGER BUT MORE EXPLANATORY WAY TO SAVE NEW PREOJCT
        // // create a new project from eloquent model and save to a variable
        // $project = new Project();
        // // save information sent with the request from teh post form tothe new project
        // $project->title = request('title');
        // $project->description = request('description');
        // // save the project to the database
        // $project->save();
        // // redirect back to the  projects page
    }

    public function edit($id)
    {
        $project = Project::find($id);

        return view('projects.edit', compact('project'));
    }

    public function show(Project $project)
    {
        // route model binding means that because have wildcard of Project it figures out whih one you want 
        // autoresolving - kind of gueses what you might want with Project
        // uses reflection API to do this - if you get an error that is the one
        // also service container (which is the app container )
        // looks first for a key in container then if not looks for a class App\Example
        // can nest this - so using Foo $foo inside consructir for Example and it will go through the same loop to 
        // try and find the right thing that you need
        // typehint - name for Project / Filesystem 
        // use app() / resolve() to bind and register classes into app container
        // episode 21service container and autoresolving
        // can bind singlton and functions to the app container
        // don't have to do a call to the database to get it
        return view('projects.show', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        // // above is shorter form of the below - update is an eloquent method.
        // $project = Project::find($id);
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();
        return redirect('/projects');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects');
    }
}
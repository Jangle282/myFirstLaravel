<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {
        // first back end validation 
        $attributes = request()->validate(['description' => 'required']);
        // then calling a method defined in Project model and passing an array of attributes that 
        // have been validated to it
        // Project model can encapusalte and be fully responsble for the shit associated with projects
        // 
        $project->addTask($attributes);
        return back();
        // Task::create(request()->all());
        // return redirect('/projects/{{ $project->id }}');
    }

    // could call this as a method in  Project model too - depends on how thigns are organised
    // At controller level - just specifying what happens - object orientaed programming
    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();

        // $task->complete(request()->has('completed'));
        // $task->update(['completed' => request()->has('completed')]);

        return back();
    }
}
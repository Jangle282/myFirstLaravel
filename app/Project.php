<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // so can use the Projecy::create thing in the contorller - which is quicker - 
    // security measure to specify which fields you can update in teh database and which not - e.g. can't update the id number 
    // protected $fillable = [
    //     'title', 'description'
    // ];
    // opposite is below - to specify which fields to not mass assign - if you leave it empty you are
    // are saying 0 I'm ok with all of them being mass assigned. 
    protected $guarded = [];
    public function tasks()
    {
        return $this->hasMany(Task::class); // realtionship between projects and tasks - a project has many takss
        // others has one morphamany etc 0 documentation for is
    }

    public function addTask($tasks)
    {
        // clever eloquent shit means it will pass the correct project it along to create
        // .. that field in teh Task table
        $this->tasks()->create($tasks);
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);
    }
}


// Singular Model for database item - Eloquent provides the model to put single items into the sql tables which are created by the migration fies
// migrate - creates the tables and empty structure in mysql and 
// eloquent models give form for singular items
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

// can use policies to set authorisation functions - episide 27
// many different ways to use teh auth middles wares and 
// add levels of authorisation to different pages
// /Gate:: middleware('can:update...') - lots of documentation 
// 

// php artisan make:event projectPublished -- past event thing that took plae
// created under app/events
// the event is a class - creates an object against that class
// events(new PrjectCreated($project)); broadcasts aroudn app that a new project was cerated an passes the proejct as a variable int o it. 
// can also make a listener with php artisan make:listener SendProjectCreatedNotificationToUser
// listeners directory also created in the app. 
// handles(ProjectCreated) event - there is a way to boiler plate that in
// php artisan help make:listener - lists useful extra commands for command line


// event creates a container in the system. 
// 

// can use a service provider to fire off differnet event listeners when that event takes palce
//


// can also make:notification nameOfClass through artisan 
// 
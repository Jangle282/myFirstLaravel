vagrant@homestead:~/Projects/myfirstproject$ php artisan tinker
Psy Shell v0.9.9 (PHP 7.3.1-1+ubuntu18.04.1+deb.sury.org+1 — cli) by Justin Hileman

*****create a variable to store and new database item from the Project model (eloquent)
>>> $project = new App\Project
=> App\Project {#2924}

****set informaton for the fields / columns
>>> $project->title = "the first project";
=> "the first project"
>>> $project->description = "Lorem ipsum dolar etc sedaris blahlahosdhesb";
=> "Lorem ipsum dolar etc sedaris blahlahosdhesb"

***save it to the database
>>> $project->save();
=> true

*** request the first Project in that table
>>> App\Project::first();
=> App\Project {#2933
     id: 1,
     title: "the first project",
     description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
     created_at: "2019-04-28 08:36:06",
     updated_at: "2019-04-28 08:36:06",
   }

*** request the title of the first project
>>> App\Project::first()->title;
=> "the first project"

*** request all the projects
>>> App\Project::all();
=> Illuminate\Database\Eloquent\Collection {#2931
     all: [
       App\Project {#2928
         id: 1,
         title: "the first project",
         description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
         created_at: "2019-04-28 08:36:06",
         updated_at: "2019-04-28 08:36:06",
       },
     ],
   }

***make another database project item
>>> $project = new App\Project;
=> App\Project {#2927}
>>> $project->title = "the second project";
=> "the second project"
>>> $project->description = "Lorem ipsum dolar etc sedaris blahlahosdhesb";
=> "Lorem ipsum dolar etc sedaris blahlahosdhesb"
>>> $project->save();
=> true

***all items are an array of objects 
>>> App\Project::all();
=> Illuminate\Database\Eloquent\Collection {#2922
     all: [
       App\Project {#2930
         id: 1,
         title: "the first project",
         description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
         created_at: "2019-04-28 08:36:06",
         updated_at: "2019-04-28 08:36:06",
       },
       App\Project {#2935
         id: 2,
         title: "the second project",
         description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
         created_at: "2019-04-28 08:37:22",
         updated_at: "2019-04-28 08:37:22",
       },
     ],
   }

***can access them with [] notation.
>>> App\Project::all()[1];
=> App\Project {#2938
     id: 2,
     title: "the second project",
     description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
     created_at: "2019-04-28 08:37:22",
     updated_at: "2019-04-28 08:37:22",
   }
>>> App\Project::all()[1];
=> App\Project {#2925
     id: 2,
     title: "the second project",
     description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
     created_at: "2019-04-28 08:37:22",
     updated_at: "2019-04-28 08:37:22",
   }
>>> App\Project::all()[0];
=> App\Project {#2922
     id: 1,
     title: "the first project",
     description: "Lorem ipsum dolar etc sedaris blahlahosdhesb",
     created_at: "2019-04-28 08:36:06",
     updated_at: "2019-04-28 08:36:06",
   }

*** map over the array to bring only the titles for each of them.  
>>> App\Project::all()->map->title;
=> Illuminate\Support\Collection {#2936
     all: [
       "the first project",
       "the second project",
     ],
   }
>>>
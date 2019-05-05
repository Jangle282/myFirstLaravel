<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'task 1',
            'taks 2',
            'task 3',
            'task 4'
        ];
        // return view('welcome', [
        //     'tasks' => $tasks,
        //     'foo' => request('test')
        // ]);

        return view('welcome')->withTasks($tasks)->withFoo('foo');
        // withTasks / withFoo does the same asfirst but in this one just sending a string not somethign from the url
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function vue()
    {
        return view('vue');
    }
}

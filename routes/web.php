<?php
use League\Flysystem\Filesystem;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');


// getting all usually call method index
Route::get('/projects', 'ProjectsController@index');

// get request for form to create new item
Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{project}', 'ProjectsController@show');

// create a new one - store. 
Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/{project}/edit', 'ProjectsController@edit');

Route::patch('/projects/{project}', 'ProjectsController@update');

Route::delete('/projects/{project}', 'ProjectsController@destroy');
// seven behaviours - 
//  get /projects - index
//  get /projects/create - create
//  get projects/id - show
//  post projects/id - store
//  get projects/id/edit? - edit
//  patch projects/id - update
//  delete projects/id - destroy

// can auto generate routes firstly by adding in here
// Route::resource('projects', "ProjectsController");
// when creating Projects Controller run artisan command
// php artisan make:controller ProjectsController -r
// -m Project on the end would also generate a Project model and put the name into the route boilerplace too.
// will create a controller with all the methods needed in boilerplace

Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

// can apply middlesware here or incontroller
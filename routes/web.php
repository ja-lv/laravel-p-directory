<?php

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

Route::get('/', function () { 
    dd(app('foo'));
    return view('welcome');
});

/*
    GET /projects (index)
    POST /projects (store)
    PUT 
    PATCH /projects/1 (update)
        ----update, some use interchangeably. Lets stick to Patch
    DELETE /projects/1 (destroy)

    GET /projects/1 (show)
    GET /projeccts/1/edit (update)
*/

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
//CRUD is popular so we can do
//view from php artisan route:list

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

// incompletes
Route::post('completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('completed-tasks/{task}', 'CompletedTasksController@destroy');
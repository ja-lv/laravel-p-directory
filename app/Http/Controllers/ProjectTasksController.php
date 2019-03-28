<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function store(Project $project){
        $project->addTask(request()->validate([
            'title' => ['required', 'min:3', 'max:255'], 
            'description' => ['required', 'min:3']
        ])); 

        return back();
     }
}

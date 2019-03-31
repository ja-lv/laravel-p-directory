<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

use App\Project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = Project::all();

        return view('projects.index', ["projects" => $projects]);
    } 

    public function create(){
        return view('projects.create');
    }

    public function show(Project $project){
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project){ //example.com/projects/1/edit
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){
        $project->update(
            request()->validate([
                'title' => ['required', 'min:3', 'max:255'], 
                'description' => ['required', 'min:3']
            ])
        );

        return redirect('projects');
    }

    public function destroy(Project $project){
        $project->delete();

        return redirect('projects');
    }

    public function store(){ 
        Project::create(
            request()->validate([
                'title' => ['required', 'min:3', 'max:255'], 
                'description' => ['required', 'min:3']
            ])
        );

        return redirect('/projects');
    }
}

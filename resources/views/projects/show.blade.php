@extends('layout')

@section('content')
    <div class="section">
        <div class="columns is-multiline">
            <div class="column is-full">
                <p class="title">{{$project->title}}</p>
            </div>
            <div class="column  is-full">
                <p class="text">{{$project->description}}</p>
            </div>
            <div class="column  is-full">
                <div class="menu box">
                    @if($project->tasks->count())
                        <p class="menu-label has-text-info">Tasks</p>
                
                        <ul class="menu-list">

                                @foreach ($project->tasks as $task)
                                    <li>
                                        <p class="title {{$task->completed ? 'is-complete' : ''}}">{{$task->title}}</p>
                                        <p class="text {{$task->completed ? 'is-complete' : ''}}">{{$task->description}}</p>
                                        <form action="/completed-tasks/{{$task->id}}" method="POST">
                                            @if($task->completed)
                                                @method('DELETE')
                                            @endif

                                            @csrf
                                            <label for="completed" class="checkbox">
                                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                                                <span class="has-text-primary">complete</span>
                                            </label>
                                        </form>
                                    </li>
                                    <hr>  
                                @endforeach

                        </ul>
                    @else
                        <p class="menu-label has-text-info">No Tasks</p>
                    @endif
                </div>
                    {{-- add new task --}}
                <form method="POST" action="/projects/{{$project->id}}/tasks" class="box">
                    @csrf
                    <div class="field">
                        <label for="title" class="label">New Task Title</label>
                        <div class="control">
                            <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Task Name" required value="{{old('description')}}">
                        </div>
                    </div>
                    <div class="field">
                        <label for="description" class="label">New Task Description</label>
                        <div class="control">
                            <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="description" placeholder="Description" required value="{{old('description')}}">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link">Add Task</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="column is-full">
                <a href="{{$project->id}}/edit" class="button is-info">Edit</a>
            </div>
            <div class="column is-1">
                <a href="./" class="button is-info">Back to projects</a>
            </div>
        </div>

    @include ('errors')
    </div>

@endsection
@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <div class="columns is-multiline">
        <div class="column is-half is-offset-one-quarter">
            <form action="/projects/{{$project->id}}" method="POST">
                @method('DELETE')
                @csrf

                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
                    </div>
                </div>
                <div class="field">
                    <label for="description" class="label">Description</label>
                    <div class="control">
                    <textarea name="description" class="textarea" >{{$project->description}}</textarea>
                    </div>
                </div> 

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Update</button>
                    </div>
                </div> 
            </form>
        </div>

        <div class="column is-half is-offset-one-quarter">
            <form action="/projects/{{$project->id}}" method="POST">
                @method('DELETE')
                @csrf

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-danger">Delete</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    
@endsection
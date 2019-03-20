@extends('layout')

@section('content')
    <h1 class="title">Create a new project</h1>

    <div class="section">
        <form action="/projects" method="POST">
            @csrf
            
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" class="input" placeholder="Project Title">
                </div>
            </div>

            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <textarea name="description" class="textarea" placeholder="Project description"></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Create Project</button>
                </div>
            </div>
        </form>
    </div>
@endsection

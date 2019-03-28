@extends('layout')

@section('content')
    <aside class="menu box">
        <p class="menu-label has-text-info">Projects</p>

        <ul class="menu-list">
            @foreach ($projects as $project)
                <li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
            @endforeach
        </ul>
    </aside>
    <div class="level">
        <div class="level-item level-right">
            <a href="/projects/create" class="level-item button is-link">Add</a>
        </div>
    </div>

@endsection
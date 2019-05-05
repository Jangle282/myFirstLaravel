@extends('layout')

@section('content')
<h1>Projects</h1>

@foreach ($projects as $project)
<li>
    <a href="/projects/{{ $project->id }}">{{$project->title}}</a>
</li>
@endforeach

<br>
<a href="/projects/create">Create a Project</a>
@endsection

@section ('title') Projects
@endsection
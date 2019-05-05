@extends('layout')

@section('content')
<h1>Edit a Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">
  <!-- {{ method_field("PATCH") }} is the same as the below-->
  @method("PATCH")
  {{ csrf_field() }}
  <div>
    <input type="text" name="title" value="{{ $project->title }}" />
  </div>
  <div>
    <textarea name="description">{{ $project->description }}</textarea>
  </div>
  <button type="submit">Update Project</button>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
  @method("DELETE")
  {{ csrf_field() }}
  <button type="submit">Delete Project</button>
</form>

<div>
  <ul>
    @foreach ( $errors->all() as $error )
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>

@endsection

@section('title')
Edit a project
@endsection
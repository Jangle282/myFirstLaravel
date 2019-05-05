@extends('layout')

@section('content')
<h1>{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

@if ($project->tasks->count())
<div>
  <h2>Tasks</h2>
  <ul>
    @foreach ($project->tasks as $task)
    <li>
      <form action="/tasks/{{ $task->id }}" method="POST">
        @method("PATCH")
        @csrf
        <input onChange="this.form.submit()" type="checkbox" name="completed" {{ $task->completed ? 'checked' : "" }}
          id="completed">
        <label class="checkbox {{ $task->completed ? 'isComplete' : '' }}" for="completed">{{ $task->description }}
        </label>
      </form>
    </li>
    @endforeach
  </ul>
</div>
@endif

<div>
  <h2>Add a Task</h2>
  <form method="POST" action="/projects/{{ $project->id }}/tasks">
    @csrf
    <label for="description">Task description</label>
    <input required type="text" name="description" id="description">
    <button action="submit">Create Task</button>
  </form>
</div>

@include('errors')


<a href="/projects/{{ $project->id }}/edit">Edit this project</a>


@endsection

@section('title')
{{ $project->title }}
@endsection
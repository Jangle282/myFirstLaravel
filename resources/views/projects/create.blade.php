@extends('layout')

@section('content')
<h1>Create a project</h1>

<form method="POST" action="/projects">

  {{ csrf_field() }}

  <div>
    <input type="text" name="title" value="{{ old('title') }}" placeholder="project title" />
    <!-- class="name {{ $errors->has('title') ? 'classname1' : '' }}" 
    old('inut field name') - helper function called old() will retain user input on fields if errors are thrown
  -->
  </div>

  <div>
    <textarea name="description" placeholder="project description">{{ old('description') }}</textarea>
  </div>


  <button type="submit">Create Project</button>
  @include('errors')
</form>


@endsection


@section('title')
create a project
@endsection
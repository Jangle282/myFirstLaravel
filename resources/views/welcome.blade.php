@extends('layout')

@section('content')
<h1>welcome</h1>

<ul>
  @foreach ($tasks as $task)
  <li>{{ $task }}</li>
  @endforeach
</ul>
<p>{{$foo}}</p>


@endsection


@section('title')
Home
@endsection
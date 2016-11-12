@extends('layout')

@section('content')
<h1>All tasks using layouts</h1>
<ul>
    @foreach ($tasks as $task)
        <li><a href="/tasks/{{ $task->id }}/edit">{{ $task->name }}</a> - {{ $task->user->name }}</li>
    @endforeach
</ul>
@stop

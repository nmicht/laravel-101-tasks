@extends('layout')

@section('content')
{{ session()->get('algo') }}
        <h1>This is the task "{{ $task->name }}"</h1>
        <p>
            Created by: {{$task->user->name}}
        </p>
        <p>
            {{$task->description}}
        </p>
        <h2>Collaborators</h2>
        <ul>
            @foreach ($task->collaborators as $user)
                <li>{{$user->name}} | since {{ $user->pivot->assigned_at }}</li>
            @endforeach
        </ul>
        <hr>
        <button type="button" name="button">Edit</button>
        @can('delete-task',$task)
            <button type="button" name="button">Delete</button>
        @endcan

@stop

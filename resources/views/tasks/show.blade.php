@extends('layout')

@section('content')
        <h1>Task: "{{ $task->name }}"</h1>
        <p>
            Created by: {{$task->user->name}}
        </p>
        <p>
            {{$task->description}}
        </p>
        <p>
            {{$task->project->name}}
        </p>
        <p>
            Color: {{$task->color}}
        </p>
        <h2>Collaborators</h2>
        <ul>
            @foreach ($task->collaborators as $collaborator)
                <li>{{$collaborator->name}} | since {{ $collaborator->pivot->assigned_at }}</li>
            @endforeach
        </ul>
        <hr>
        <button type="button" name="button">Edit</button>
        @can('delete-task',$task)
            <button type="button">Delete</button>
        @endcan

@stop

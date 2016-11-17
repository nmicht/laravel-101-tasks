@extends('layout')

@section('content')
<div class="">
    <h1>Tareas propias</h1>
    <ul>
        @foreach ($user->ownedTasks as $task)
        <li>{{$task->name}}</li>
        @endforeach
    </ul>
</div>

<div class="">
    <h1>Tareas asignadas</h1>
    <ul>
        @foreach ($user->collaboratingTasks as $task)
        <li>{{$task->name}} | {{$task->pivot->assigned_at}}</li>
        @endforeach
    </ul>
</div>
@stop

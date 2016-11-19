@extends('layout')

@section('content')
@if( session()->has('flash_msg') )
<div class="alert alert-{{ session()->get('flash_type') }} alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{ session()->get('flash_msg') }}
</div>
@endif

<h1>All tasks using layouts</h1>
<ul>
    @foreach ($tasks as $task)
        <li>
            @if($task->owned)
            <span class="glyphicon glyphicon-user"></span>
            @endif
            <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a> | {{ $task->priority }} | {{ $task->created_at->diffForHumans() }}

            <form action="/tasks/{{ $task->id }}" method="post">{{ method_field('DELETE')}} {{ csrf_field() }}
                <button type="submit" name="button">Eliminar</button>
            </form>

        </li>
    @endforeach
</ul>

{!! $tasks->render() !!}

@stop

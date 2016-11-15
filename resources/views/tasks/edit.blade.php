@extends('layout')

@section('content')
        <h1>You're editing task {{ $task->name }}</h1>
        <form action="/tasks/{{ $task->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $task->name}}">
            </div>
            <div class="">
                <label for="description">Description</label>
                <input type="text"
                       name="description"
                       value="{{ $task->description }}">
            </div>
            <div class="">
                <label for="color">Color</label>
                <input type="text" name="color" value="{{ $task->color}}">
            </div>
            <div class="">
                <label for="priority">Priority</label>
                <input type="number" name="priority" value="{{ $task->priority}}">
            </div>
            <button type="submit" name="button">Edit</button>
        </form>
@stop

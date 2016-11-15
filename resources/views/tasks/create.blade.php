@extends('layout')

@section('content')
       <form action="/tasks" method="post">
            {{ csrf_field() }}
            <div class="">
                <label for="name">Name</label>
                <input type="text" name="name" value="">
            </div>
            <div class="">
                <label for="description">Description</label>
                <input type="text" name="description" value="">
            </div>
            <div class="">
                <label for="color">Color</label>
                <input type="text" name="color" value="">
            </div>
            <div class="">
                <label for="priority">Priority</label>
                <input type="number" name="priority" value="">
            </div>
            @foreach($projects as $project)
                <input type="radio" name="project_id" value="{{$project->id}}">
                <label for="">{{$project->name}}</label>
            @endforeach
            <button type="submit" name="button">Create</button>
        </form>
@stop

@extends('layout')

@section('content')

    @if(count($errors->all()))
    <div class="danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
       <form action="/tasks" method="post">
            {{ csrf_field() }}
            <div class="">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{ old('description') }}">
            </div>
            <div class="">
                <label for="color">Color</label>
                <input type="text" name="color" value="{{ old('color') }}">
            </div>
            <div class="">
                <label for="priority">Priority</label>
                <input type="number" name="priority" value="{{ old('priority')}}">
            </div>
            @foreach($projects as $project)
                <input type="radio" name="project_id" value="{{$project->id}}">
                <label for="">{{$project->name}}</label>
            @endforeach
            <button type="submit" name="button">Create</button>
        </form>
@stop

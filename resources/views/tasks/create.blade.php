@extends('layout')

@section('content')

    @if(count($errors->all()))
    <div class="danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
       <form class="form-horizontal" action="/tasks" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-lg-2 control-label" for="name">Name <span class="required">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label" for="description">Description</label>
                <input class="form-control" type="text" name="description" value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label" for="color">Color</label>
                <input class="form-control" type="text" name="color" value="{{ old('color') }}">
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label" for="priority">Priority <span class="required">*</span></label>
                <input class="form-control" type="number" name="priority" value="{{ old('priority')}}">
            </div>
            <div class="form-group">
                @foreach($projects as $project)
                <input type="radio"
                       name="project_id"
                       value="{{$project->id}}"
                       @if(old('project_id') == $project->id) checked @endif>
                <label for="">{{$project->name}}</label><br>
                @endforeach
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label" for="collaborators">Collaborators</label>
                <select class="form-control" name="collaborators[]" multiple size=10>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">
                        {{$user->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-large btn-success" type="submit">Create</button>
        </form>
@stop

@extends('layout')

@section('content')
{{ session()->get('algo') }}
        <h1>This is the task "{{ $task->name }}"</h1>
        <form class="" action="index.html" method="post">
            <div class="">
                <label for="name">Field 1</label>
                <input type="text" name="name" value="" disabled>
            </div>
            <div class="">
                <label for="name">Field 2</label>
                <input type="text" name="name" value="" disabled>
            </div>
            <div class="">
                <label for="name">Field 3</label>
                <input type="text" name="name" value="" disabled>
            </div>
            <div class="">
                <label for="name">Field 4</label>
                <input type="text" name="name" value="" disabled>
            </div>
        </form>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasks</title>
    </head>
    <body>
        <h1>All tasks</h1>
        <ul>
            @foreach ($tasks as $task)
                <li><a href="/tasks/{{ $task->id }}/edit">{{ $task->name }}</a></li>
            @endforeach
        </ul>
    </body>
</html>

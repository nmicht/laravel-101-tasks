<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projects</title>
    </head>
    <body>
        <h1>All projects</h1>
        <ul>
            @forelse ($projects as $project)
                <li>{{ $project->name }}</li>
                <ul>
                    @forelse ($project->tasks as $task)
                        <li>{{$task->name}} | {{$task->user->name}}</li>
                    @empty
                        No hay tareas
                    @endforelse
                </ul>
            @empty
                <p>
                    No hay proyectos
                </p>
            @endforelse
        </ul>
    </body>
</html>

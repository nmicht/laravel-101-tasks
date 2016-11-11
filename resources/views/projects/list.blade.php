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
            @empty
                <p>
                    No hay proyectos
                </p>
            @endforelse
        </ul>
    </body>
</html>

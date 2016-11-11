<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit task</title>
    </head>
    <body>
        <h1>You're editing task {{ $task->name }}</h1>
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $task->name}}">
            </div>
            <div class="">
                <label for="description">Description</label>
                <input type="text"
                       name="description"
                       value="{{ $task->description}}">
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
        </form>
    </body>
</html>

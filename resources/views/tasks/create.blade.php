<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create task</title>
    </head>
    <body>
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
            <button type="submit" name="button">Create</button>
        </form>
    </body>
</html>

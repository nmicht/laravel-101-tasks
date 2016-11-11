<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obteniendo tareas de la BD con query builder
        //$tasks = DB::table('tasks')->get();

        //Obtener todas las tareas con Eloquent
        $tasks = Task::all();

        return view('tasks.list',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Creo un task
        // $task = new Task;
        //
        // Asigno sus valores uno por uno
        // $task->name = $request->name;
        // $task->description = $request->description;
        // $task->color = $request->color;
        // $task->priority = $request->priority;
        //
        // Guardo el task
        // $task->save();

        //Creo y guardo el task usando el request completo
        Task::create($request->all());

        //Me redirijo a la lista de tasks
        return redirect('tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //Obtengo el task de la base de datos
        //$task = DB::table('tasks')->where('id',$task)->first();

        //Obtener con Eloquent
        //$task = Task::find($task);
        //$task = Task::where('id',$task)->first();
return $task;
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($task)
    {
        //
    }
}

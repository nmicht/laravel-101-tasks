<?php

namespace App\Http\Controllers;

use Auth;
use Gate;
use App\Models\Task;
use App\Models\Project;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    // function __construct(){
    //     $this->middleware('auth');
    //
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('algo','este es el valor');

        //Obteniendo tareas de la BD con query builder
        //$tasks = DB::table('tasks')->get();

        //Obtener todas las tareas con Eloquent
        $tasks = Task::all()->load('user');

        return view('tasks.list',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();

        return view('tasks.create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
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

        //Validamos el formulario
        // $messages = [
        //         'name.required' => 'El campo :atribute es requerido.',
        //     'priority.required' =>
        // ]
        // $this->validate($request,[
        //     'name' => 'alpha_num|required|max:255|unique:tasks',
        //     'priority' => 'required'
        // ],$messages);

        //Creo y guardo el task usando el request completo
        $data = $request->all();

        //esto esta harcodeado feamente
        // @todo corregir para que use la sesión
        //$data['user_id'] = Auth::user()->id;

        $task = Task::create($data);

        //Asignando el creador pero como parte de la relación
        // $task->user()->attach(Auth::user()->id);
        //
        // //Asignando al creador como colaborador
        // $task->collaborators()->attach(Auth::user()->id,['assigned_at'=>'2016-11-16','allow'=>3]);
        //
        // $task->collaborators()->saveMany(Auth::user());
        //
        // $task->collaborators()->attach($request->collaborators);

        //Defino el mensaje flash de que si se creó
        session()->flash('flash_msg','Se creó exitosamente la tarea'.$data['name']);
        session()->flash('flash_type','success');

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

        $task->load('user','collaborators');

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
     * @param  \Illuminate\Http\StoreTaskRequest  $request
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTaskRequest $request, Task $task)
    {
        $task->name = $request->name;
        $task->description = $request->description;
        $task->color = $request->color;
        $task->priority = $request->priority;
        $task->save();

        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //Le pregunto a mi gate si no puedo hacer lo que quiero
        //le mando la tarea porque la necesita para validar
        //no le mando el usuario porque ya es parte de mi auth provider
        // if (Gate::denies('delete-task', $task)) {
        //     session()->flash('flash_msg','You shall no pass');
        //     session()->flash('flash_type','danger');
        //     return back();
        // }

        if (Auth::user()->cannot('delete-task',$task)){
            //Manda vista de error que ya se tiene dentro de resources/views/errors
            abort(403,'Acción no permitida');
        }

        $task->delete();
        return back();
    }
}

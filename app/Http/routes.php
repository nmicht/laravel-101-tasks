<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Rutas de tareas

//Listar todos los tasks
Route::get('tasks','TaskController@index');

//Mostrar el formulario de creacion
Route::get('tasks/create','TaskController@create');

//Crear el task
Route::post('tasks','TaskController@store');

//Muestra la vista de edicion
Route::get('tasks/{task}/edit','TaskController@edit');

//Edita el task
Route::put('tasks/{task}','TaskController@update');

//Muestra un task
Route::get('tasks/{task}','TaskController@show');

//Elimina un task
Route::delete('tasks/{task}','TaskController@destroy');

//Definiendo el modelo para ligar las rutas con los modelos
Route::model('task', 'App\Models\Task');
Route::model('project', 'App\Models\Project');

//Rutas de tareas
Route::get('projects','ProjectController@index');
Route::get('projects/create','ProjectController@create');
Route::post('projects','ProjectController@store'); //Crear
Route::get('projects/{project}/edit','ProjectController@edit')->where('project','[0-9]+');
Route::put('projects/{project}','ProjectController@update')->where('project','[0-9]+'); //Editar
Route::get('projects/{project}','ProjectController@show')->where('project','[0-9]+');
Route::delete('projects/{project}','ProjectController@destroy')->where('project','[0-9]+'); //Eliminar

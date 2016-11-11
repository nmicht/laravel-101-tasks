<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Estamos fingiendo las tareas
        $projects = Project::all();

        return view('projects.list',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        $project = Project::find($project);
        
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($project)
    {
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($project)
    {
        //
    }
}

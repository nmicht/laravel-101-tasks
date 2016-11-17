<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Defino cuales son los campos que si voy a permitir en acciones
    //masivas de asignación, como cuando hago el create con el request
    //completo, solo estos se van a asignar, todo lo demas que le
    //mande se va a ignorar.
    protected $fillable = ['name','description','color','priority','project_id','user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function collaborators(){
        return $this->belongsToMany('App\Models\User');
    }
}

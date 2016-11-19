<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Defino cuales son los campos que si voy a permitir en acciones
    //masivas de asignación, como cuando hago el create con el request
    //completo, solo estos se van a asignar, todo lo demas que le
    //mande se va a ignorar.
    protected $fillable = ['name','description','color','priority','project_id','user_id'];

    // protected $casts = [
    //     'priority' => 'boolean'
    // ];

    /**
     * [getPriorityAttribute description]
     * @param  [type] $priority [description]
     * @return [type]           [description]
     */
    public function getPriorityAttribute($priority){
        switch($priority){
            case 0: return 'Undefined';
            case 1: return 'Very low';
            case 2: return 'Low';
            case 3: return 'Normal';
            case 4: return 'High';
            case 5: return 'Very High';
        }
    }

    public function setColorAttribute($value){
        $this->attributes['color'] = strtoupper($value);
    }

    public function scopePriority($query) {
        return $query->orderBy('priority', 'desc');
    }

    /**
     * scope para traer tareas creadas hace n días
     * @param  [type] $query [description]
     * @param  integer $days  [description]
     * @return [type]        [description]
     */
    public function scopeSinceDays($query, $days){
        $dt = new Carbon();
        $date = $dt->subDays($days);
        return $query->where('created_at','>=',$date);
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function collaborators(){
        return $this->belongsToMany('App\Models\User')->withPivot('assigned_at','allow');
    }
}

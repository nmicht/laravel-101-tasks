<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //Creo la regla para la eliminación de tareas
        //de modo que solo se podrá borrar si el usuario es el dueño
        //de la tarea y su prioridad es diferente de cero
        $gate->define('delete-task', function ($user, $task) {
            return ($user->id === $task->user_id && $task->priority !== 0);
        });
    }
}

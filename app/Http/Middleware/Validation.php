<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class Validation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //$request['name'] = 'esta es una nueva tarea';
        // $now = new Carbon();
        //
        // if() {
        //     session()->flash('flash_msg','No se puede eliminar el task pues ya pasó su tiempo permitido');
        //     return back();
        // }

        return $next($request);
    }
}

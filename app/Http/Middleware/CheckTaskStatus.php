<?php

namespace App\Http\Middleware;

use Closure;

class CheckTaskStatus
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
        if($request->status){
            if($request->status==='Done'||$request->status==='View'||$request->status==='In Progress'){
                return $next($request);
            }
            return response("Wrong Status(May be only 'Done'/'View'/'In Progress'");
        }
        return $next($request);

    }
}

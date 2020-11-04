<?php

namespace App\Http\Middleware;

use Closure;

class verificaedad
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

        if($request->edad <=17){

            return abort(400);
        }

        return $next($request);
    }
}

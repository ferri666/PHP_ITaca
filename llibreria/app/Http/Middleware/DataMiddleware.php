<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

    echo "Avui es ".date('d/m/y').".";

        return $next($request);
    }
}

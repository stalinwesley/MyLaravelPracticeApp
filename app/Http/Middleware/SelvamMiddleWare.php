<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SelvamMiddleWare
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
        // dd("asdasd");
        // return "Selvam Middleware";
        return $next($request);
    }
}

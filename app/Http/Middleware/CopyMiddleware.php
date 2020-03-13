<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;;

class CopyMiddleware
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
        if (Auth::guest() || (Auth::user()->level != 'Copywriter' && Auth::user()->level != 'Content Admin' && Auth::user()->level != 'Administrator'))
        {
        return new Response(view('unauthorized')->with('role', 'Copywriter or Content Admin or Administrator'));
        }
        return $next($request);
    }
}

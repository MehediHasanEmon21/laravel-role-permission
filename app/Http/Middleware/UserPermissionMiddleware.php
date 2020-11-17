<?php

namespace App\Http\Middleware;



use Closure;

class UserPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    use \App\Traits\UserPermission;

    public function handle($request, Closure $next)
    {
        if ($this->checkRequestPermission()) {
            return response()->view('welcome');
        }
        return $next($request);
    }
}

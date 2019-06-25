<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
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
        return $next($request);
    }
    public function handle($request, Closure $next, $roles)
    {
        $rolesArray= explode("|",$roles);
        if (! $request->user()->hasAnyRoles($roleArray)) {
            return redirect()->route('home')->with(['permission'=>"Action non autorisée"]);
        }

        return $next($request);
    }
}

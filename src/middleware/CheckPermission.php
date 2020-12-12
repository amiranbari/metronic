<?php

namespace App\Http\Middleware\Panel;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();
        if($user->level == 0)
            return $next($request);
        if($user->level >= 4 || !$user->hasPermissionTo($request->method()."-/".$request->route()->uri))
            return abort(404);
        return $next($request);
    }
}

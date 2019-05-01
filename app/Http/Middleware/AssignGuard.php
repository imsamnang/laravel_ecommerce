<?php

namespace App\Http\Middleware;

use Closure;

class AssignGuard
{
  public function handle($request, Closure $next, $guard = null, $redirectTo = '/login')
  {
    if (!Auth::guard($guard)->check()) {
        return redirect($redirectTo);
    }
    Auth::shouldUse($guard);
    return $next($request);
  }
}

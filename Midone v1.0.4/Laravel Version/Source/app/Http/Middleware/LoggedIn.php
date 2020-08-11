<?php

namespace App\Http\Middleware;

use Closure, View, Route;

class LoggedIn
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        if (!is_null(request()->user())) {
            return redirect('/');
        } else {
            return $next($request);
        }
    }
}

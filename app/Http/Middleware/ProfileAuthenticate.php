<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProfileAuthenticate
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
        $AfterLogin = array("user-registration", "user-login");
        if (in_array($request->path(), $AfterLogin)  && $request->session()->has('profile')) {
            return redirect('/');
        }
        return $next($request);
    }
}

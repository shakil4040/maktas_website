<?php

namespace App\Http\Middleware;

use Closure;

use Auth;
use Illuminate\Support\Facades\Session;

class AuthTempMembers
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
        if (false == Auth::guard('temporary-member')->check()) {
            return redirect()->route('login', ["guard" => "temporary-member"]);
        }
        return $next($request);
    }
}

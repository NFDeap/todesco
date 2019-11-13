<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
    {
/*         if (Auth::guard($guard)->check()) {
            return redirect('/admin/login');
        }      */

        if(Auth::guard($guard)->guest()){
            if($request->ajax() || $request->wantsJson()){
                return response('Unauthorized.', 401);
        } else{
            return redirect()->guest('admin.login');
            }
        } 

        return $next($request);
    }
    
 /*    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            if (in_array('admin', $this->guards)) {

                return route('admin.login');
            }

            return route('login');
        }
    } */
}

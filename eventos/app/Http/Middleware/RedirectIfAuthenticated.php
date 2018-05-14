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
        if (Auth::guard($guard)->check()) {
            $correo = Auth::user()->email();
            //$tipo = DB::table('users')->select('tipo')->where('email',$correo)->first();
            $tipo = DB::table('users')->select('name')->where('email',$correo);
            if($tipo == "admin"){
                return redirect('/admin');
            }
            else{
                return redirect('/buscar');
            }
        }
        return $next($request);
    }
}

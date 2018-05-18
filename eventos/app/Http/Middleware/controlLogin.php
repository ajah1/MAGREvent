<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class controlLogin
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
        $correo = Auth::user()->email();
        dd($correo);
        $tipo = DB::table('users')->select('tipo')->where('correo',$correo);
        if($tipo == 'A'){
            //return Redirect::to('/admin');
        }
        else{
            //return Redirect::to('/home');
        }
    }
}

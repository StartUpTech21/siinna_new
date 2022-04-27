<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if(isset(Auth()->User()->level1)){
            if(Auth()->User()->level1 !== "admin"){
                abort(404);
            }
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cs
{
    public function handle(Request $request, Closure $next)
    {
        if(isset(Auth()->User()->level1)){
            if(Auth()->User()->level1 !== "cs"){
                abort(404);
            }
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}

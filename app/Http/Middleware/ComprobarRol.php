<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComprobarRol
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->check() && auth()->user()->id_rol != $role) {
            printl('middleware');
            printl($next($request));
            return $next($request);
        }

        return redirect('/')->with('error', 'No tiene permisos para acceder a esta página');
    }
}

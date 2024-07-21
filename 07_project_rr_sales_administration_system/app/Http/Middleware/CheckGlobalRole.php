<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckGlobalRole
{
    public function handle($request, Closure $next)
    {
        //Operacional não pode
        //dd($request->user());
        if (! $request->user() || (auth()->user()->role == 'localadmin')) {
            abort(404, 'Acesso não autorizado.');
        }

        return $next($request);
    }
}

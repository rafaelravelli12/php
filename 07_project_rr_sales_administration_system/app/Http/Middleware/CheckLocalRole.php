<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLocalRole
{
    public function handle($request, Closure $next)
    {
        //Operacional não pode
        //dd($request->user());
        if (! $request->user() || (auth()->user()->role == 'operacional')) {
            abort(404, 'Acesso não autorizado.');
        }

        return $next($request);
    }
}

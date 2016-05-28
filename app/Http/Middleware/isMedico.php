<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Request;

class IsMedico
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
        // obtem o utilizador que está logado
        $user = Auth::user();

        // caso não seja medico deve ser redirecionaod para a a home
        if ($user->type !== 1) {
            return redirect('/home');
        }

        return $next($request);
    }
}

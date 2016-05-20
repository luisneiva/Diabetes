<?php

namespace App\Http\Middleware;

use App\Utente;

use Auth;
use Closure;
use Request;

class CheckRegistrationStatus
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

        // deve verificar se o utilizador logado já contem informação
        // de utente regista e não seja médico
        if ($user !== null && $user->type !== true) {
            if (Utente::where('user_id', $user->id)->first() === null && Request::path() !== 'utente/create') {
                return redirect('/utente/create');
            }
        } 
        
        return $next($request);
    }
}

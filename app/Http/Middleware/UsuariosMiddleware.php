<?php

namespace App\Http\Middleware;

use Closure;
use App\Usuario;
class UsuariosMiddleware
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
        if(Usuario::where('usuario',$request->input('usuario')) === "asier"){
            return $next($request);
        }else{
            return redirect('welcome');
        }
    }
}

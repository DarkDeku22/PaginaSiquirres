<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Si el usuario NO está autenticado
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['access_denied' => 'Debes iniciar sesión para acceder.']);
        }

        // Si el usuario NO es admin (ajusta según tu lógica)
        if (Auth::user()->id_role !== 1) {
            abort(403, 'Acceso denegado. No tienes permisos para ver esta sección.');
        }

        // Usuario autorizado, continúa
        return $next($request);
    }
}

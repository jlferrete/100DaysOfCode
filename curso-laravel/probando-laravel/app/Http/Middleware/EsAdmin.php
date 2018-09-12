<?php

namespace App\Http\Middleware;

use Closure;

class EsAdmin
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
        // Si pasamos por la ruta el parámetro admin, entrará en naranjas. Si no, redirige a peras.

        if(is_null($request->route('admin'))){
            return redirect()->action('FrutasController@anyPeras')->withInput();
        }

        return $next($request);
    }
}

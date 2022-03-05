<?php

namespace App\Http\Middleware;

use App\Models\Peticion;
use Closure;
use Illuminate\Http\Request;

class requestmiddleware
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
       if ($request->post('created_at')) {
           $data= request('fecha_publicacion');
           Peticion::create([
               'fecha' => $data,
           ]);
       }

        return $next($request);
    }
}

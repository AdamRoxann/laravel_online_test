<?php

namespace App\Http\Middleware;

use Closure;

class HakAkses
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
        // return $next($request);
        if(auth()->user()->hak_akses == 'superadmin'){
            return $next($request);
        } elseif (auth()->user()->hak_akses == 'guru') {
            return $next($request);
        } elseif (auth()->user()->hak_akses == 'siswa') {
            return $next($request);
        }
   
        return redirect(‘home’)->with(‘error’,"You don't have admin access.");
    }
}

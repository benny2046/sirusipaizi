<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            // jika pengunjung tidak login, arahkan mereka ke rute login
            return redirect('/login');
        }
        $user = Auth::user();

        //cek peran pengunjung saat login atau register
        foreach ($roles as $role) {
            if ($user->role === $role) {
                return $next($request);
            }
        }
        //jika peran tidak sesuai, arahkan pengunjung ke rute yang sesuai
        return redirect('/unauthorized');
    }
}

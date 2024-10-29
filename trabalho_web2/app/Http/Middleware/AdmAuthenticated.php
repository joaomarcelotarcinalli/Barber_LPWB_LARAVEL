<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) { 
            $request->session()->regenerate();
            return $next($request);
        }
        return redirect()->route('login')->withErrors(['access' => 'Você não tem permissão para acessar esta área.']);
    }
}

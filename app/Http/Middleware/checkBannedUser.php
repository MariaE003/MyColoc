<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class checkBannedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        
        if ($user && $user->is_banned) { 
            Auth::logout();
            $request->session()->invalidate();//supp session
            $request->session()->regenerateToken();//regenerer token
            
            return redirect()->route('login')->withErrors(['email' => 'votre compte est banner']);
        }
        
        return $next($request);
    }
}

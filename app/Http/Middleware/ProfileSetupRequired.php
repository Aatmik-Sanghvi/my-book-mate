<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ProfileSetupRequired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $getUser = Auth::user();
        if(is_null($getUser->address) || is_null($getUser->state) || is_null($getUser->city) || is_null($getUser->country)){
            return redirect()->route('profile.edit')->with(['warning'=>'Profile should be completed before procedding.']);
        }
        return $next($request);
    }
}

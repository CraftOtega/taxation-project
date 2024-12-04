<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AgentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


    //     if(auth()->user() && auth()->user()->role == 0){


    //         return $next($request);
    //     }

    //   return  redirect('/403');




// if user is not logged in
if(!Auth::check()){

    return redirect()->route('login');

   }

       $UserRole = Auth::user()->role;

//agent admin
if($UserRole == 0){

    return $next($request);


}

elseif($UserRole == 2){

    return redirect()->route('govt-dashboard');


}











    }
}

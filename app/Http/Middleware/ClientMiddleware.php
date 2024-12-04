<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
    //     if(auth()->user() && auth()->user()->role == 1){


    //         return $next($request);
    //     }

    //   return  redirect('/403'); 
    
    


//////////////////////////////////////////////////////
    if(!Auth::check()){

        return redirect()->route('login');

       }


       $authUserRole = Auth::user()->role;

       switch($role){

             case 'admin':

                if($authUserRole == 0){

          return $next($request);


                }


                break;

            case 'vendor':

             if($authUserRole == 1 ){

           return $next($request);
              
              
                  }
                  break;
                  case 'customer':

                    if($authUserRole == 1 ){

                   return $next($request);
                           
 
                         }

                         break;


       }






       switch($role){
   case 0:

    return redirect()->route('admin');
case 1;

return redirect()->route('vendor');

case 2

return redirect()->route('dashboard');
       }


       return redirect()->route('login');
//////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////////

// if user is not logged in
if(!Auth::check()){

    return redirect()->route('login');

   }

       $UserRole = Auth::user()->role;

//super admin
if($UserRole == 1){

    return $next($request);


}
elseif($UserRole == 2){

    return redirect()->route('admin.dashboard');


}



elseif($UserRole == 3){

    return redirect()->route('dashboard');


}


//////////////////////////////




    
}
}

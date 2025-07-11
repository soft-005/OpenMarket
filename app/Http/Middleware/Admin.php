<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Session;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {   
       if(Auth::check()){
            $date = new DateTime(Auth::user()->created_at);
          
            if(!Hash::check((Auth::user()->email.$date->format('d,m,y')), Auth::user()->admin)){
            
                Session::flash('info','you do not have permission!');
                
                //abort(403);
                return redirect()->back();
            }
            if('admin' == $role){
                
                return $next($request);
            }
        }
        abort(401);
    }
}

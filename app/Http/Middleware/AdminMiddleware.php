<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role_as =='1') //admin is 1 , 0 is user
            {
                return $next($request);
            }
            else {
               return redirect('/home')->with('message','Access denied! you are not a Admin');
            }
       
        }
       else
       {
        return redirect('/login')->with('message','Please login first');
       } 
    }
}

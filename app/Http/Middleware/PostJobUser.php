<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;



use Closure;

class PostJobUser
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

      if(Auth::check()){
          if(Auth::user()->postExist()){
         return redirect('/profile');
          }
      }
      return $next($request);

     }

    
}

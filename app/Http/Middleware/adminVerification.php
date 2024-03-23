<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (session()->exists('email') && session()->get('rol')=== '4') {
            # code...
            // if(session()->exists('email')   ){
                
                if(session()->get('rol') != ""){
            return $next($request);
        }else{
            return redirect("/");

            // return "error";

        }
    }
}

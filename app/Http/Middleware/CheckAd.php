<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CheckAd
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
        if(Auth::check() && Auth::user()->role_id <='2'){
            return $next($request);
        }
        Session::flash('notadmin','Chi co admin hoac super admin moi duoc xem trang nay');
        return redirect()->route('backend');

    }
}

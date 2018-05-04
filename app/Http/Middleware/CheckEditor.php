<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CheckEditor
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
        if(Auth::check() && Auth::user()->role_id =='3'|| Auth::user()->role_id =='1'){
            return $next($request);
        }
        Session::flash('noteditor','Chi co editor hoac superadmin  moi duoc xem trang nay');
        return redirect()->route('backend');

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class CheckAdmin
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
        if(!Auth::check())
        {
            return redirect(route('login.admin'));
        }
        else if(Auth::user()->role->name != config('customer.user.isAdmin'))
        {
            return redirect(route('login.admin'))->with('alert', 'Bạn không đủ quyền truy cập');
        }

        return $next($request);
    }
}

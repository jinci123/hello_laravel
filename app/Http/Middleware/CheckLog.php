<?php

namespace App\Http\Middleware;

use Closure;

class CheckLog
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
        //判断用户是否已经登录(用框架自带的Auth类里的check方法)
        if (!\Auth::check()) {
            return redirect()->route('log');   //没登录时重定向到登录页面
        }
        return $next($request);
    }
}

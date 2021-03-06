<?php

namespace App\Http\Middleware;

use Closure;
use App;

class CheckLanguage
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
        if($request->session() || $request->session()->has('language')) {
            App::setLocale($request->session()->get('language'));
        }

        return $next($request);
    }
}

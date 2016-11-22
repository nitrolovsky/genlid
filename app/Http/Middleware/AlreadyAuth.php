<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;

class AlreadyAuth
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
        if (Session::get('id')) {
            Session::flash('info', 'Вы уже прошли аутентификацию.');
            return Redirect::back();
        }
        return $next($request);
    }
}

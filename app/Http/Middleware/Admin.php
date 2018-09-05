<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $auth;

    private $session;

    public function __construct(Guard $auth, Store $session)
    {
        $this->auth = $auth;

        $this->session = $session;
    }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('login');
            }
        }else{

            $id = Auth::user()->id;
            $result = \App\RolUser::where('user_id',$id)->first();

            if($result == '' or $result->rol_id <> 1)
            {
                if ($request->ajax())
                {
                    return response('Unauthorized.', 401);
                }
                else
                {
                    return redirect()->guest('/');
                }
            }

        }



        return $next($request);
    }
}

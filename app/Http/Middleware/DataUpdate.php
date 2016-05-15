<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class DataUpdate {


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
            $result = \App\DataUpdate::where('user_id',$id)->first();

            if($result == '')
            {
                if ($request->ajax())
                {
                    return response('Unauthorized.', 401);
                }
                else
                {
                    return redirect()->guest('student/data_update/create');
                }
            }

        }



        return $next($request);
    }
}
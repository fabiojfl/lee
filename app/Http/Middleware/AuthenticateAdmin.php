<?php

namespace CodeCommerce\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AuthenticateAdmin
{
	protected $auth;
	
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }
        if(!$this->auth->user()->is_admin){
            return redirect()->guest('auth/login');
        }
        return $next($request);
    }
}
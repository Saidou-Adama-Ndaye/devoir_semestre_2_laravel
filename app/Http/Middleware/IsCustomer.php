<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class IsCustomer
{
    protected $auth;
    protected $route;


    public function __construct(Guard $auth, Route $route){
        $this->auth = $auth;
        $this->route = $route;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->auth->user()->is_system_admin == 1){
            return new Response('<h1 style="margin-top: 150px; color:dimgray"><center>401<br>Access Denied</center></h1>', 401);
        }
        return $next($request);
    }
}

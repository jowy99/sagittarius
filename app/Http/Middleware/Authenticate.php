<?php
declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory;
use Illuminate\Http\Request;
use Closure;

class Authenticate
{
    protected Factory $auth;

    public function __construct(Factory $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next): mixed
    {
        return $next($request);
        /*if ($this->auth->guard()->check()) {
            if ($this->auth->guard()->user()->is_admin) {
                return $next($request);
            }

            return redirect()->route('crm.dashboard');
        }

        return redirect('/');*/
    }
}

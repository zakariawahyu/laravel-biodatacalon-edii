<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
    $session = $request->session()->get('role');
      if ($session == 'user') {
        return $next($request);
      }
      return redirect('login');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class ThreadMiddleware
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
      $data = [ $title => $item-> title, $content => $item-> content];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}

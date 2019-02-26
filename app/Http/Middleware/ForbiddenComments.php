<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenComments
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
        $words = ['hate','stupid','idiot'];
        foreach($words as $word){
            if(strpos(strtoupper($request->content), strtoupper($word))){
                return response(view('teams.forbidden-comment'));
            }
        }
        return $next($request);
    }
}

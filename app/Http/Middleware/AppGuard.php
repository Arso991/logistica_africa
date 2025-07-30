<?php

namespace App\Http\Middleware;

use App\Models\AppBasic;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppGuard
{
    public function handle(Request $request, Closure $next)
    {
        if(AppBasic::first()->platform_current_state == 'PAUSE') {
            return redirect('/side-under-maintenance');
        }

        return $next($request);
    }
}

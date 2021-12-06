<?php

namespace App\Http\Middleware;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\Route;
class AccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $admin;
    public function __construct(Admin $admin){
        $this->admin = $admin;
    }

    public function handle($request, Closure $next)
    {
        if (Auth::user()->hasAnyRoles(['admin','author'])) {
            return $next($request);
        }
        return redirect('/dashboard');
    }
}

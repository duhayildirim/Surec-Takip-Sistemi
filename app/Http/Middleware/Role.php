<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$role)
    {
        $roles = [
            "admin"=>"Admin",
            "mudur"=>"Müdür",
            "isci"=>"İşçi",
        ];
        if (count($role)>=1)
        {
            if ($this->existRoles($roles,$role))
            {
                return $next($request);
            }
        }return redirect()->route('anasayfa');
    }

    private function existRoles($roles,$role){
        foreach($role as $value)
        {
            if ($this->hasRole($roles,$value))
            {
                return true;
            }
        }return false;
    }

    private function hasRole($roles,$role){
        if (key_exists($role,$roles))
        {
            if (\Auth::user()->rol==$roles[$role])
            {
                return true;
            }
        }return false;
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function authenticated(Request $request, $user)
    {
        if ($user->isAdmin){
            return redirect()->route('admin.home');
        }
        return redirect('/landing');
    }
}

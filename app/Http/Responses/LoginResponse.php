<?php

namespace App\Http\Responses;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        $user = $request->user();

        if ((int) $user->role === \App\Models\User::ROLE_ADMIN) {
            return redirect()->intended('/admin');
        }
        return redirect()->intended('/personal');
    }
}

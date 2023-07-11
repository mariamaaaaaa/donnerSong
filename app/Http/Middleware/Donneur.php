<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;

class Donneur extends Authenticate
{
    protected function redirectTo($request)

    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',

            // Ajoutez ici les règles de validation pour les autres champs requis
        ]);
        return $request->expectsJson() ? null : route('donneur');
    }
}

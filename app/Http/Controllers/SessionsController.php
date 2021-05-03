<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $data = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Introduzca el correo',
            'email.email' => 'El correo no es válido',
            'password.required' => 'Introduzca la contraseña',
        ]);

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Las credenciales introducidas no corresponden a ningún usuario'
            ]);
        }

        return redirect()->route('home');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'surname' => ['required', 'min:10', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required', 'same:password'],
            'address' => 'required',
            'postalCode' => ['required', 'regex:/[0-9]{5}/'],
            'phone' => ['required', 'regex:/[0-9]{3} [0-9]{2} [0-9]{2} [0-9]{2}/']
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'name.min' => 'El nombre debe tener más de 2 caracteres',
            'name.max' => 'El nombre debe tener menos de 50 caracteres',
            'surname.required' => 'El campo apellidos es obligatorio',
            'surname.min' => 'Los apellidos deben tener más de 10 caracteres',
            'surname.max' => 'Los apellidos deben tener menos de 50 caracteres',
            'email.required' => 'El campo correo es obligatorio',
            'email.email' => 'El correo no es válido',
            'email.unique' => 'El correo ya está en uso',
            'password.required' => 'El campo clave es obligatorio',
            'password.min' => 'La clave debe tener mínimo 6 caracteres',
            'confirm_password.required' => 'Se debe confirmar la clave',
            'confirm_password.same' => 'Las claves no coinciden',
            'address.required' => 'El campo dirección es obligatorio',
            'phone.required' => 'El campo teléfono es obligatorio',
            'phone.regex' => 'El teléfono introducido no es válido',
            'postalCode.regex' => 'El código postal introducido no es válido'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address' => $data['address'],
            'postalCode' => $data['postalCode'],
            'phone' => $data['phone']
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }
}
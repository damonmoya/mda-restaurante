<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'surname' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required', 'same:password'],
            'address' => 'required',
            'postalCode' => ['required', 'regex:/[0-9]{5}/'],
            'phone' => ['required', 'regex:/[0-9]{3} [0-9]{2} [0-9]{2} [0-9]{2}/']
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'name.min' => 'El nombre debe tener mínimo 2 caracteres',
            'name.max' => 'El nombre debe tener máximo 50 caracteres',
            'surname.required' => 'El campo apellidos es obligatorio',
            'surname.min' => 'Los apellidos deben tener mínimo 10 caracteres',
            'surname.max' => 'Los apellidos deben tener máximo 50 caracteres',
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

        User::create($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = request()->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'surname' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email,'.$user->id],
            'password' => ['nullable', 'min:6'],
            'confirm_password' => 'same:password',
            'address' => 'required',
            'postalCode' => ['required', 'regex:/[0-9]{5}/'],
            'phone' => ['required', 'regex:/[0-9]{3} [0-9]{2} [0-9]{2} [0-9]{2}/']
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'name.min' => 'El nombre debe tener mínimo 2 caracteres',
            'name.max' => 'El nombre debe tener máximo 50 caracteres',
            'surname.required' => 'El campo apellidos es obligatorio',
            'surname.min' => 'Los apellidos deben tener mínimo 2 caracteres',
            'surname.max' => 'Los apellidos deben tener máximo 50 caracteres',
            'email.required' => 'El campo correo es obligatorio',
            'email.email' => 'El correo no es válido',
            'email.unique' => 'El correo ya está en uso',
            'password.min' => 'La clave debe tener mínimo 6 caracteres',
            'confirm_password.required' => 'Se debe confirmar la clave',
            'confirm_password.same' => 'Las claves no coinciden',
            'address.required' => 'El campo dirección es obligatorio',
            'phone.required' => 'El campo teléfono es obligatorio',
            'phone.regex' => 'El teléfono introducido no es válido',
            'postalCode.regex' => 'El código postal introducido no es válido'
        ]);

        if ($request['password'] != null) {
            $request['password'] = bcrypt($request['password']);
        } else {
            unset($request['password']);
        }
        
        $user->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index');
    }
}

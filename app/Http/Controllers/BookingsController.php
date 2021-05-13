<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\User;
use App\Models\Mesa;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Reserva::all();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $mesas = Mesa::all();
        return view('bookings.create', compact('users','mesas'));
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
            'idClient' => ['required'],
            'idTable' => ['required'],
            'date' => ['required', 'date', 'after_or_equal:today,'],
        ], [
            'idClient.required' => 'El id del cliente es obligatorio',
            'idClient.min' => 'El id del cliente debe tener mínimo 1 caracter',
            'idClient.max' => 'El id del cliente debe tener máximo 2 caracteres',
            'idTable.required' => 'El campo mesa es obligatorio',
            'idTable.min' => 'La mesa debe tener mínimo 1 caracter',
            'idTable.max' => 'La mesa tener máximo 2 caracteres',
            'date.required' => 'El campo hora es obligatorio',
        ]);

        Reserva::create($request->all());

        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Reserva::findOrFail($id);
        return view('bookings.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Reserva::findOrFail($id);
        $users = User::all();
        $mesas = Mesa::all();
        return view('bookings.edit', compact('book','users','mesas'));
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
        $book = Reserva::findOrFail($id);

        $data = request()->validate([
            'idClient' => ['required'],
            'idTable' => ['required'],
            'date' => ['required', 'date', 'after_or_equal:today,'],
        ], [
            'idClient.required' => 'El id del cliente es obligatorio',
            'idClient.min' => 'El id del cliente debe tener mínimo 1 caracter',
            'idClient.max' => 'El id del cliente debe tener máximo 2 caracteres',
            'idTable.required' => 'El campo mesa es obligatorio',
            'idTable.min' => 'La mesa debe tener mínimo 1 caracter',
            'idTable.max' => 'La mesa tener máximo 2 caracteres',
            'date.required' => 'El campo hora es obligatorio',
        ]);

        
        $book->update($request->all());

        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Reserva::findOrFail($id);

        $book->delete();

        return redirect()->route('bookings.index');
    }
}
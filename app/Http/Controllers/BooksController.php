<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Reserva::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////required|date|before_or_equal:today
        $data = request()->validate([
            'date' => ['required', 'date', 'after_or_equal:today'],
            'time' => ['required'],
            'table' => ['required'],
            'comments' => ['max:500'],
            ], [
            'name.required' => 'El campo fecha es obligatorio',
            'name.date' => 'La fecha no es valida',
            'name.after_or_equal' => 'La fecha tiene que ser posterior o igual al dia de hoy',
            'time.required' => 'El campo hora es obligatorio',
            'table.required' => 'El campo mesa es obligatorio',
            'comments.max' => 'El campo comentario no puede tener mas de 500 caracteres',
        ]);
        Reserva::create($request->all());
        return redirect()->route('home');
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
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        return redirect()->route('books.index');
    }
}

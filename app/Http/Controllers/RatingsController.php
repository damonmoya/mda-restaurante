<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ratings;

class RatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ratings = Ratings::paginate(10);
        return view('ratings.index', compact('ratings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idClient=auth()->user()->id;
        return view('ratings.create', compact('idClient'));
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
            'rating' => ['required'],
            'comment' => ['required', 'min:10', 'max:100'],
        ], [
            'rating.required' => '¡Debes puntuarnos para enviar tu valoración!',
            'comment.required' => '¡Debes escribir un comentario para enviar tu valoración!',
            'comment.min' => 'El comentario debe tener más de 10 caracteres',
            'comment.max' => 'El comentario debe tener menos de 100 caracteres'
        ]);

        Ratings::create($request->all());

        return redirect()->route('ratings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rating = Ratings::findOrFail($id);
        return view('ratings.show', compact('ratings'));
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
        $rating = Ratings::findOrFail($id);

        $rating->delete();

        return redirect()->route('ratings.index');
    }
}

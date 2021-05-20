<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ratings;

class RatingsController extends Controller
{
    public function index()
    {
        $ratings = Ratings::paginate(8);
        return view('ratings.index', compact('ratings'));
    }

    public function create(Request $request)
    {
        $idClient=auth()->user()->id;
        return view('ratings.create', compact('idClient'));
    }

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

    public function show($id)
    {
        $rating = Ratings::findOrFail($id);
        return view('ratings.show', compact('ratings'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $rating = Ratings::findOrFail($id);

        $rating->delete();

        return redirect()->route('ratings.index');
    }
}

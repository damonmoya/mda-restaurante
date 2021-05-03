<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Producto::all();
        return view('dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dishes.create');
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
            'category' => ['required', 'min:2', 'max:50'],
            'ingredients' => ['required', 'min:2', 'max:100'],
            'price' => ['required', 'min:1'],
            'image' => 'required',
            ], [
            'name.required' => 'El campo nombre es obligatorio',
            'name.min' => 'El nombre debe tener mínimo 2 caracteres',
            'name.max' => 'El nombre debe tener máximo 50 caracteres',
            'category.required' => 'El campo categoria es obligatorio',
            'category.min' => 'El campo categoria debe tener mínimo 2 caracteres',
            'category.max' => 'El campo categoria debe tener máximo 50 caracteres',
            'ingredients.required' => 'El campo categoria es obligatorio',
            'ingredients.min' => 'El campo ingredientes debe tener mínimo 2 caracteres',
            'ingredients.max' => 'El campo ingredientes debe tener máximo 100 caracteres',
            'image.required' => 'El campo imagen es obligatorio',
        ]);
        Producto::create($request->all());
        return redirect()->route('dishes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dish = Producto::findOrFail($id);
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dish = Producto::findOrFail($id);
        return view('dishes.edit', compact('dish'));
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
        $data = request()->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'category' => ['required', 'min:2', 'max:50'],
            'ingredients' => ['required', 'min:2', 'max:100'],
            'price' => ['required', 'min:1'],
            'image' => 'required',
            ], [
            'name.required' => 'El campo nombre es obligatorio',
            'name.min' => 'El nombre debe tener mínimo 2 caracteres',
            'name.max' => 'El nombre debe tener máximo 50 caracteres',
            'category.required' => 'El campo categoria es obligatorio',
            'category.min' => 'El campo categoria debe tener mínimo 2 caracteres',
            'category.max' => 'El campo categoria debe tener máximo 50 caracteres',
            'ingredients.required' => 'El campo categoria es obligatorio',
            'ingredients.min' => 'El campo ingredientes debe tener mínimo 2 caracteres',
            'ingredients.max' => 'El campo ingredientes debe tener máximo 100 caracteres',
        ]);
        $dish = Producto::findOrFail($id);
        $dish->update($request->all());
        return redirect()->route('dishes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Producto::findOrFail($id);

        $dish->delete();

        return redirect()->route('dishes.index');
    }
}

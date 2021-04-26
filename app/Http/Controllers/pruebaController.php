<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas = prueba::all();
        return View::make('prueba.index')->with('pruebas', $pruebas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('prueba.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prueba = new prueba();
        $prueba->name = Input::get('name');
        $prueba->description = Input::get('description');
        $prueba->save();
        return Redirect::to('pruebas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prueba = prueba::find($id);
        return View::make('prueba.show')->with('prueba', $prueba);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prueba = prueba::find($id);
        return View::make('prueba.edit')->with('prueba', $prueba);
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
        $prueba::find($id);
        $prueba->name = Input::get('name');
        $prueba->description = Input::get('description');
        $prueba->save();
        return Redirect::to('pruebas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prueba = prueba::find($id);
        $prueba->delete();
        return Redirect::to('pruebas');
    }
}

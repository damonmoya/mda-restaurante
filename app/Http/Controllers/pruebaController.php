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
        // return View::make('prueba.create');
        return view('prueba.CRU')->with('action', 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Prueba::create($request->all());
        // $prueba = new prueba();
        // $prueba->name = Input::get('name');
        // $prueba->description = Input::get('description');
        // $prueba->save();
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
        // return View::make('prueba.show')->with('prueba', $prueba);
        return view('prueba.CRU')->with('prueba', $prueba, 'action', 'show');
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
        // return View::make('prueba.edit')->with('prueba', $prueba);
        return view('prueba.CRU')->with('prueba', $prueba, 'action', 'edit');
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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $prueba::find($id);
        $prueba->update($request->all());
        // $prueba->name = Input::get('name');
        // $prueba->description = Input::get('description');
        // $prueba->save();
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

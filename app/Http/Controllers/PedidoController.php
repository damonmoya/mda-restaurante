<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Darryldecode\Cart\Cart;


class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();

        if (auth()->check()){
            $user = auth()->user();
            return view('pedido.index')->with('pedidos', $pedidos);
        } else {
            $message_requirelog = 'inicie sesión para realizar pedidos a domicilo';
            return view('sessions.create')->with('message_requirelog', $message_requirelog);
        }
    }

    public function create(Request $request)
    {

        $items = \Cart::getContent();
    
        $array = array(
            "name" => $request->name,
            "surname" => $request->surname,
            "direccion" => $request->address,
            "email" => $request->mail,
            "phone" => $request->phone,
            "items" => $items = \Cart::getContent(),
        );

        dd($array);

        // view the cart items
        // $pedidos = Pedido::all();
        // dd($pedidos);
        return redirect()->back();
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
            // 'title' => 'required',
            // 'description' => 'required',
        ]);
        
        // Prueba::create($request->all());
        return Redirect::to('pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);
        return view('prueba.CRU')->with('pedido', $pedido, 'action', 'show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return view('pedidos.CRU')->with('pedido', $pedido, 'action', 'edit');
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
            // 'title' => 'required',
            // 'description' => 'required',
        ]);
        
        $pedido::find($id);
        $pedido->update($request->all());
        return Redirect::to('pedido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Prueba::find($id);
        $pedido->delete();
        return Redirect::to('pruebas');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCondition;
use Illuminate\Support\Facades\DB;


class PedidoController extends Controller
{
    public function index()
    {
        // $pedidos = Pedido::all();

        if (auth()->check()) {

            $userId = auth()->user()->id;
            $date_actual = date("Y-m-d H:i"); // Fecha actual
            // Query para seleccionar de la BD las entradas de pedidos en curso (date_delivery > date_actual)
            $query_actual = "SELECT * FROM pedidos 
                             WHERE idClient == " . $userId . " AND date_delivery > '" . $date_actual . "'";
            // Query para seleccionar de la BD las entradas de pedidos anteriores
            $query_historic = "SELECT * FROM pedidos 
                               WHERE idClient == " . $userId . " AND date_delivery <= '" . $date_actual . "'";

            // Consultas a la DB
            $pedidos_actual   = DB::select($query_actual);
            $pedidos_historic = DB::select($query_historic);

            $data = [$pedidos_actual, $pedidos_historic];
            return view('pedido.index')->with('data', $data);

        } else {
            $message_requirelog = 'inicie sesión para realizar pedidos a domicilo';
            return view('sessions.create')->with('message_requirelog', $message_requirelog);
        }
    }

    public function create(Request $request)
    {
        // $items = \Cart::getContent();
        // $pedidos = Pedido::all();
        // dd($pedidos);

        $data_cp = file_get_contents("../public/assets/json/postal_codes.json");
        $postal_codes = json_decode($data_cp, true);
                                                    
        if (in_array($request->postalCode, $postal_codes) === False){
            return redirect()->back()->with('bad_code_postal', $request->name);
        }

        if (\Cart::getSubTotal() < 10){
            return redirect()->back()->with('insufficient_quantity', $request->name);
        }


        $array = array(
            "name" => $request->name,
            "surname" => $request->surname,
            "direccion" => $request->address,
            "email" => $request->mail,
            "phone" => $request->phone,
            "postal_code" => $request->postalCode,
            "items" => $items = \Cart::getContent(),
        );

        $pedido = new Pedido;
        $pedido->idClient = auth()->user()->id;
        $pedido->date_send = date("Y-m-d H:i");
        //$pedido->date_delivery = date("d-m-Y H:i:s", strtotime(date("d-m-Y H:i")."+ 1 hour"));
        $pedido->date_delivery = str_replace("T", " ", $request->date_delivery);
        $pedido->address = $request->address;
        $pedido->cost = $request->total;

        $pedido->save();

        \Cart::clear();

        return redirect()->back()->with('success_create_order', $request->name);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     // 'title' => 'required',
        //     // 'description' => 'required',
        // ]);

        // // Prueba::create($request->all());
        // return Redirect::to('pedidos');
    }

    public function show($id)
    {
        // $pedido = Pedido::find($id);
        // return view('prueba.CRU')->with('pedido', $pedido, 'action', 'show');
    }

    public function edit($id)
    {
        // $pedido = Pedido::find($id);
        // return view('pedidos.CRU')->with('pedido', $pedido, 'action', 'edit');
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     // 'title' => 'required',
        //     // 'description' => 'required',
        // ]);

        // $pedido::find($id);
        // $pedido->update($request->all());
        // return Redirect::to('pedido');
    }

    public function destroy(Request $request)
    {
        $pedido = Pedido::find($request->idOrder);
        $pedido->delete();
        return redirect()->back()->with('success_deleted_order', true);
    }
}

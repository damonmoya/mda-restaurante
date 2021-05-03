<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class MenuController extends Controller
{
    public function index()
    {
        $dishes=Producto::all();
        $entrantes = Producto::where('category','Entrantes')->get();
        $pizzas = Producto::where('category','Pizzas')->get();
        $arroces = Producto::where('category','Arroces')->get();
        $ensaladas = Producto::where('category','Ensaladas')->get();
        $pastas = Producto::where('category','Pastas')->get();
        $postres = Producto::where('category','Postres')->get();
        $bebidas = Producto::where('category','Bebidas')->get();
        return view("menu.index", compact('dishes','entrantes','pizzas','arroces','ensaladas','pastas','postres','bebidas'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class MenuController extends Controller
{
    public function index()
    {
        $dishes=Producto::all();
        return view("menu.index", compact('dishes'));
    }


}

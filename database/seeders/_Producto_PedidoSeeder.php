<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class _Producto_PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_productos_pedido')->insert([
            'idOrder' => 01,
            'idProduct' => 01,
            'price' => 10,
            'discount' => 0,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 01,
            'idProduct' => 02,
            'price' => 8,
            'discount' => 0,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 01,
            'idProduct' => 04,
            'price' => 23.6,
            'discount' => 0,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 02,
            'idProduct' => 04,
            'price' => 23.6,
            'discount' => 10,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 02,
            'idProduct' => 04,
            'price' => 23.6,
            'discount' => 10,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 02,
            'idProduct' => 04,
            'price' => 23.6,
            'discount' => 10,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 03,
            'idProduct' => 03,
            'price' => 2,
            'discount' => 0,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 04,
            'idProduct' => 01,
            'price' => 8,
            'discount' => 5,
        ]);

        DB::table('_productos_pedido')->insert([
            'idOrder' => 04,
            'idProduct' => 04,
            'price' => 23.6,
            'discount' => 5,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // UserSeeder
        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(5).' '.Str::random(5),
            'address' => 'Calle '.Str::random(10),
            'postalCode' => '35612',
            'phone' => '+34 666 741 666',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(5).' '.Str::random(5),
            'address' => 'Calle '.Str::random(10),
            'postalCode' => '35614',
            'phone' => '+34 666 741 667',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(5).' '.Str::random(5),
            'address' => 'Calle '.Str::random(10),
            'postalCode' => '35613',
            'phone' => '+34 666 741 668',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // MesaSeeder
        DB::table('mesas')->insert([
            'capacity' => 04,
            'availability' => True,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
            'availability' => False,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
            'availability' => False,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 02,
            'availability' => True,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
            'availability' => True,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
            'availability' => True,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 06,
            'availability' => True,
        ]);

        // ReservaSeeder
        DB::table('reservas')->insert([
            'idClient' => 01,
            'idTable' => 02,
            'date' => "2021-11-15 02:20:00",
        ]);

        DB::table('reservas')->insert([
            'idClient' => 01,
            'idTable' => 03,
            'date' => "2022-01-15 02:00:00",
        ]);

        // Pedido Seeder
        DB::table('pedidos')->insert([
            'idClient' => 01,
            'date_send' => "2020-03-29 16:20:00",
            'address' => 'Calle '.Str::random(10),
            'cost' => '30'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 02,
            'date_send' => "2021-10-29 16:20:00",
            'address' => 'Calle '.Str::random(10),
            'cost' => '84'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 03,
            'date_send' => "2021-05-29 16:20:00",
            'address' => 'Calle '.Str::random(10),
            'cost' => '66.99'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 02,
            'date_send' => "2021-11-15 02:20:00",
            'address' => 'Calle '.Str::random(10),
            'cost' => '35'
        ]);

        // FacturaSeeder
        DB::table('facturas')->insert([
            'idClient' => 01,
            'idOrder' => 01,
            'date_invoice' => '2020-03-29 16:20:00',
            'cost' => '30',
        ]);

        DB::table('facturas')->insert([
            'idClient' => 01,
            'idOrder' => 02,
            'date_invoice' => '2020-03-29 16:20:00',
            'cost' => '30',
        ]);

        DB::table('facturas')->insert([
            'idClient' => 02,
            'idOrder' => 03,
            'date_invoice' => '2021-10-29 16:20:00',
            'cost' => '84',
        ]);

        DB::table('facturas')->insert([
            'idClient' => 03,
            'idOrder' => 04,
            'date_invoice' => '2021-05-29 16:20:00',
            'cost' => '70',
        ]);

        // Producto Seeder
        DB::table('productos')->insert([
            'price' => '10',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '8',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '23.60',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '2.60',
            'image' => 'NO-IMAGE',
            'category' => 'Gal2S',
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        // ValoracionSeeder
        DB::table('valoraciones')->insert([
            'idClient' => 01,
            'idOrder' => 01,
            'rating' => 9,
            'comment' => Str::random(20),
        ]);

        DB::table('valoraciones')->insert([
            'idClient' => 01,
            'idOrder' => 02,
            'rating' => 8,
            'comment' => Str::random(20),
        ]);

        DB::table('valoraciones')->insert([
            'idClient' => 02,
            'idOrder' => 03,
            'rating' => 10,
            'comment' => Str::random(20),
        ]);

        DB::table('valoraciones')->insert([
            'idClient' => 03,
            'idOrder' => 04,
            'rating' => 2,
            'comment' => Str::random(20),
        ]);

        // _Producto_PedidoSeeder
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

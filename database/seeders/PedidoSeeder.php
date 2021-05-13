<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'idClient' => 1,
            'date_send' => "2021-04-13 20:31",
            'date_delivery' => "2021-04-13 20:31",
            'address' => 'Calle Ada Lovelace',
            'cost' => '30'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 1,
            'date_send' => "2020-04-01 12:00",
            'date_delivery' => "2020-04-01 12:00",
            'address' => 'Calle Ada Lovelace',
            'cost' => '23.99'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 2,
            'date_send' => "2021-03-13 20:31",
            'date_delivery' => "2021-04-13 20:31",
            'address' => 'Calle '.Str::random(10),
            'cost' => '84'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 3,
            'date_send' => "2021-06-13 19:00",
            'date_delivery' => "2021-06-13 20:00",
            'address' => 'Calle '.Str::random(10),
            'cost' => '66.99'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 1,
            'date_send' => "2021-06-13 19:00",
            'date_delivery' => "2021-06-13 20:00",
            'address' => 'Calle Alan Turing',
            'cost' => '66.99'
        ]);
        
    }
}

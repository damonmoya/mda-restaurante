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
            'date_send' => "2021-01-25 22:00",
            'date_delivery' => "2021-04-13 20:31",
            'address' => 'Calle Ada Lovelace, 35215',
            'cost' => '84.00'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 2,
            'date_send' => "2021-03-13 20:31",
            'date_delivery' => "2021-04-13 20:31",
            'address' => 'Calle Alan Turing, 35215',
            'cost' => '55.00'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 2,
            'date_send' => "2020-02-11 15:50",
            'date_delivery' => "2021-04-13 20:31",
            'address' => 'Calle Margaret Hamilton, 35130',
            'cost' => '42.99'
        ]);

        DB::table('pedidos')->insert([
            'idClient' => 3,
            'date_send' => "2021-06-13 19:00",
            'date_delivery' => "2021-06-13 20:00",
            'address' => 'Calle Ada Lovelace',
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

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
    }
}

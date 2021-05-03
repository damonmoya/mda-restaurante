<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}

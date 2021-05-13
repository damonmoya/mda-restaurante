<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservas')->insert([
            'idClient' => 01,
            'idTable' => 02,
            'date' => "2021-11-15",
        ]);

        DB::table('reservas')->insert([
            'idClient' => 01,
            'idTable' => 03,
            'date' => "2022-01-15",
        ]);
    }
}

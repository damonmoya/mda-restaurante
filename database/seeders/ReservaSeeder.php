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
            'date' => "2021-05-25T09:37",
        ]);

        DB::table('reservas')->insert([
            'idClient' => 02,
            'idTable' => 05,
            'date' => "2021-05-29T12:45",
        ]);
    }
}

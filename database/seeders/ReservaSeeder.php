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
        $today = date('Y-m-d');
        $tomorrow = date('Y-m-d', strtotime('+1 day'));

        DB::table('reservas')->insert([
            'idClient' => 2,
            'idTable' => 1,
            'date' => $today,
            'time' => '12:00-13:00'
        ]);

        DB::table('reservas')->insert([
            'idClient' => 3,
            'idTable' => 1,
            'date' => $today,
            'time' => '14:00-15:00'
        ]);

        DB::table('reservas')->insert([
            'idClient' => 3,
            'idTable' => 2,
            'date' => $tomorrow,
            'time' => '13:00-14:00'
        ]);

        DB::table('reservas')->insert([
            'idClient' => 3,
            'idTable' => 2,
            'date' => $tomorrow,
            'time' => '14:00-15:00'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasMesasSeeder extends Seeder
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
        DB::table('reservas_mesas')->insert([
            'idTable' => 1,
            'date' => $today,
            '12:00-13:00' => true,
            '14:00-15:00' => true
        ]);

        DB::table('reservas_mesas')->insert([
            'idTable' => 2,
            'date' => $tomorrow,
            '13:00-14:00' => true,
            '14:00-15:00' => true
        ]);
    }
}

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
            'idBook' => 1,
            'idTable' => 1,
            'date' => $today,
            '12:00-13:00' => true,
            '14:00-15:00' => true,
            '20:00-21:00' => true,
            '22:00-23:00' => true,
            '23:00-00:00' => true
        ]);

        DB::table('reservas_mesas')->insert([
            'idBook' => 2,
            'idTable' => 1,
            'date' => $tomorrow,
            '13:00-14:00' => true,
            '14:00-15:00' => true,
            '15:00-16:00' => true,
            '21:00-22:00' => true,
            '22:00-23:00' => true
        ]);

        DB::table('reservas_mesas')->insert([
            'idBook' => 2,
            'idTable' => 2,
            'date' => $today,
            '14:00-15:00' => true,
            '20:00-21:00' => true,
            '21:00-22:00' => true
        ]);

        DB::table('reservas_mesas')->insert([
            'idBook' => 2,
            'idTable' => 4,
            'date' => $today,
            '12:00-13:00' => true,
            '13:00-14:00' => true,
            '14:00-15:00' => true,
            '15:00-16:00' => true,
            '20:00-21:00' => true,
            '21:00-22:00' => true,
            '22:00-23:00' => true,
            '23:00-00:00' => true,
        ]);
    }
}

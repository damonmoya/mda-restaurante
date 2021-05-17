<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mesas')->insert([
            'capacity' => 04,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 02,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 04,
        ]);

        DB::table('mesas')->insert([
            'capacity' => 06,
        ]);
    }
}

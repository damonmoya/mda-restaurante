<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ValoracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valoraciones')->insert([
            'idClient' => 01,
            'idOrder' => 01,
            'rating' => 9,
            'comment' => Str::random(20),
        ]);

        DB::table('valoraciones')->insert([
            'idClient' => 01,
            'idOrder' => 02,
            'rating' => 8,
            'comment' => Str::random(20),
        ]);

        DB::table('valoraciones')->insert([
            'idClient' => 02,
            'idOrder' => 03,
            'rating' => 10,
            'comment' => Str::random(20),
        ]);

        DB::table('valoraciones')->insert([
            'idClient' => 03,
            'idOrder' => 04,
            'rating' => 2,
            'comment' => Str::random(20),
        ]);
    }
}

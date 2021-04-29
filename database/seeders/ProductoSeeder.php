<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'price' => '10',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '8',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '23.60',
            'image' => 'NO-IMAGE',
            'category' => Str::random(5),
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);

        DB::table('productos')->insert([
            'price' => '2.60',
            'image' => 'NO-IMAGE',
            'category' => 'Gal2S',
            'name' => Str::random(10),
            'ingredients' => Str::random(40),
        ]);
    }
}

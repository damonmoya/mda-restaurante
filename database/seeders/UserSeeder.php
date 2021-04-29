<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(5).' '.Str::random(5),
            'address' => 'Calle '.Str::random(10),
            'postalCode' => '35612',
            'phone' => '+34 666 741 666',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(5).' '.Str::random(5),
            'address' => 'Calle '.Str::random(10),
            'postalCode' => '35614',
            'phone' => '+34 666 741 667',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(5).' '.Str::random(5),
            'address' => 'Calle '.Str::random(10),
            'postalCode' => '35613',
            'phone' => '+34 666 741 668',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

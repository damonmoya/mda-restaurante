<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Pepe Benavente',
            'email' => 'pepebenavente@hotmail.es',
            'password' => bcrypt('elmejorcantante'),
        ]);
    }
}
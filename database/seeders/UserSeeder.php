<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
            'name' => 'Soy el admin',
            'email' => 'soyeladmin@hotmail.es',
            'password' => bcrypt('elmejoradmin'),
        ])->assignRole('Administrator');

        User::factory()->create([
            'name' => 'Pepe',
            'email' => 'pepebenavente@hotmail.es',
            'password' => bcrypt('elmejorcantante'),
            'surname' => 'Benavente',
            'postalcode' => '35000',
            'address' => 'Calle Barranco Zurbarán',
        ]);

        User::factory()->create([
            'name' => 'Armiche el surfero',
            'email' => 'armichesurferito@hotmail.es',
            'password' => bcrypt('elrompeolas'),
        ]);

        User::factory()->create([
            'name' => 'Juan Carlos Valerón',
            'email' => 'valeron21@hotmail.es',
            'password' => bcrypt('elmago'),
        ]);
    }
}

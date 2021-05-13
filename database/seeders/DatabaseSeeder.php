<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MesaSeeder::class);
        $this->call(ReservaSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ValoracionSeeder::class);
        $this->call(_Producto_PedidoSeeder::class);
    }
}

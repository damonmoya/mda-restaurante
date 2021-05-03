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

        // UserSeeder
        $this->call(UserSeeder::class);

        // MesaSeeder
        $this->call(MesaSeeder::class);

        // ReservaSeeder
        $this->call(ReservaSeeder::class);

        // Pedido Seeder
        $this->call(PedidoSeeder::class);

        // FacturaSeeder
        $this->call(FacturaSeeder::class);

        // Producto Seeder
        $this->call(ProductoSeeder::class);
        
        // ValoracionSeeder
        $this->call(ValoracionSeeder::class);

        
        // _Producto_PedidoSeeder
        $this->call(_Producto_PedidoSeeder::class);
    }
}

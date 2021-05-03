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
            'price' => '7.60',
            'image' => 'String',
            'category' => 'Arroces',
            'name' => 'Risotto italiano',
            'ingredients' => 'Arroz, cebolla, queso parmesano, mantequilla, caldo de verduras, vino blanco, sal',
        ]);

        DB::table('productos')->insert([
            'price' => '10.60',
            'image' => 'NO-IMAGE',
            'category' => 'Arroces',
            'name' => 'Arroz con pollo',
            'ingredients' => 'Pechuga de pollo, tomate, ajo',
        ]);

        DB::table('productos')->insert([
            'price' => '8.00',
            'image' => 'NO-IMAGE',
            'category' => 'Entrantes',
            'name' => 'Croquetas',
            'ingredients' => 'Jamón, pollo, bechamel, huevo y pan',
        ]);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => 'NO-IMAGE',
            'category' => 'Ensaladas',
            'name' => 'Ensalada italiana',
            'ingredients' => 'Tomates rojos, aceitunas verdes, cebolla morada, pepino, queso mozzarella, albahaca, aceite de olive virgen extra, sal y pimienta negra',
        ]);

        DB::table('productos')->insert([
            'price' => '23.60',
            'image' => 'NO-IMAGE',
            'category' => 'Pastas',
            'name' => 'Pasta carbonara',
            'ingredients' => 'Espaguetis, panceta, huevo, queso parmesano, nata para cocinar, cebolla, aceita, sal y pimienta negra',
        ]);

        DB::table('productos')->insert([
            'price' => '14.50',
            'image' => 'NO-IMAGE',
            'category' => 'Pizzas',
            'name' => 'Barbacoa Gourmet',
            'ingredients' => 'Pollo marinado, carne de vacuno, mezcla de 5 quesos',
        ]);

        DB::table('productos')->insert([
            'price' => '3.25',
            'image' => 'NO-IMAGE',
            'category' => 'Postres',
            'name' => 'Helado de chocolate',
            'ingredients' => 'Nata, leche, leche condensada, huevos, chocolate 70%, esencia de vainilla y cacao en polvo.',
        ]);
    }
}

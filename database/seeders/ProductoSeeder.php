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

        // ====== ARROCES ======
        $path = "public/images/Platos/Arroz-01-ArrozRisotto.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '7.60',
            'image' => $base64,
            'category' => 'Arroces',
            'name' => 'Risotto italiano',
            'ingredients' => 'Arroz, cebolla, queso parmesano, mantequilla, caldo de verduras, vino blanco, sal',
        ]);
        // --- 
        $path = "public/images/Platos/Arroz-02-ArrozPollo.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '10.60',
            'image' => $base64,
            'category' => 'Arroces',
            'name' => 'Arroz con pollo',
            'ingredients' => 'Pechuga de pollo, tomate, ajo',
        ]);
        // ---
        $path = "public/images/Platos/Arroz-04-ArrozMeloso.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '10.60',
            'image' => $base64,
            'category' => 'Arroces',
            'name' => 'Arroz meloso con atún',
            'ingredients' => 'Arroz, ajo, pimiento rojo, vino blanco, caldo de pescado caliente, aceite, atún, colorante alimentario',
        ]);
        // ---
        $path = "public/images/Platos/Arroz-03-ArrozPaella.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '10.60',
            'image' => $base64,
            'category' => 'Arroces',
            'name' => 'Paella',
            'ingredients' => 'Arroz bomba, pollo, conejo, judía verde, alcachofa, caracoles, aceite de oliva virgen extra, tomate triturado, azafrán, romero y sal',
        ]);
    
        // ====== Entrantes ======

        $path = "public/images/Platos/Entrantes-01-Croquetas.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '8.00',
            'image' => $base64,
            'category' => 'Entrantes',
            'name' => 'Croquetas',
            'ingredients' => 'Jamón, pollo, bechamel, huevo y pan',
        ]);

        $path = "public/images/Platos/Entrantes-02-ArosCebolla.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '8.00',
            'image' => $base64,
            'category' => 'Entrantes',
            'name' => 'Aros de cebolla',
            'ingredients' => 'Cebolla, harina de trigo, leche, huevo, pan rallado, levadura y sal',
        ]);

        $path = "public/images/Platos/Entrantes-03-PapasBaconQueso.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '8.00',
            'image' => $base64,
            'category' => 'Entrantes',
            'name' => 'Papas fritas Bacon & Queso',
            'ingredients' => 'Papas, bacon, queso rayado y aceite de oliva',
        ]);

        $path = "public/images/Platos/Entrantes-04-TablaQuesos.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '8.00',
            'image' => $base64,
            'category' => 'Entrantes',
            'name' => 'Tabla de quesos',
            'ingredients' => 'Quesos: parmezano, Gorgonzola y Burrata. Embutidos: chorizo, jamón, salchichón, ... Fiables: pechuga de pavo, de pollo, ...',
        ]);

        // ====== Ensaladas ======

        $path = "public/images/Platos/Ensalada-01-EnsaladaItaliana.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => $base64,
            'category' => 'Ensaladas',
            'name' => 'Ensalada italiana',
            'ingredients' => 'Tomates rojos, aceitunas verdes, cebolla morada, pepino, queso mozzarella, albahaca, aceite de olive virgen extra, sal y pimienta negra',
        ]);

        $path = "public/images/Platos/Ensalada-02-EnsaladaPasta.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => $base64,
            'category' => 'Ensaladas',
            'name' => 'Ensalada de pasta caprese',
            'ingredients' => 'Pasta, queso mozzarella, tomate cherry, albahaca, aceite de oliva, sal y pimienta',
        ]);

        $path = "public/images/Platos/Ensalada-04-EnsaladaQuinoa.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => $base64,
            'category' => 'Ensaladas',
            'name' => 'Ensalada de quinoa',
            'ingredients' => 'Tomates rojos, aceitunas verdes, cebolla morada, pepino, queso mozzarella, albahaca, aceite de olive virgen extra, sal y pimienta negra',
        ]);

        $path = "public/images/Platos/Ensalada-02-EnsaladaCol.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2',
            'image' => $base64,
            'category' => 'Ensaladas',
            'name' => 'Ensalada de col',
            'ingredients' => 'Col blanca, zanahoria, manzanas, mayonesa, crema agria, mostaza, vinagre',
        ]);

        // ====== Pastas ======

        $path = "public/images/Platos/Pasta-01-PastaCarbonara.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '23.60',
            'image' => $base64,
            'category' => 'Pastas',
            'name' => 'Pasta carbonara',
            'ingredients' => 'Espaguetis, panceta, huevo, queso parmesano, nata para cocinar, cebolla, aceita, sal y pimienta negra',
        ]);

        $path = "public/images/Platos/Pasta-02-Tortellini.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '11.67',
            'image' => $base64,
            'category' => 'Pastas',
            'name' => 'Tortellini con queso gratinado',
            'ingredients' => 'Tortellini, ajo, mantequilla, harina, leche, queso cheddar, queso parmigiano, sal y pimienta',
        ]);

        $path = "public/images/Platos/Pasta-03-Canelones.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '07.53',
            'image' => $base64,
            'category' => 'Pastas',
            'name' => 'Canelones de carne',
            'ingredients' => 'Carne picada, cebolla, pimiento verde, pasta, tomate casero, bechamel, mantequilla, aceite de oliva, leche, sal y especias',
        ]);

        $path = "public/images/Platos/Pasta-04-Noquis.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '07.53',
            'image' => $base64,
            'category' => 'Pastas',
            'name' => 'Ñoquis',
            'ingredients' => 'Papas, harina, huevo y pizca de sal',
        ]);

        // ====== Pizzas ======

        $path = "public/images/Platos/Pizza-04-PizzaBarbacoa.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '14.50',
            'image' => $base64,
            'category' => 'Pizzas',
            'name' => 'Pizza Barbacoa',
            'ingredients' => 'Pollo marinado, carne de vacuno, mezcla de 5 quesos',
        ]);

        $path = "public/images/Platos/Pizza-03-PizzaQuesos.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '10.50',
            'image' => $base64,
            'category' => 'Pizzas',
            'name' => 'Pizza 4 quesos',
            'ingredients' => 'Aceite de oliva virgen extra, salsa de tomate casera, orégano, queso mozzarella, queso azul, queso parmesano, queso suave',
        ]);

        $path = "public/images/Platos/Pizza-02-PizzaNapolitana.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '9.01',
            'image' => $base64,
            'category' => 'Pizzas',
            'name' => 'Pizza napolitana',
            'ingredients' => 'Harina, levadura, aceite, tomate, cebolla, ajo, pimienta negra, queso mozzarella, mejillones, gambas y aceitunas negras',
        ]);

        $path = "public/images/Platos/Pizza-01-PizzaMarinera.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '18.50',
            'image' => $base64,
            'category' => 'Pizzas',
            'name' => 'Pizza marinera',
            'ingredients' => 'Aceite de oliva virgen extra, salsa de tomate casera, orégano, queso mozzarella, queso azul, queso parmesano, queso suave.',
        ]);

        // ====== Postres ======

        $path = "public/images/Platos/Postre-01-PostreChocolate.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '3.25',
            'image' => $base64,
            'category' => 'Postres',
            'name' => 'Helado de chocolate',
            'ingredients' => 'Nata, leche, leche condensada, huevos, chocolate 70%, esencia de vainilla y cacao en polvo.',
        ]);

        $path = "public/images/Platos/Postre-02-ArrozLeche.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '6.25',
            'image' => $base64,
            'category' => 'Postres',
            'name' => 'Arroz con leche',
            'ingredients' => 'Arroz, leche, limón y canela',
        ]);

        $path = "public/images/Platos/Postre-03-Gelato.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '5.25',
            'image' => $base64,
            'category' => 'Postres',
            'name' => 'Gelato',
            'ingredients' => 'Leche entera, crema, azúcar, leche desnatada, harina, chocolate, fresa',
        ]);

        $path = "public/images/Platos/Postre-04-PannaCota.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '5.25',
            'image' => $base64,
            'category' => 'Postres',
            'name' => 'Panna Cotta',
            'ingredients' => 'Gelatina, Vainilla, nata líquida, fresa y azúcar',
        ]);

        // ====== Bebidas ======
    
        $path = "public/images/Platos/Bebida-01-ColaCoca.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2.99',
            'image' => $base64,
            'category' => 'Bebidas',
            'name' => 'Coca cola',
            'ingredients' => 'Sabor original',
        ]);

        $path = "public/images/Platos/Bebida-02-Fanta.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2.99',
            'image' => $base64,
            'category' => 'Bebidas',
            'name' => 'Fanta',
            'ingredients' => '¡Qué fantástico refresco!',
        ]);

        $path = "public/images/Platos/Bebida-03-Pepsi.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '2.99',
            'image' => $base64,
            'category' => 'Bebidas',
            'name' => 'Pepsi',
            'ingredients' => 'That\'s What I Like',
        ]);

        $path = "public/images/Platos/Bebida-04-Vino.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        DB::table('productos')->insert([
            'price' => '23.87',
            'image' => $base64,
            'category' => 'Bebidas',
            'name' => 'Vino',
            'ingredients' => 'El vino mueve la primavera, crece como una planta la alegría',
        ]);
    }
}

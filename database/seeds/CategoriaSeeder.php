<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Pastas',
            'img_src' => 'pastas.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Pizzas',
            'img_src' => 'pizza.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Carnes',
            'img_src' => 'carne.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Sopas',
            'img_src' => 'sopa.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Tartas',
            'img_src' => 'tarta.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Postres',
            'img_src' => 'postre.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Ensaladas',
            'img_src' => 'ensalada.jpg'
        ]);
        Categoria::create([
            'nombre' => 'Asiatico',
            'img_src' => 'sushi.jpg'
        ]);
    	Categoria::create([
    		'nombre' => 'Pollo',
            'img_src' => 'pollo.jpg'
    	]);
    }
}

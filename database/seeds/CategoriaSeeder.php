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
            'nombre' => 'Pastas'
        ]);
        Categoria::create([
            'nombre' => 'Pizzas'
        ]);
        Categoria::create([
            'nombre' => 'Carnes'
        ]);
        Categoria::create([
            'nombre' => 'Sopas'
        ]);
        Categoria::create([
            'nombre' => 'Tartas'
        ]);
        Categoria::create([
            'nombre' => 'Postres'
        ]);
        Categoria::create([
            'nombre' => 'Ensaladas'
        ]);
        Categoria::create([
            'nombre' => 'Asiatico'
        ]);
    	Categoria::create([
    		'nombre' => 'Pollo'
    	]);
    }
}

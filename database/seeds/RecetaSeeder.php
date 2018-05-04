<?php

use Illuminate\Database\Seeder;
use App\Models\Receta;

class RecetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Receta::create([
    		'id_receta' => 1,
    		'img_src' => 'imagen.jpg',
    		'titulo' => 'Titulo fruta',
    		'preparacion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum aspernatur dolor dolorem, atque velit hic eveniet aliquam omnis accusamus, eius!',
    		'ingredientes' => 'Ingrediente  1, ingrediente 2, ingrediente 3'
    	]);
    }
  }

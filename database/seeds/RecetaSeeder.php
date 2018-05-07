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
    		'img_src' => 'imagen.jpg',
    		'titulo' => 'Titulo fruta',
    		'preparacion' => '<p>Lorem ipsum dolor</p> <p>sit amet, consectetur adipisicing elit. Rerum aspernatur</p> dolor dolorem, atque velit hic eveniet aliquam omnis accusamus, eius!',
    		'ingredientes' => 'Ingrediente  1, ingrediente 2, ingrediente 3',
            'id_categoria' => '1'
    	]);
    }
  }

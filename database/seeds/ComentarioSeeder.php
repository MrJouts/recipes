<?php

use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Comentario::create([
    		'comentario' => 'Qué pintaza tienen ese plato. Dan ganas de meter el tenedor',
    		'id_receta' => 1
    	]);
    	Comentario::create([
    		'comentario' => 'Me gustan. Parece una receta fácil y no lleva nada de tiempo. Esta me apunto.',
    		'id_receta' => 1
    	]);
    	Comentario::create([
    		'comentario' => 'Una receta muy acertada, yo soy muy de plato de cuchara y a mi familia le encantan tus recetas.',
    		'id_receta' => 1
    	]);
    	Comentario::create([
    		'comentario' => '¡Muchas gracias! 🙂',
    		'id_receta' => 1
    	]);
    	Comentario::create([
    		'comentario' => 'Creo que al menos una vez en la vida hay que probar la pasta con huevo',
    		'id_receta' => 2
    	]);
    	Comentario::create([
    		'comentario' => 'Me encantan este tipo de platos de cuchara tradicionales. Quedan muy ricos',
    		'id_receta' => 2
    	]);
    	Comentario::create([
    		'comentario' => 'Es que los platos tradicionales hay que mantenerlos siempre.',
    		'id_receta' => 2
    	]);
    	Comentario::create([
    		'comentario' => 'la verdad que son muy fáciles de hacer. Una papa.',
    		'id_receta' => 3
    	]);
    	Comentario::create([
    		'comentario' => 'Tiene muy buena pinta la tarta. A mí me gusta más así, tipo mousse como vos dices. La cuajada está un poco vista.',
    		'id_receta' => 6
    	]);
    	Comentario::create([
    		'comentario' => 'Es una tarta fácil de hacer y muy resultona. Es de mis favoritas, la verdad. Gracias por tu comentario.',
    		'id_receta' => 6
    	]);
    	Comentario::create([
    		'comentario' => 'Me parece un postre sencillo y rico. Seguro que sienta fenomenal después de una comida copiosa',
    		'id_receta' => 7
    	]);
    	Comentario::create([
    		'comentario' => 'Sí. Esta mousse de requesón es perfecto para cuando te quieres dar un capricho dulce pero sin pasarte. Me alegra que te haya gustado.',
    		'id_receta' => 7
    	]);
    	Comentario::create([
    		'comentario' => 'La combinación de naranja y chocolate queda muy bien. Yo repetiré la receta en cuanto pueda. Un saludo.',
    		'id_receta' => 8
    	]);
    	Comentario::create([
    		'comentario' => 'Qué pintaza tienen las croquetas!!! Redondas quedan más bonitas, la verdad',
    		'id_receta' => 9
    	]);
    	Comentario::create([
    		'comentario' => 'Qué bueno está el hummus en cualquiera de sus versiones.',
    		'id_receta' => 9
    	]);
    	Comentario::create([
    		'comentario' => 'Este potaje me encanta pero ya no solo para semana santa, sino para todo el año, hasta en verano lo hacemos jajajaj. Me encanta acompañado de un vino blanco de utiel requena que son mis favoritos.',
    		'id_receta' => 9
    	]);
    	Comentario::create([
    		'comentario' => 'Me alegra que te guste. No conozco el vino de esa zona, pero seguro que está buenísimo. Saludos.',
    		'id_receta' => 9
    	]);
    	Comentario::create([
    		'comentario' => 'Qué bueno el potaje de garbanzos. Un plato muy sano, por cierto. Saludos',
    		'id_receta' => 10
    	]);
    	Comentario::create([
    		'comentario' => 'Totalmente. Todo lo que lleva es bueno y saludable. 🙂',
    		'id_receta' => 10
    	]);
    }
}

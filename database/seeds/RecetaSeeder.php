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
      'img_src' => 'crema_menta_chocolate.jpg',
      'titulo' => 'Crema helada de menta con chocolate',
      'preparacion' => '<p>Picar en grano grueso el chocolate. Montar la nata bien firme con varillas eléctricas. En otro cuenco, mezclar la leche condensada, el chocolate troceado y el extracto de menta y añadirlo a la nata montada con cuidado para que no se baje. Rellenar 4 vasos altos con esta mezcla, cubrirlos con papel film y meterlos 2 h al congelador.&nbsp;</p><p>Rallar el chocolate y echarlo en un cazo con la nata y el extracto de menta y cocinar a fuego medio 10 min. Retirarlo, dejarlo enfriarse 15 min, repartirlo en los vasos sobre la crema y meterlos 15 min al congelador.</p>',
      'ingredientes' => '<p><strong>Para la crema helada de menta</strong></p><ul><li>500 ml de nata</li><li>400 ml de leche condensada</li><li>1 cucharada de extracto de menta</li><li>125 g de chocolate negro</li></ul><p><strong>Para el chocolate</strong></p><ul><li>125 g de chocolate negro</li><li>100 ml de nata</li><li>½ cucharada de extracto de menta</li><li>Unas ramitas de menta para decorar</li></ul>',
      'id_categoria' => '6'
    ]);
    Receta::create([
      'img_src' => 'focaccia_mediterranea.jpg',
      'titulo' => 'Focaccia mediterránea rellena de mozzarella',
      'preparacion' => '<p><strong>Para la masa</strong></p><p>Activar la levadura en un poquito de agua tibia con el azúcar y la harina y reposar por 15 minutos hasta que active.</p><p>Hacer una corona con la harina mezclada con la sémola en la mesada y salar por el borde exterior. En el centro agregar la levadura activada, el aceite y el agua de a poco a la vez que comenzamos a tomar la masa de adentro hacia fuera.</p><p>Lograr una masa lisa y descansar, tapada hasta leudar por 1 hora. Luego llevar a la heladera por 24 hs para continuar el leudado.</p><p>Retirar del frío y descansar por 3 horas. Desgasificar y dividir en dos partes iguales.</p><p>&nbsp;</p><p><strong>Para el armado</strong></p><p>Estirar una parte con los dedos en asadera aceitada y cubrir con mozzarella en cubitos. Cubrir con la otra masa también estirada con los dedos y pegar los bordes.</p><p>Incrustar los cherrys, aceitunas negras sin carozo en la masa y cubrir con la cebolla previamente salteada, las anchoas y la rúcula.</p><p>Hornear a temperatura fuerte por 20 minutos.</p>',
      'ingredientes' => '<p><strong>Masa:</strong></p><ul><li>&nbsp;Harina 000 300 grs</li><li>&nbsp;Sémola 200 grs</li><li>&nbsp;Levadura fresca 10 grs</li><li>&nbsp;Sal 10 grs</li><li>&nbsp;Aceite de oliva 50 cc</li><li>&nbsp;Agua 300 cc</li><li>&nbsp;Azúcar 1 cdta</li></ul><p><strong>Relleno:</strong></p><ul><li>&nbsp;Mozzarella 250 grs</li></ul><p><strong>Cubierta:</strong></p><ul><li>&nbsp;Tomate cherry 150 grs</li><li>&nbsp;Tomillo</li><li>&nbsp;Aceituna negra 1 puñado</li><li>&nbsp;Cebolla 2</li><li>&nbsp;Rúcula 1 planta</li><li>&nbsp;Anchoa 4</li></ul>',
      'id_categoria' => '2'
    ]);
    Receta::create([
      'img_src' => 'pechuga_de_pollo.jpg',
      'titulo' => 'Pechugas de pollo al horno con croute de pan rallado',
      'preparacion' => '<p>Calentar la crema y el agua, incorporar el Saborizador Knorr® de Provenzal. Integrar bien y verter dentro de una pyrex.</p><p>Dorar las pechugas en una sartén de ambos lados.</p><p>Licuar o procesar la miga de pan, mezclar con el queso rallado y el perejil. Esparcir sobre las pechugas y colocarlas en la pyrex. , Hornear en un horno medio durante 10 minutos.</p>',
      'ingredientes' => '<ul><li>300 mililitros de crema de leche</li><li>½ taza de agua</li><li>1 Saborizador Knorr® de Provenzal</li><li>4 pechuga de pollo</li><li>3 cucharadas de aceite de oliva</li><li>2 rodajas de pan lactal</li><li>3 cucharadas de queso rallado</li><li>1 cucharada de perejil picado</li></ul>',
      'id_categoria' => '9'
    ]);
    Receta::create([
      'img_src' => 'sopa_crema_de_arvejas.jpg',
      'titulo' => 'Sopa crema de arvejas con brusquetas de ricota y jamón crudo',
      'preparacion' => '<p><strong>Comenzar salteando la cebolla</strong> y puerro picados en manteca y oliva y salar.</p><p>Cuando transparentan los vegetales, sumar las arvejas y la espinaca. Cuando la espinaca se achica, sumar el caldo hasta cubrir. Hervir por unos minutos hasta que reduzca un poco y procesar.</p><p>Opcional: antes de procesar podemos podemos sumar una papa hervida en cubitos para evitar la crema.</p><p>O bien terminar con crema.</p><p>Rectificar sal y pimienta.</p><p>&nbsp;</p><p><strong>Para las brusquetas</strong>, colocar el jamón crudo sobre papel absorbente y tapar con otro. Llevar al microondas por 30 segundos. Reemplazar el papel absorbente y volver al microondas por 30 segundos más.</p><p>Repetir 2 o 3 veces más hasta que se seque.</p><p>Cortar rodajas de pan, cubrir con ricota, sal, pimienta, jamón crudo y arvejas frescas.</p>',
      'ingredientes' => '<ul><li>Aceite de oliva</li><li>&nbsp;Manteca</li><li>&nbsp;Cebolla 1</li><li>&nbsp;Puerro 1</li><li>&nbsp;Sal</li><li>&nbsp;Pimienta</li><li>&nbsp;Arvejas 300 grs</li><li>&nbsp;Espinaca 1 atado</li><li>&nbsp;Caldo 1 litro</li></ul><p><strong>Opcional:</strong></p><ul><li>&nbsp;Crema de leche 50 cc</li><li>&nbsp;Papa 1</li></ul><p><strong>Brusquetas:</strong></p><ul><li>&nbsp;Pan de campo 1</li><li>&nbsp;Jamón crudo 100 grs</li><li>&nbsp;Ricota 300 grs</li><li>&nbsp;Arveja fresca 50 grs</li></ul>',
      'id_categoria' => '4'
    ]);
    Receta::create([
      'img_src' => 'macaron_dulce.jpg',
      'titulo' => 'Macaron de dulce de leche',
      'preparacion' => '<p><strong>Para los macaraons,</strong> moler las almendras y tamizarlas en un bol junto con el azúcar impalpable.</p><p>Aparte, hacer un merengue batiendo las claras a nieve y agregando el azúcar en forma de lluvia hasta montar (sin dejar de batir). Agregar la esencia de vainilla y luego los colorantes de a muy poquito e integrar con espátula y movimientos envolventes.</p><p>Por último, agregar el dulce de leche en 3 veces y con movimientos envolventes.</p><p>Espatular para lograr una mezcla fluida y pasar a manga con pico liso.</p><p>&nbsp;</p><p><strong>Para el armado,</strong> darle forma a los macarons sobre placa con papel manteca enmantecado y hacer botones de 3 cm de diámetro.</p><p>Orear hasta secar y llevar al horno a 138 grados por 11 minutos y luego por 7 minutos al piso del horno a 180 grados.</p>',
      'ingredientes' => '<p><strong>Masa:</strong></p><ul><li>Almendra 250 grs</li><li>Azúcar impalpable 250 grs</li><li>Clara 230 grs</li><li>Azúcar 230 grs</li><li>Colorante marrón c/n</li><li>Colorante amarillo c/n</li><li>Esencia de vainilla 1 cdta</li><li>Dulce de leche repostero 500 grs</li></ul>',
      'id_categoria' => '4'
    ]);

  }

}



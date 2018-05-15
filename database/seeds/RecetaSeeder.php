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
      'id_categoria' => '6'
    ]);
    Receta::create([
      'img_src' => 'fideos_rojos.jpg',
      'titulo' => 'Espagueti cremoso con tomate y queso de cabra',
      'preparacion' => '<p><strong>1 - </strong>Cocina el espagueti en abundante agua hirviendo salada hasta que esté al dente. Cuando está suave pero ligeramente firme al morder.</p><p><strong>2 - </strong>Licua el puré de tomate, morrón asado, queso de cabra, ajo y ½ taza del agua de cocción de la pasta.</p><p><strong>3 - </strong>Coloca la salsa en el sartén, agrega el espagueti drenado y mezcla. Sazona al gusto con sal y pimienta.</p><p><strong>4 - </strong>Sirve caliente y decora con más queso de cabra, queso parmesano y tu hierba favorita si lo deseas. En este caso yo serví con poquito queso de cabra, parmesano y cebollín picado que era lo que tenía en mi casa.</p>',
      'ingredientes' => '<ul><li>200 gr espagueti</li><li>¾ taza puré de tomate (bote de 210 gr)</li><li>1 pimiento morrón rojo asado (1 lata chica)</li><li>3 cucharadas queso de cabra</li><li>1 diente de ajo, picado</li><li>½ taza agua de cocción de la pasta</li><li>Queso parmesano, al gusto para servir</li><li>Albahaca picado, perejil o cebollín, para servir</li></ul>',
      'id_categoria' => '1'
    ]);
    Receta::create([
      'img_src' => 'bife_de_chorizo.jpg',
      'titulo' => 'Receta de Bife de chorizo con chucrut',
      'preparacion' => '<p>Colocar en un bol la salsa de soja, el aceto, la miel y el jengibre. Batir y reservar.</p><p>Cortar el hinojo en láminas, colocarlas en un bol y mezclar con los granos de pimienta y el ajo picado. Agregar dos cucharadas de aceite de oliva y reservar. Retirar la grasa del bife y sellarlo en una sartén con aceite.</p><p>Retirar y colocar sobre papel de aluminio, cubrir con la mezcla de hinojo.</p><p>Formar un cilindro y prensar los extremos.</p><p>Colocar en una fuente, agregar el caldo y cocinar en horno bajo durante 1 hora y media. Si el caldo se evapora, incorporar vino tinto o agua.</p><p>Luego, retirar la fuente, desenvolver el bife y pintar la carne con la mezcla de soja. Subir el fuego al máximo, introducir la fuente en el horno y cocinar 5 minutos más.</p><p>Cortar la calabaza en juliana, colocarla en un bol, bañar con aceite y salpimentar. Servir bifecitos de carne de 1 cm de espesor con la calabaza asada y el chucrut.</p><p>Puede acompañarse con la salsa de soja y decorar con flores de broccoli cocinadas al vapor.</p>',
      'ingredientes' => '<ul><li>2 kg de bife de chorizo entero</li><li>1 bulbo de hinojo</li><li>3 dientes de ajo</li><li>1 l de caldo de carne</li><li>1 cucharada de granos de pimienta negra machacados</li><li>1 taza de salsa de soja</li><li>½ taza de aceto balsámico</li><li>1 cucharada de miel</li><li>1 cucharada de ralladura de jengibre</li><li>1 frasco de chucrut en conserva</li><li>1 calabaza chica asada</li></ul>',
      'id_categoria' => '3'
    ]);
    Receta::create([
      'img_src' => 'tarta_choclo.jpg',
      'titulo' => 'Tarta de choclo, calabaza y pimientos',
      'preparacion' => '<p>Forrar con la masa la tartera enmantecada y enharinada. Pinchar el hojaldre varias veces con un tenedor.</p><p>Aparte, hacer un puré con la calabaza (previamente hervida u horneada) y agregarle el huevo apenas batido, sal, pimienta y nuez moscada a gusto. Colocar la mitad del puré sobre la masa, cubrir con el jamón cortado en fina juliana, distribuir la mitad del queso cortado en cubitos y, por último, colocar rodajas de huevo duro. Tapar con el puré restante y emparejar con una espátula.</p><p>Para hacer la cubierta, cortar los pimientos en rombo y saltearlos en el aceite de oliva. Agregar el choclo descongelado, cocinar 3 minutos, salpimentar y retirar del fuego antes de añadir las hierbas. Extender esta preparación sobre la tarta alternando con cubitos de queso.&nbsp;</p><p>Hornear en moderado 35 minutos, dejar entibiar, desmoldar y servir.</p>',
      'ingredientes' => '<ul><li>1 disco/s de Hojaldre</li><li>1 kilo/s de Calabaza cocida</li><li>1 unidad/es de Huevo</li><li>100 gramo/s de Jamón Cocido</li><li>250 gramo/s de Queso port salut</li><li>Cantidad a gusto de Sal y Pimienta</li><li>Cantidad a gusto de Nuez Moscada</li><li>2 cucharada/s de Aceite de Oliva</li><li>1 unidad/es de Pimiento (medio rojo y medio verde)</li><li>1.5 taza/s de Choclo</li><li>1 pizca/s de Orégano</li></ul>',
      'id_categoria' => '5'
    ]);
    Receta::create([
      'img_src' => 'sushi.jpg',
      'titulo' => 'Cómo hacer sushi casero, receta paso a paso',
      'preparacion' => '<p>Nos ponemos manos a la obra con la elaboración de este&nbsp;<strong>sushi Maki</strong>, el que seguramente sea el tipo de&nbsp;<strong>sushi</strong>&nbsp;más conocido y elaborado. Antes de nada se lava con agua bien el arroz para eliminar parte del almidón. Para hacer&nbsp;<strong>sushi</strong>&nbsp;lo ideal es utilizar un tipo de arroz especial, pero puedes optar por otros como el arroz basmati o incluso el arroz blanco tradicional. También existen muchos otros tipos de arroz conocidos como el arroz bomba, el arroz de grano largo o el arroz arborio. Lo ponemos en un cazo, lo cubrimos de agua, y ponemos al fuego hasta que comience a hervir, momento en el que ponemos a fuego medio y tapamos la olla para que no se escape el vapor. Podemos utilizar una tabla de cocina para ello.</p><p>A los diez minutos apagamos el fuego y dejamos reposar el arroz durante otros diez minutos. En un cuenco mezclamos el mirin con el azúcar y lo batimos todo bien hasta diluirlo bien. El llamado “mirin” es un tipo de vino de arroz muy parecido al conocido “sake”, pero con la diferencia que este líquido no contiene alcohol o en una proporción muy pequeña. Este condimento se utiliza para dar sabor a todo tipo de platos, como por ejemplo los de pescado. Vertemos la mezcla sobre el arroz cocido, removemos y dejamos el cazo tapado hasta que el arroz consuma todo el líquido.</p><p>Una vez consumido, extendemos el arroz sobre una fuente y abanicamos sobre el mismo un par de minutos. A continuación vamos a preparar el relleno, cortando el salmón y el atún en finas láminas, al igual que el apio y el pepino. Después cortamos el aguacate en dos, quitamos el hueso y extraemos su pulpa. El aguacate posee un alto contenido en grasa, por lo que aporta una cantidad alta de calorías, aproximadamente unas 140 por cada 100 gramos de aguacate que consumimos. Por este motivo no conviene abusar del consumo del aguacate, pese a que posee muy buenas propiedades para nuestra alimentación. Extendemos dos láminas de Nori, humedecidas con agua para ayudarnos a enrollarlas, y las extendemos en dos esterillas, una para el rollo de salmón y otro para el de atún.</p><p>Cubrimos las láminas con el arroz, dejando por arriba un buen trozo libre, para poder colocar el resto del relleno y enrollar a continuación. Les damos la vuelta las hojas de Nori, con cuidado de que no se caiga el arroz, y en una colocamos arriba un poco de atún, con un poco de pepino y aguacate al lado, y en el otro, un poco de salmón y apio al lado, todo cortado en tiras finas. Si no te gusta el salmón puedes elegir otro tipo de pescado, pero a ser posible que tenga un sabor similar. El salmón es uno de los pescados más conocidos y consumidos en gran parte del mundo, además de su extraordinario sabor es un pescado bajo en grasas con un gran contenido en proteínas y ácidos omega-3. Envolvemos las esterillas, procurando que no sobresalga el relleno por los lados. Una vez envueltas, las quitamos y ya tenemos los rollitos preparados para cortar.</p><p>Emplearemos un cuchillo bien afilado, al cual mojaremos su filo con agua para facilitar los cortes. Ya podemos emplatar las rodajas de&nbsp;<strong>sushi</strong>, colocando encima de los trozos de salmón un poco de huevas de trucha, una buena alternativa al caviar con un sabor excelente. Tradicionalmente se llama caviar a las huevas del esturión, un pez que habita en muchos ríos de nuestro país y del centro del continente asiático. Estas huevas están consideradas todo un manjar y en el mercado son muy caras. Y a disfrutar de estos estupendos bocados de&nbsp;<strong>sushi</strong>, acompañados de trozos de wasabi, el jengibre encurtido y la salsa de soja.&nbsp;</p>',
      'ingredientes' => '<ul><li>250 gramos de arroz para Sushi</li><li>Una lámina de alga Nori</li><li>50 gramos de lomo de atún</li><li>50 gramos de lomo de salmón</li><li>Medio aguacate</li><li>Media rama de apio</li><li>Medio pepino</li><li>25 gramos de huevas de trucha</li><li>Medio vaso de azúcar</li><li>Medio vaso de mirin o vinagre de arroz</li><li>Agua</li><li>Wasabi, jengibre encurtido, salsa de soja (para acompañamiento)</li></ul>',
      'id_categoria' => '8'
    ]);
    Receta::create([
      'img_src' => 'canelones_atun.jpg',
      'titulo' => 'Canelones de Atún',
      'preparacion' => '<p>Primero, se pone una olla al fuego con abundante agua, una cucharada de aceite y un poco de <strong>sal</strong>. Cuando hierva se va incorporando la pasta de canelones lámina a lámina. Una vez cocida la retiramos de la olla y la refrescamos en agua frí­a.</p><p>A continuación se coloca la <strong>pasta</strong> sobre un paño de cocina grande y seco y la dejamos escurrir unos minutos. Mientras, picamos los huevos duros y desmenuzamos bien el atún. Luego los mezclamos en un recipiente, junto con la salsa de tomate. Añadimos un poco de pimienta al gusto.</p><p>Luego rellenamos los canelones con la mezcla anterior y los enrollamos, colocándolos en una refractaria para horno. Aparte calentamos la salsa bechamel y con ella cubrimos los canelones. Espolvoreamos con el queso rallado e introducimos en el horno ya caliente a 200ºC.</p><p>Horneamos hasta que la superficie esté dorada y servimos bien caliente.</p>',
      'ingredientes' => '<ul><li>12 unidades de pasta de canelones</li><li>150 g atún</li><li>1 taza salsa de tomate</li><li>3 huevos duros</li><li>3 tazas de salsa bechamel</li><li>2 cucharadas queso rallado</li><li>pimienta negra</li><li>aceite</li><li>sal</li></ul>',
      'id_categoria' => '1'
    ]);

  }

}

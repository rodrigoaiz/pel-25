<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ToolTip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2> El materialismo histórico: Categorías de análisis histórico  </h2>

<h3> El materialismo histórico: Categorías de análisis histórico </h3>
<p class="citation">
En <i>La Ideología Alemana</i>, nuestro autor define el por qué su visión es materialista: <br>
  <b>
   «Las <?php renderTooltip('premisas','Se entiende por premisa a la afirmación o idea que se toma 
   como cierta y es la base de un razonamiento lógico o como base para una discusión.');?> de que partimos no son arbitrarias, 
   no son arbitrarias, no son dogmas, sino premisas reales, de las cuales sólo puede abstraerse en la imaginación»</b>. 
</p>

<h3> Teoría y Praxis </h3>
<p class="citation">
En ese mismo libro, en las Tesis sobre Feuerbach define la relación entre teoría y praxis: <br>
   Tesis VIII <b>«<i>La vida social es, en esencia, práctica</i>. Todos los misterios que descarrían la teoría hacia el 
   <?php renderTooltip('misticismo','SLa mística es una variedad de la experiencia religiosa que se manifiesta a través 
   de una experiencia no racional y no sensorial que lleva a quien la vive una relación íntima con la divinidad.');?> encuentran su 
   solución racional en la práctica humana y en la comprensión de esta práctica»</b> y concluye en la tesis XI al afirmar: <b>«Los 
    filósofos no han hecho más que interpretar de diversos modos el mundo, pero de lo que se trata es de transformarlo»</b>.
</p>

<h3> Premisa y condiciones de toda historia </h3>
<p class="citation">
Marx define la premisa de toda historia: <br>
   <b>«La primera premisa de toda existencia humana y también, por tanto, de toda historia, es que los hombres se hallen, para «hacer 
    historia», en condiciones de poder vivir. Ahora bien, para vivir hacen falta ante todo comida, bebida, vivienda, ropa y algunas 
    cosas más. El primer hecho histórico es, por consiguiente, la producción de los medios indispensables para la satisfacción de estas 
    necesidades, es decir, la producción de la vida material misma, y no cabe duda de que es éste un hecho histórico, una condición 
    fundamental de toda historia»</b> [escritos sobre el materialismo histórico, La ideología alemana, capítulo 1, p. 52-52].
</p>

<h3> El motor de toda historia: la lucha de clases </h3>
<p class="citation">
   <b>«La historia de todas las sociedades hasta el día de hoy es historia de luchas de clases. Libre y esclavo, patricio y plebeyo, 
    señor y siervo, maestro y oficial, en suma, opresores y oprimidos, han estado y están enfrentados entre sí, han mantenido una lucha 
    ininterrumpida, ya oculta ya abierta, una lucha que en todos los casos terminó con una transformación revolucionaria. de toda la 
    sociedad, o bien con el hundimiento conjunto de las clases en lucha»</b>. [<i>Manifiesto del partido comunista</i>, cap. 1]
</p>

<div class="mx-auto max-w-lg">
<?php
  renderImage('th2-u1-Diego_Rivera_mural.webp', 'Un concepto central dentro del materialismo histórico es la lucha de clases, misma que 
  los autores presentan como el motor de la historia. La imagen es un mural de Diego Rivera en Palacio Nacional.',
  'https://es.m.wikipedia.org/wiki/Archivo:Murales_Rivera_-_Treppenhaus_7_Marx.jpg','Wikimedia Commons.');?>
</div>

<h3> El motor de toda historia: la lucha de clases </h3>
<p class="citation">
   <b>«En la producción social de su existencia, los hombres establecen determinadas relaciones, necesarias e independientes de su voluntad, 
    relaciones de producción que corresponden a un determinado estadio evolutivo de sus fuerzas productivas materiales. La totalidad de esas 
    relaciones de producción constituye la estructura económica de la sociedad, la base real sobre la cual se alza un edificio jurídico y político, 
    y a la cual corresponden determinadas formas de conciencia social. El modo de producción de la vida material determina el proceso social, político 
    e intelectual de la vida en general. No es la conciencia de los hombres lo que determina su ser, sino, por el contrario, es su existencia social lo 
    que determina su conciencia»</b>.
</p>

<h3> Cambio de una sociedad </h3>
<p class="citation">
   <b>
    «En un estudio determinado de su desarrollo, las 
   <?php renderTooltip('fuerzas productivas','Es un concepto central del materialismo histórico y se  que se toma como cierta y es la base de un razonamiento 
   lógico o como base para una discusión. Las fuerzas productivas son todos aquellos medios materiales, la mano de obra y las técnicas que se utilizan para 
   desarrollar un proceso productivo.');?>
   materiales de la sociedad entran en contradicción con las relaciones de producción existentes o -lo cual sólo constituye una expresión jurídica de lo mismo-
   con las relaciones de producción dentro de las cuales se habían estado moviendo hasta ese momento. Esas relaciones se transforman de formas de desarrollo de 
   las fuerzas productivas en ataduras de las mismas. Se inicia entonces una época de revolución social. Con la modificación del fundamento económico, todo ese 
   edificio descomunal se trastoca con mayor o menor rapidez […] tampoco es posible juzgar una época semejante de revolución a partir de su propia conciencia, 
   sino que, por el contrario, se debe explicar esta conciencia a partir de las contradicciones de la vida material, a partir del conflicto existente entre fuerzas 
   sociales productivas y relaciones de producción. Una formación social jamás perece hasta tanto no se hayan desarrollado todas las fuerzas productivas para las 
   cuales resulta ampliamente suficiente, y jamás ocupan su lugar relaciones de producción nuevas y superiores antes de que las condiciones de existencia de las 
   mismas no hayan sido incubadas en el seno de la propia antigua sociedad»
   </b>
</p>

<h3> Modos de producción </h3>
<p class="citation">
   <b>«A grandes rasgos puede calificarse a los modos de producción asiático, antiguo, feudal y burgués moderno de épocas progresistas de la formación 
    económica de la sociedad»</b> [Prólogo a la contribución a la crítica de la economía política, 1859, p. 5-6].
</p>

<p>En muchos sentidos, el materialismo histórico, tal como lo proponen Marx y Engels se convertirá en la primera teoría de la historia moderna y su influencia continúa hasta nuestros días.</p>

<p>Revisa el siguiente vídeo para que recuerdes las características de los modos de producción:</p>

<?php renderVideoIframe('DB7st1H3mlA', 'Formaciones sociales no capitalistas: comunidad primitiva, modo asiático de producción, esclavismo y feudalismo.');?>

<p>Realiza un mapa conceptual en el que recuperes las características, los autores y las categorías de análisis del materialismo histórico.</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t4a2', "Los conceptos del materialismo histórico", $ActividadContent);
?>

<h4> Recuerda que la lectura es fundamental para esta materia.</h4>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
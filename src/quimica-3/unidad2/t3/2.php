<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Propiedades químicas de los metales (Serie electromotriz). </h2>
  
  <p>Como viste en el ejemplo de la reacción de desplazamiento simple, el Cu desplazó a la Ag, con lo cual el Cu queda enlazado al ion nitrato (NO3-) y de esta forma obtener la Ag metálica. Pero entonces ¿es posible que todos los elementos, en este caso los metales, puedan desplazar a otros y llevarse a cabo una reacción química? La respuesta a esta pregunta la brinda la <b><i>serie electromotriz.</i></b></p>

  <p>La Serie electromotriz es una tabulación en la cual varias sustancias, tales como metales o elementos son listados de acuerdo con su reactividad química. La reactividad de un elemento químico es la tendencia que dicho elemento posee a combinarse con otros. Para los metales esta tendencia está directamente relacionada con la facilidad con la que pierden sus electrones de valencia. Cuanto menor sea la energía de ionización del metal, mayor será su reactividad. Observa la siguiente imagen:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-electro.webp','Serie electromotriz')
  ?>
  </div>

  <p>Como puedes observar, en la tabla de la Serie electromotriz, el Cu está por encima de la Ag, es decir, es más reactivo, por lo tanto es posible que pueda desplazar a la plata, formar un compuesto con el NO3- y dejar a la plata como elemento metálico.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-simple.webp','Reacción de desplazamiento simple')
  ?>
  </div>

  <p>En ejemplo de la sustitución doble, ocurre algo similar el Ca es más reactivo que el Mg, por lo que el Ca puede desplazar al Mg para formar óxido de calcio CaO y el Mg forma MgS.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-doble.webp','Reacción de desplazamiento doble')
  ?>
  </div>

  <p>Observa los siguientes ejemplos:</p>

  <p>¿Son posibles las siguientes reacciones químicas?</p>

   
    <?php
      renderImage('q3-u2-imposible.png','Reacciones posibles o no posibles')
  ?>
  

  <p>Como puedes observar, la serie electromotriz es una herramienta que permite predecir si una reacción química es posible o no. Ahora es momento de aplicar lo que has aprendido. Realiza la actividad Predicción de reacción y ecuación química.</p>

  <?php ob_start(); ?>
  <p>A continuación, realiza la actividad de predicción de reacciones químicas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a2', "Predicción de reacciones químicas", $ActividadContent);
  ?>

  <p>Muy bien, ahora observarás un video en el cual se presenta una actividad experimental, la cual pone en evidencia la reactividad de los metales, así como su relación con la serie electromotriz.</p>

  <p>Observa con atención el video “<b>Experimentos hierro y sulfato de cobre</b>” y toma las notas que consideres necesarias.</p>

  <?php
  renderVideoIframe('qoXZjaUeNss', 'Experimentos hierro y sulfato de cobre');
  ?>

  <p>De acuerdo con lo observado en el video “<b>Experimentos hierro y sulfato de cobre</b>”, elabora la actividad Experimentos hierro y sulfato de cobre. </p>

  <?php ob_start(); ?>
  <p>A continuación, elabora la actividad Experimentos hierro y sulfato de cobre.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t3a3', "Experimentos hierro y sulfato de cobre", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

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
  <h2>Propiedades periódicas</h2>
  
  <p>Como ya revisaste anteriormente, las reacciones químicas pueden llevarse a cabo dependiendo de los reactivos que estén participando en ellas. Todos los elementos de la tabla periódica tienen propiedades específicas que los hacen más o menos reactivos. Pero ¿cuáles son esas propiedades que influyen en su reactividad? A continuación revisa el siguiente video sobre las propiedades periódicas:</p>

  <?php
  renderVideoIframe('alHcrYWfQns', 'Propiedades periódicas');
  ?>

  <p>El video anterior hace referencia a las propiedades periódicas de los elementos las cuales son propiedades que caracterizan a los elementos químicos y que varían en cada uno de ellos de acuerdo con su posición en la tabla periódica, pero al mismo tiempo, siguen una tendencia en cuanto al grupo y periodo en el que se encuentra el elemento. </p>

  <p>Ingresa a la siguiente página en la cual se explica con mayor detenimiento cada una de las propiedades periódicas y realiza la actividad de autoevaluación para la comprensión del tema.</p>


  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-bunam.webp','', 'https://alianza.bunam.unam.mx/cch/propiedades-periodicas/', 'Propiedades periódicas (lectura)');
  ?>
  </div>

  <p>Después de haber leído sobre las propiedades periódicas, realiza la actividad de autoevaluación que viene en la página, toma captura de pantalla para compartirla como archivo adjunto en la actividad Propiedades periódicas.</p>

  <?php ob_start(); ?>
      <p>Sigue las instrucciones de la actividad de autoevaluación y sube tu respuesta.</p>
  <?php
      $ActividadContent = ob_get_clean();
       renderActividad('u2t3a4', "Propiedades periódicas", $ActividadContent);
  ?>

  <p>Como has observado el tema de la reactividad de los metales, es importante porque indica cómo reaccionan con otros elementos y sustancias, lo que permite predecir y controlar reacciones en aplicaciones industriales y de laboratorio. Además, ese conocimiento permite determinar el proceso a seguir para la extracción y refinamiento de los metales y también los clasifica de acuerdo con sus principales usos y aplicaciones. Por otro lado, la reactividad de los metales también influye en su comportamiento en el medio ambiente, afectando su movilidad, toxicidad y capacidad de degradación. </p>

  <p>A continuación se presenta un cuestionario con el cual reafirmarás el tema de propiedades periódicas. Recuerda que todas las actividades influyen directamente en tu calificación final.</p>

  <p>Realiza el cuestionario de <b>Propiedades periódicas</b> para corroborar lo aprendido.</p>

  <?php ob_start(); ?>
      <p>Realiza el cuestionario de <b>Propiedades periódicas</b> </p>
  <?php
      $ActividadContent = ob_get_clean();
       renderActividad('u2t3a5', "Propiedades periódicas", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

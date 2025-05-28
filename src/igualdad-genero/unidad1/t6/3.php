<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Derechos Humanos</h2>
  <p>Para comprender a fondo la trascendencia de los Derechos Humanos en nuestra sociedad actual, es fundamental conocer su origen y la razón de su existencia. La siguiente actividad nos permitirá adentrarnos en la historia y la importancia de estos derechos fundamentales, sentando así las bases para entender por qué son esenciales en la construcción de un mundo más justo e igualitario para todas las personas.</p>
  <h3>Propósitos</h3>
  <p>Identificar la definición de los Derechos Humanos. Conocer el contexto histórico en el que surgieron los Derechos Humanos.</p>
  <h3>Instrucciones:</h3>
  <ol class="ol-number">
    <li>Observa el siguiente video:</li>
    <div class="my-5">
        <?php
        renderVideoIframe('PPeRECua5CQ', '');
        ?>
    </div>
    <li>Toma nota de los datos y hechos que consideres relevantes para identificar el proceso histórico que se dio para el reconocimiento y establecimiento de los derechos humanos en la Declaración Universal de los Derechos Humanos.</li>
    <li>Tus apuntes te ayudarán a responder el siguiente cuestionario.</li>
  </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t6a3', "Derechos Humanos", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
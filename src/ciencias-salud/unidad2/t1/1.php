<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad II</h2>

  <?php
  renderVideoIframe('GTxcjKskl6w', 'Bienvenida Ciencias de la Salud I, Unidad 2.');
  ?>

  <p>Antes de comenzar, te pedimos que realices un ejercicio de autoevaluación para que compruebes cuáles son los conocimientos previos que tienes en torno a los temas de esta unidad.</p>

   <?php ob_start(); ?>
  <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Cuestionario de autoevaluación diagnóstico Unidad 2", $ActividadContent);
  ?>
 
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

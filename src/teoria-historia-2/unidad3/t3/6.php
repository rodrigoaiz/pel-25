<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Evaluación final </h2>
 
  <p>Para finalizar esta unidad, te pedimos que realices un ejercicio de autoevaluación para que compruebes cuáles son los conocimientos que adquiriste a lo largo de esta unidad.</p>
  <?php ob_start(); ?>
  <p></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a9', "Cuestionario de autoevaluación final Unidad 3", $ActividadContent);
  ?>





</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
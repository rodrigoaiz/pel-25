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
  
 <?php ob_start(); ?>
  <p>Realiza el siguiente cuestionario de final para identificar los temas y conceptos aprendidos en esta lección.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t6a1', "Cuestionario de autoevaluación final de Unidad 2", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

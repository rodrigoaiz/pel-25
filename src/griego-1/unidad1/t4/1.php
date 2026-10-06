<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>

<h2>Cuestionario final </h2>
  <?php ob_start(); ?>
  <p>Ahora te invitamos a que contestes el siguiente cuestionario, para que puedas constatar todo lo que has aprendido. Con esta actividad damos por concluida la Unidad 1 de Griego I.
 </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a3', "Cuestionario final de autoevaluación de la unidad 1", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

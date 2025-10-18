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

<h3>Cuestionario </h3>

<?php ob_start(); ?>
  <p>Ahora te invitamos a que contestes el siguiente cuestionario, para que puedas constatar todo lo que has aprendido.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t3a4', "Cuestionario final de autoevaluación de la unidad 3 Sesión 2", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

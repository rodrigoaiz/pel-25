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
  <?php ob_start(); ?>
  <p>Como conclusión de esta unidad, realiza el ejercicio <b>“Vocabulario de Transcripción”</b>. Esta actividad está diseñada para que logres consolidar y evaluar tus aprendizajes de manera práctica. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a2', "Vocabulario científico-cultural y su  Transcripción", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

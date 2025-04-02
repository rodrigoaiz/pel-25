<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <?php ob_start(); ?>
  <p>Realiza la siguiente actividad de evaluación, que te permite conocer el logro de tu aprendizaje correspondiente a la unidad 4 “Multimedia”.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4a20', "Cuestionario final unidad 4", $ActividadContent);
  ?>
  <div class="my-5 mx-auto border border-primary p-5 text-center">
    <p> <strong>¡¡¡Felicidades!!!</strong></p>
    <p> <strong>Llegamos al final de la unidad, te invito a utilizar tu aprendizaje en tu cotidianidad.</strong></p>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

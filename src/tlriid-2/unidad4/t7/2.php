<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'TarjetasImagen.php';
include PATH_INCLUDE . 'FlipCards.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Evaluación final unidad 4</h2>
  <p>Felicidades, has concluido la unidad, ahora solamente resta el examen final.</p>
  <?php ob_start(); ?>

  <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u4a7', "Examen final", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

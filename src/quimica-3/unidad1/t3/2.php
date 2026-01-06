<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';
ob_start();
?>
<section>
  
  <h2>Elementos, compuestos y mezclas</h2>
  <?php ob_start(); ?>
  <p>Para continuar, refuerza los conceptos clave de la química a través de la actividad interactiva: elemento, compuesto y mezcla.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t3a2', "elemento, compuesto y mezcla", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

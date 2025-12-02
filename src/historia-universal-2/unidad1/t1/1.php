<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la Unidad 1</h2>
  
  <?php
  //ID confirmado del video
  renderVideoIframe('JmlS2Zf8-is', 'Bienvenida a la Unidad 1');
  ?>

  <h4>Cuestionario diagnóstico unidad 1</h4>
  <?php ob_start(); ?>
  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarse, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario diagnóstico de la Unidad 1", $ActividadContent);
  ?>
</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

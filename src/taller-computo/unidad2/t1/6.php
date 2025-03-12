<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Características de las computadoras</h3>
  <p>Recomiendo que realices una breve investigación sobre los tipos de Computadoras y lo anotes en tu cuaderno ya que lo retomaremos para hacer la tarea entregable, puedes apoyarte de las <a href="./unidad2/t1/9.php">Referencias</a> de la Lección.</p>
  <?php ob_start(); ?>
  <p>Da clic en la imagen para aprender más sobre las características de las computadoras.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a5', "Características de las computadoras", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

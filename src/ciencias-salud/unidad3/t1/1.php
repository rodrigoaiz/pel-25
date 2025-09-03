<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Título 1</h2>
  <h3>Título 2 si necesario</h3>
  <h4>Otro subtitulo</h4>
  <p>Revisen el ejemplo en Unidad 1 tema 1 ejemplo.php</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

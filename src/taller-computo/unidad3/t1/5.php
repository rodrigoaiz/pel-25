<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Celdas y su formato</h3>
  <p>En Excel, puedes aplicar varios tipos de formato a las celdas para mostrar datos numéricos, fechas, moneda, porcentajes, fracciones y otros. A continuación, veremos estos distintos formatos:</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

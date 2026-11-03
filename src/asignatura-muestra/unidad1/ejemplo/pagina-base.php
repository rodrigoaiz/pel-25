<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <!-- ✏️ Tu contenido va aquí, entre <section> y </section>. -->

</section>
<!-- 💡 Si tu página lleva «Para saber más», pégalo aquí, fuera del section. -->

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

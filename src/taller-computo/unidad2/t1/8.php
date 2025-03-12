<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>¿Sabías que?</h3>
  <p>La UNAM tiene su propia Supercomputadora y se llama MIZTLI.</p>
  <p>Miztli es una supercomputadora, integrada por muchas computadoras capaces de trabajar al mismo tiempo y de forma coordinada, como si se tratara de una sola.</p>
  <p>Realiza un recorrido virtual para que la conozcas, descarga la <a href="https://play.google.com/store/apps/details?id=mx.unam.dgtic.dvrv.SiteVirtualSupercomputo" target="_blank">app Miztli: La supercomputadora de y disfruta tu recorrido</a></p>
  <h3>¿Quieres saber más?</h3>
  <p>Te invito a que revises el siguiente <a href="https://www.super.unam.mx/miztli" target="_blank">link</a>, donde se habla sobre la Supercomputadora Miztli.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

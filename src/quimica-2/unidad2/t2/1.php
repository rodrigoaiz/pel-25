<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la lección 2</h2>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('m-O2D2Rkt4Q', 'Bienvenidos a la unidad y a la segunda lección.');
    ?>
  </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
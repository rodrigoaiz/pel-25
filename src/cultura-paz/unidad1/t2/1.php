<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'IseazyIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Revisión de contenidos</h2>
  <p>En la siguiente <span class="text-violet-400 font-bold">Presentación Interactiva</span> encontrarás contenidos y actividades relacionadas con los temas que se abordan en la unidad. A través de ellas podrás reflexionar, participar activamente y prepararte para comprender mejor los contenidos que trabajaremos. Revisa cada sección con atención y no olvides realizar todas las actividades.</p>
</section>
<?php renderiseazy('29d3a5afe7cc4cf595d5ea7e683bf816') ?>
<section>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
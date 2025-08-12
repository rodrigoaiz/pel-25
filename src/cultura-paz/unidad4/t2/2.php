<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'IseazyIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Derechos humanos, justicia e inclusión</h2>
  <p>Ya revisaste algunos materiales que te ayudan a entender que los <strong>derechos humanos,</strong> la <strong>justicia</strong> y la <strong>inclusión</strong> son esenciales para crear un ambiente donde todos los estudiantes puedan desarrollarse de manera plena y equitativa. Ya que el CCH no solo es un espacio para el aprendizaje académico, sino también para la formación de valores fundamentales que te guiarán en tu vida social y en la construcción de una sociedad más justa y respetuosa.
  </p>
  <p>A continuación te pedimos que revises la siguiente <span class="text-violet-400 font-bold">presentación interactiva</span> y realices las actividades dentro de ella.</p>
</section>
<?php renderiseazy('3adcf3400971421681cd2516e3308886') ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
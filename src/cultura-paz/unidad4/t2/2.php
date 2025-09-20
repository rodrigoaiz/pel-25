<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';



$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Revisión de contenidos</h2>
  <p>Ya revisaste algunos materiales que te ayudan a entender que los <strong>derechos humanos,</strong> la <strong>justicia</strong> y la <strong>inclusión</strong> son esenciales para crear un ambiente donde todos los estudiantes puedan desarrollarse de manera plena y equitativa. Ya que el CCH no solo es un espacio para el aprendizaje académico, sino también para la formación de valores fundamentales que te guiarán en tu vida social y en la construcción de una sociedad más justa y respetuosa.
  </p>
  <p>A continuación te pedimos que revises la siguiente <span class="text-violet-400 font-bold">presentación interactiva</span> y realices las actividades dentro de ella.</p>
</section>
<div class="max-w-7xl mx-auto">
  <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
    <iframe
      title="Presentación Interactiva"
      frameborder="0"
      width="100%"
      height="100%"
      class="absolute top-0 left-0 w-full h-full"
      src="https://pel.cch.unam.mx/programas/unidad4/index_local.html"
      type="text/html"
      allowscriptaccess="always"
      allowfullscreen="true"
      scrolling="yes"
      allownetworking="all">
    </iframe>
  </div>
</div>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

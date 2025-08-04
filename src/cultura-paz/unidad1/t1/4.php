<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'GeniallyIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Revisión de contenidos</h2>
  <p>En la siguiente <span class="text-violet-400 font-bold">Presentación Interactiva</span> encontrarás contenidos y actividades relacionadas con los temas que se abordan en la unidad. A través de ellas podrás reflexionar, participar activamente y prepararte para comprender mejor los contenidos que trabajaremos. Revisa cada sección con atención y no olvides realizar todas las actividades.</p>
</section>
<article class="mx-auto">
  <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
    <iframe
      frameborder="0"
      width="100%"
      height="100%"
      class="absolute top-0 left-0 w-full h-full"
      src="<?php echo PATH_DOCS . 'impresionistas/index.html'; ?>"
      type="text/html"
      allowscriptaccess="always"
      allowfullscreen="true"
      scrolling="yes"
      allownetworking="all">
    </iframe>
  </div>
</article>
<section>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
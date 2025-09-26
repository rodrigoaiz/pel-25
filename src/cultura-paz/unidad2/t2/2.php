<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Revisión de contenidos</h2>
  <p>La <strong>cultura de la paz o por la paz</strong> es un enfoque <strong>educativo, social</strong> y <strong>político</strong> que promueve <strong>valores, actitudes</strong> y <strong>comportamientos</strong> orientados a <strong>resolver los conflictos mediante el diálogo</strong>, la <strong>empatía</strong> y la <strong>no violencia</strong>, fomentando la <strong>justicia</strong>, la <strong>equidad</strong> y el <strong>respeto a los derechos humanos.</strong> Sus principales objetivos son <strong>prevenir la violencia</strong> en todas sus formas, <strong>promover la convivencia armónica,</strong> fortalecer la participación democrática y educar en valores que permitan construir <strong>relaciones justas</strong> y solidarias tanto a nivel personal como colectivo.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderImage('u2t1p02_jovenes_leyendo.webp');
    ?>
  </div>
  <p>Ahora te pedimos que revises la presentación interactiva de esta unidad donde encontrarás los conceptos y actividades sobre la cultura de paz.</p>
</section>
<div class="max-w-7xl mx-auto">
  <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
    <iframe
      title="Presentación Interactiva"
      frameborder="0"
      width="100%"
      height="100%"
      class="absolute top-0 left-0 w-full h-full"
      src="https://pel.cch.unam.mx/programas/unidad2/index_local.html"
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

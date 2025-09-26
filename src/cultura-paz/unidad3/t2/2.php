<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Revisión de contenidos</h2>
  <p>Los <strong>conflictos son parte natural de la vida:</strong> surgen cuando hay diferencias de intereses, opiniones o necesidades. Sin embargo, lo importante no es evitarlos a toda costa, sino <strong>aprender a manejarlos de manera respetuosa y constructiva.</strong></p>
  <?php
  renderImagePleca('u3t1p02-resolucion.webp');
  ?>
  <p>La <strong>resolución pacífica de conflictos</strong> busca precisamente eso: encontrar soluciones a través del <strong>diálogo,</strong> la <strong>empatía</strong> y el <strong>respeto,</strong> evitando la <strong>violencia</strong> y fomentando acuerdos que beneficien a todas las partes involucradas. Este proceso fortalece nuestras relaciones, construye <strong>confianza</strong> y nos ayuda a <strong>convivir en entornos más justos y armónicos.</strong></p>
  <p>A lo largo de este tema, reflexionaremos sobre cómo podemos expresar lo que sentimos y pensamos sin agredir, escuchar activamente a los demás y buscar puntos de acuerdo que nos permitan crecer juntos.</p>

  <p>A continuación revisaremos la presentación interactiva en la que podrás conocer a profundidad los temas de esta unidad.</p>
</section>
<div class="max-w-7xl mx-auto">
  <div class="aspect-video h-0 py-0 relative" style="padding-bottom: 56.25%;">
    <iframe
      title="Presentación Interactiva"
      frameborder="0"
      width="100%"
      height="100%"
      class="absolute top-0 left-0 w-full h-full"
      src="https://pel.cch.unam.mx/programas/unidad3/index_local.html"
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

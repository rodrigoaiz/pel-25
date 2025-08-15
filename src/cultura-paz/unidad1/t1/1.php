<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida al curso</h2>
  <div class="grid grid-cols-3 gap-4 content-center">
    <div class="col-span-2">
      <p class="font-bold text-xl text-orange-500">¡Bienvenidos y bienvenidas, ccheros y ccheras!</p>
      <p>Es un gusto recibirlos en este curso de <strong>Cultura por la Paz</strong>, donde juntos aprenderemos a convivir con <strong>respeto, empatía y solidaridad</strong>. Aquí reflexionaremos, compartiremos ideas y fortaleceremos valores que nos ayudarán a <strong>construir un entorno más pacífico.</strong></p>
      <p class="text-xl text-center text-violet-700">¡Disfruten este viaje y sigamos siendo agentes de cambio para una cultura de paz!</p>
    </div>

    <div class="...">
      <?php
      renderImage('cultura_x_paz_logo.webp');
      ?>
    </div>
  </div>

  <p>Antes de comenzar, veremos el siguiente video para arrancar con el curso.</p>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('PVDQBGYuUQI', 'Bienvenida al curso');
    ?>
  </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

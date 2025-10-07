<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 2</h2>
  <h3>Bienvenue à l'unité 2</h3>
  <div class="flex">
    <div class="max-2xl mx-auto">
      <?php
      renderImage('fr1u2a1-portada.webp');
      ?>
    </div>
  </div>
</section>
<div class=" flex flex-row justify-center gap-4">
  <div class="basis-1/3">
    <?php
    renderVideoIframe('HBYhxdstHsw', 'Bienvenida a la unidad 2.');
    ?>
  </div>
</div>
<section>
  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre esta unidad en particular.</p>
  <?php ob_start(); ?>
  <p>Responde cada una de las preguntas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Cuestionario diagnóstico | Unidad 2", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
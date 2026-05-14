<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 4</h2>

  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('7BKxul2dN_A', 'Bienvenida a la unidad 4');
      ?>
    </div>
  </div>
  <p>A continuación y antes de iniciar el estudio de esta cuarta unidad, te solicitamos que contestes el siguiente cuestionario inicial. Es importante que lo hagas para que, al finalizar esta unidad, puedas constatar tus avances en esta materia.</p>
  <p>Responde cada una de las preguntas.</p>
  <?php ob_start(); ?>
  <p>Responde cada una de las preguntas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u4t1a1', "Cuestionario diagnóstico | Unidad 4", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Examen final de la unidad 1</h2>
  
  <?php ob_start(); ?>
  
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
      <li>Responde a las siguientes preguntas de opción múltiple.</li>
    </ol>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a5', "Examen de la unidad", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

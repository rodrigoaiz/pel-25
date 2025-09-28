<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 3</h2>

  <?php
  renderVideoIframe('dQw4w9WgXcQ', 'Presentación Unidad 3');
  ?>

  <p>Para comenzar vamos a un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo andan tus conocimientos sobre la unidad anterior.</p>

   <?php ob_start(); ?>
  <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a1', "Cuestionario diagnóstico de autoevaluación", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 1</h2>

    <?php
    renderVideoIframe('jnJb09KBJ-I', 'Bienvenida a la unidad 1.');
    ?>


  <?php ob_start(); ?>
  <p>Para comenzar, vamos a hacer un sencillo ejercicio que te permite autoevaluarte, así puedes saber cómo están tus conocimientos sobre esta unidad de la asignatura en particular.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1a1', "Cuestionario de autoevaluación  diagnóstica de la Unidad 1", $ActividadContent);
  ?>

  <p>Para iniciar con la asignatura de “Griego I” te presentamos el Mapa de la Antigua Grecia para que ubiques su situación geográfica y te familiarices con sus nombres.</p>

  <div class="max-w-md mx-auto">
   <?php
  renderImage('g1-u1-mapagrecia.jpg', 'Arenas, A. (2026). Mapa de la Antigua Grecia [Ilustración].');
  ?>
  </div>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

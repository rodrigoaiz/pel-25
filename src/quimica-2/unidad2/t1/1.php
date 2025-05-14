<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 2 y a la lección 1</h2>
  <p>Bienvenidos, antes de comenzar la unidad observa el siguiente video.</p>
  <div class="max-w-xl mx-auto">
    <?php
    renderVideoIframe('_3oF7Qucnrw', 'Bienvenida a la unidad 2.');
    ?>
  </div>
  <h3>¿Cuánto sabes?</h3>
  <?php ob_start(); ?>
  <p>Antes de comenzar con la unidad, nos gustaría que vieras qué tanto sabes acerca de los temas a tratar, por lo que te pedimos que realices el siguiente cuestionario diagnóstico. Recuerda que es solo para tener una idea de los conceptos previos que posees, por lo cual es de suma importancia que contestes de manera honesta. Este cuestionario no influye en tu evaluación del curso.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a1', "Cuestionario diagnóstico de unidad 2", $ActividadContent);
  ?>
</section>
<?php renderModalIndex('<strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1 y 2, en breve podrás acceder a las siguientes unidades'); ?>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
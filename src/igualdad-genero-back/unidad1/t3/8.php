<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Cuestionario final: Relaciones de poder</h2>
  <h3>Propósito de la actividad:</h3>
  <p>Este cuestionario te permitirá evaluar tu aprendizaje de esta sección del curso. Al responder las preguntas, podrás consolidar y demostrar tu comprensión y reflexión crítica sobre los temas tratados.</p>
  <h3>Instrucciones:</h3>
  <p>Responde las siguientes preguntas tomando en cuenta las actividades y lecturas que realizaste a lo largo de este aprendizaje.</p>
  <h3>Cuestionario</h3>
  <ol class="ol-number">
    <li>A partir de lo que reflexionamos durante este aprendizaje, ¿qué factores históricos han propiciado la desigualdad?</li>
    <li>¿Cuáles son los ámbitos en que se manifiestan las relaciones de poder y qué tipo de desigualdades provocan? Usa ejemplos para argumentar tu respuesta.</li>
    <li>¿Qué acciones propondrías para cerrar la brecha de desigualdad, específicamente de género, en los distintos ámbitos en los que te desenvuelves cotidianamente?</li>
  </ol>
    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u1t3a6', "Cuestionario final del aprendizaje 3 Relaciones de poder", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Bienvenida a la unidad 1 </h2>

  <p>Esta unidad contiene tres aprendizajes en los que se desarrollarán diferentes habilidades cognitivas a partir de temáticas vinculadas con la Industria química en México. Es importante que reconozcas que la temática de la asignatura está presente en diferentes ámbitos de la vida cotidiana y, en este caso, existe una relación con la industria y la productividad en la economía mexicana.</p>
  
  <?php
  renderVideoIframe('<iframe src="https://drive.google.com/file/d/1A7JWWA_9J8t_e6yAOwMMa3hpg5iZMikF/preview" width="640" height="480" allow="autoplay"></iframe>', 'Este es el primer video de la asignatura');
  ?>

  <p>Para comenzar, resolverás un cuestionario diagnóstico de opción múltiple, que tiene como finalidad indagar sobre los conocimientos generales que tienes de las asignaturas de Química que ya cursaste. ¡Adelante! </p>

  <?php ob_start(); ?>
  <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario diagnóstico de autoevaluación", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

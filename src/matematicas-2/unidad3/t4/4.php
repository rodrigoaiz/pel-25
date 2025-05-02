<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<p>Ahora revisemos el siguiente aprendizaje, en el que conocerás cual es la distancia más corta de un punto
                a una recta. </p>
            <p>Revisar el siguiente video en el cual se representan los casos de distancia de un punto a una recta, es
                muy importante que comprendas el aprendizaje ya que en Matemáticas III lo utilizarás para resolver
                problemas donde interviene la Geometría Analítica.</p>

<div class="lg:grid">
  <?php
  renderVideoIframe('vX7QszPRQ4o', 'Distancia de un punto a una recta');
  ?>
</div>

<?php ob_start(); ?>
  <p>Realiza la siguiente actividad , así puedes saber cómo están tus conocimientos sobre este aprendizaje en particular.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a9', "Distancia de un punto a una recta", $ActividadContent);
?>

<p>Muy bien, esperamos que hayas construido tu aprendizaje de manera significativa. Ten presente que lo aprendido hasta el momento lo aplicarás en Matemáticas III.</p>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
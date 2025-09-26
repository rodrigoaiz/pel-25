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
  <h2>Bienvenida al programa de Ciencias de la Salud</h2>
  <h2>Unidad 1 - La salud como proceso biopsicosocial</h2>
  <?php
  renderVideoIframe('4C7ffvwdcr4', 'Video de bienvenida a la asignatura');
  ?>
  <h3>Bienvenida a la Unidad 1</h3>
  <?php
  renderVideoIframe('mjDoQ_hs8Uk', 'Video de bienvenida a la unidad 1');
  ?>
  <p>Antes de comenzar, te pedimos que realices un ejercicio de autoevaluación para que compruebes cuáles son los conocimientos previos que tienes en torno a los temas de esta unidad.</p>
  <?php ob_start(); ?>
  <p>Para que puedas conocer cuánto sabes del tema, resuelve el siguiente cuestionario. Lee cuidadosamente las preguntas y selecciona la letra que corresponda a la respuesta correcta.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t1a1', "Cuestionario de autoevaluación diagnóstico Unidad I", $ActividadContent);
  ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

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
  <h2>Bienvenida a la unidad 2</h2>

  <?php
  renderVideoIframe('vstgDYHi3fA', 'Bienvenida a la unidad 2 del curso de Química III.');
  ?>

  <p>En esta unidad, reconocerás la importancia nacional de los recursos mineros, identificarás los cambios físicos y químicos que experimentan los minerales durante el proceso de extracción de metales, las reacciones de óxido reducción involucradas en los procesos minero–metalúrgicos y su estequiometría, la reactividad de los metales y su relación con la energía requerida para liberarlos del mineral, así como, la utilidad del modelo de enlace metálico para explicar, a nivel partícula, las propiedades que se observan en los metales.</p>

  <p>Todo ello a través de la indagación documental y experimental, y mediante el trabajo en equipo, para reforzar los valores, fomentar la participación y evaluar algunos riesgos ambientales por la inadecuada explotación de los recursos mineros en México.</p>

  <p>Para comenzar, realiza el Cuestionario diagnóstico de autoevaluación que te ayudará a identificar lo que sabes.</p>
  

  <?php ob_start(); ?>
  <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Cuestionario diagnóstico de autoevaluación", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

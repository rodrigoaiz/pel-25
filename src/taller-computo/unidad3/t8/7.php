<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ParaSaber.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>¿Cómo vamos?</h3>
  <p>Realiza la siguiente <a href="https://es.educaplay.com/recursos-educativos/9791590-funciones_logicas_y_de_texto.html" target="_blank">actividad</a> para fortalecer tu nuevo conocimiento, relacionando las columnas de manera correcta.</p>
  <h4>¿Tienes dudas?</h4>
  <p>Revisa el siguiente video explicativo sobre funciones: lógicas y de texto, para reforzar tu aprendizaje, puedes recurrir a este por si tienes dudas para tu entregable.</p>
  <div class="max-w-2xl mx-auto">
    <?php renderVideoIframe('RgzvMtLDAao', 'Resuelve problemas empleando funciones lógicas y de texto', 'mx-auto max-w-3xl') ?>
  </div>
  <?php ob_start(); ?>
  <p>Es momento de entregar lo que has ido trabajando a lo largo de la lección.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a15', "Actividades de refuerzo", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza la siguiente actividad ¿Me hace falta algo? Funciones lógicas y de texto, que te permite conocer el logro de tu aprendizaje, así como identificar que te hace falta reforzar.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a16', "Funciones lógicas y de texto", $ActividadContent);
  ?>
  <?php ob_start(); ?>
  <p>Realiza la siguiente actividad de evaluación, que te permite conocer el logro de tu aprendizaje correspondiente a la unidad 3 “Aplicaciones matemáticas con una hoja electrónica de cálculo”.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a17', "Cuestionario final unidad 3", $ActividadContent);
  ?>
</section>
<?php ob_start(); ?>
<section>
  <p>La primera hoja electrónica de datos surgió por un error de cálculo de un profesor de Universidad y que Dan Bricklin se imaginó la posibilidad de una hoja de cálculo interactiva, a quien se le reconoce el inventor de la hoja de cálculo a la cual le dio el nombre de VisiCalc mostrándola en 1972.</p>
  <h4>¿Quieres saber más?</h4>
  <p>Te invito a buscar información sobre cómo hacer gráficas de impacto con la hoja de cálculo.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "¿Sabías que?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

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
  <h2>Bienvenida a la Unidad 2</h2>
  <h3>Hardware y Software</h3>
  <p>En la Unidad II. “Hardware y Software” describirías la evolución de las computadoras a partir del hardware y software, determinando las características de las generaciones de computadoras incluyendo el modelo de Jhon Von Neuman y las tendencias. Además de, identificar los riesgos en el uso de las computadoras y cómo prevenirlas.</p>
  <div class="max-w-2xl mx-auto">
    <?php
    renderVideoIframe('-IZdVEdcEqM', 'Presentación de la Unidad II “Hardware y Software”');
    ?>
  </div>
  <div class="text-center">
    <a href="https://view.genially.com/64f211f9c0cb900018cbd4ab/interactive-content-aprendizaje-y-tematicas" target="_blank" class="text-2xl">Conoce los aprendizajes de esta unidad</a>
  </div>
  <?php ob_start(); ?>
  <p>Una vez que has revisado el video de bienvenida, la presentación y los aprendizajes, así cómo las temáticas que se incluyen en la unidad II. Hardware y Software, te invitamos a medir tus conocimientos básicos en el tema, cómo una autoevaluación, con el objetivo de apoyarte a enfatizar en aquellos aprendizajes que consideres que requieren más atención. Así que, <strong>¡Comencemos!</strong></p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2a1', "Cuestionario diagnóstico unidad 2", $ActividadContent);
  ?>
</section>
<?php renderModalIndex('<strong>IMPORTANTE 2:</strong> Sólo encontrarás disponible el contenido de la Unidad 1 y 2, en breve podrás acceder a las siguientes unidades'); ?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

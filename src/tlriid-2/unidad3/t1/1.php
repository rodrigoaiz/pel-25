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
  <h2>Bienvenida al curso</h2>
  <p>Esta unidad tiene como propósito que apliques en un trabajo escolar concreto, las habilidades de lectura, redacción e investigación, mismas que practicaste en la unidad anterior. Por ello, el primer aprendizaje se refiere a la necesidad de fomentar la planeación de tus escritos a partir del “Calentamiento global”, propuesto como tema base para la puesta en práctica de diversas actividades; sin embargo, el profesor o profesora y el grupo podrán elegir otro referente para la elaboración del tríptico y el trabajo escolar. </p>
  <div class="flex justify-center gap-6">
    <div class="w-2/3 md:full mb-2">
      <?php
      renderVideoIframe('5s0hcsNiXSk', 'Bienvenida a la unidad 3');
      ?>
    </div>
  </div>
  <p>A continuación y antes de comenzar el estudio de esta tercera unidad, te solicitamos que contestes el siguiente cuestionario inicial. Es importante que lo hagas para que, al finalizar esta unidad, puedas constatar tus avances en esta materia. </p>
  <?php ob_start(); ?>
  <p>Responde cada una de las preguntas.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t1a1', "Cuestionario diagnóstico | Unidad 3", $ActividadContent);
  ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
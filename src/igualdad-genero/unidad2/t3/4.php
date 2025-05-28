<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Foro. Feminicidio de Ingrid Escamilla y violencia de género</h2>

  <div class="max-2xl mx-auto">
    <?php
    renderImage('u2t3-Iga9-img04.webp');
    ?>
  </div>

  <p>Reconocer los tipos y manifestaciones de violencia de género como antecedentes a la violencia feminicida.</p>

  <h3>Instrucciones:</h3>

  <ol class="ol-number">
    <li>Con base en el cuadro que elaboraste en la actividad anterior, responde a las siguientes preguntas y comparte tus respuestas en el foro:</li>
    <ul class="ul-disc">
      <li>Explica con tus palabras ¿qué es feminicidio?</li>
      <li>¿Qué tipo de violencia de género se puede observar en la relación entre Ingrid Escamilla y su agresor?</li>
      <li>Con base en las notas periodísticas ¿cómo se manifiesta dicha violencia? Ejemplifica.</li>
      <li>Desde tu punto de vista ¿qué relación existe entre estos tipos de violencia de género y el feminicidio?</li>
      <li>¿Consideras que las notas periodísticas sobre el caso de Ingrid Escamilla fueron elaboradas con perspectiva de género? ¿por qué?</li>
    </ul>
    <li>Al finalizar tu participación, comenta la respuesta de alguno de tus compañeros.</li>
  </ol>

    <?php ob_start(); ?>
      <?php
      $ActividadContent = ob_get_clean();
      renderActividad('u2t9a3', "Feminicidio de Ingrid Escamilla y violencia de género", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

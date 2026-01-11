<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Reacción química </h2>
  <h3>Reacciones exotérmica y endotérmica.</h3>
  
  <p>Las reacciones químicas siempre van acompañadas de cambios de energía. De acuerdo con estos “cambios”, las reacciones pueden ser exotérmicas cuando liberan energía en forma de calor y endotérmicas si absorben energía en forma de calor.</p>

  <h4>¿Qué es una reacción exotérmica?</h4>

  <p>Una reacción exotérmica es aquella donde la energía fluye hacia afuera del sistema. Esta energía se libera en forma de calor, por lo que al colocar un termómetro en el sistema de reacción la temperatura aumenta.</p>

  <p>La palabra "exotérmica" se forma por exo que significa "hacia afuera" y thermes, que significa "calor". Las reacciones exotérmicas pueden presentarse de forma espontánea y, en algunos casos, ser explosivas, como la combinación de metales alcalinos y agua.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-diagrama.webp','Diagrama de energía de una reacción exotérmica general.')
  ?>
  </div>

  <h4>¿Qué es una reacción endotérmica?</h4>

  <p>Una reacción química es endotérmica cuando absorbe energía del entorno. En este caso, el calor se transfiere del exterior al interior del sistema. Cuando colocamos un termómetro mientras se produce la reacción endotérmica, la temperatura disminuye.</p>

  <p>La palabra "endotérmica" deriva del griego endon que significa "dentro" y therme que significa "calor". Las reacciones endotérmicas no proceden de forma espontánea.1</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-diagrama2.webp','Diagrama de energía de una reacción endotérmica general.')
  ?>
  </div>

  <p>En las reacciones endotérmicas la energía procede del entorno fuera del sistema. La cantidad de energía potencial de los productos es mayor que la energía potencial de los reactantes. Por eso, se requiere adicionar energía a los reactantes para que la reacción proceda. Esta energía procede del calor del entorno.</p>

  <p>Por ejemplo, la fotosíntesis es un proceso endotérmico, donde las plantas captan la energía solar para producir glucosa a partir del dióxido de carbono y el oxígeno:</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-foto.webp','Diagrama de energía de una reacción endotérmica general.')
  ?>
  </div>

  <p>En el siguiente video observaras las gráficas de energía de las reacciones exotérmicas y endotérmicas</p>

  <?php
  renderVideoIframe('H5Br-BHG7zE', 'Reacciones exotérmicas y endotérmicas');
  ?>

  <?php ob_start(); ?>
  <p>Con la información anterior de la lectura de reacciones exotérmicas y endotérmicas y la consulta del video realiza la siguiente actividad</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t3a2', "Reacciones exotérmicas y endotérmicas", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

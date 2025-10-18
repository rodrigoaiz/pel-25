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
  <h2>¿Cómo hacer más rápidas las reacciones químicas?</h2>

  
  <p>hacer imagen H5P</p>

  <p class="text-center"><a href="https://pruebat.org/SaberMas/MiClase/inicia/33651/1379e80900440806062058c70abb0114/449163">Rapidez de las reacciones químicas</a></p>

  <p>A continuación, entra al simulador “Reaction rates” y observa a través de la representación gráfica cómo afecta los cambios de los factores como la concentración, la temperatura o el área de superficie de los reactivos, así como la adición de un catalizador en la reacción a través de esta simulación, mientras se compara con una reacción “control”. </p>

  <p>Para usar este sencillo simulador, sigue los siguientes pasos:</p>

   <ol class="ol-number">
    <li>Para iniciar, da clic en el botón verde “Run reaction” y observa la gráfica de la reacción normal (reacción control).</li>
    <li>Una vez que acabe la animación, da clic en el botón verde “Select variables”.</li>
    <li>A partir de aquí podrás ver un botón gris donde podrás seleccionar alguna de las variables a cambiar, pueden ser: Temperatura, concentración, área de superficie o catalizador y también, repetir el “control”.</li>
    <li>En cada variable puedes elegir entre dos opciones en el botón blanco “Decrease” (disminuir) o “Increase” (aumentar).</li>
    <li>Selecciona alguna de las variables y da click en el botón verde “Run reaction” y observa.</li>
    <li>Observa cómo cambia la velocidad de la reacción y cómo se modifican las gráficas para cada opción de simulación que elijas.</li>
    <li>Cambia una variable a la vez y observa cómo afecta a la velocidad de reacción.</li>
    <li>Compara los resultados de diferentes opciones para identificar la relación entre cada variable y la velocidad de reacción.</li>
    <li>Se recomienda que anotes tus observaciones.</li>
  </ol>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-simulador.webp','Reacción de desplazamiento simple','','https://teachchemistry.org/classroom-resources/reaction-rates-simulation',' Simulador Rapidez de reacción')
  ?>
  </div>

  <?php ob_start(); ?>
  <p>Es momento de que realices la actividad “Cuestionario factores de Rapidez de reacción”</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a2', "Cuestionario factores de Rapidez de reacción", $ActividadContent);
  ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

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
  <h2>El Proceso Haber y las dificultades en la Producción de Amoniaco</h2>

  <h3>INTRODUCCIÓN</h3>

  
  <p>El amoniaco (NH₃) es un compuesto químico fundamental para la producción de fertilizantes, lo que lo convierte en un pilar crucial para la agricultura moderna. Sin embargo, la producción industrial de amoniaco mediante el proceso Haber-Bosch presenta diversas dificultades técnicas y desafíos relacionados con la rapidez de reacción, reversibilidad, equilibrio químico, condiciones de reacción, uso de catalizadores y rendimiento. </p>

  <p>A continuación, se presenta un video y un artículo. Lee el artículo y observa a detalle el video. Te será de utilidad para realizar tu siguiente actividad.</p>

  <?php
  renderVideoIframe('o1_D4FscMnU', 'La reacción química que alimenta al mundo - Daniel D. Dulek');
  ?>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u3-fertilizantes.webp','','https://www.eleconomista.com.mx/arteseideas/Fertilizantes-energia-y-su-impacto-en-la-produccion-de-alimentos-20220328-0036.html','Fertilizantes, energía y su impacto en la producción de alimentos')
  ?>
  </div>



   <?php ob_start(); ?>
  <p>Ahora, realiza una infografía sobre el Proceso Haber, sus características, la importancia y los retos a vencer en la actualidad para la producción del Amoniaco.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a3', "Infografía del proceso Haber-Bosch y la producción de amoniaco", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

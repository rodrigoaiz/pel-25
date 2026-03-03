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


  <p>Ahora, realiza una infografía sobre el Proceso Haber, sus características, la importancia y los retos a vencer en la actualidad para la producción del Amoniaco.</p>

  <?php ob_start(); ?>
  <p>Con base al video: “La reacción química que alimenta al mundo - Daniel D. Dulek” y al artículo “Fertilizantes, energía y su impacto en la producción de alimentos” presentes en esta sección, realiza una infografía sobre el Proceso Haber-Bosch que contenga:</p>
  <ul>
    <li>Título de la infografía</li>
    <li>Las características del proceso y la reacción</li>
    <li>Las dificultades del proceso y reacción</li>
    <li>La importancia del proceso</li>
    <li>Los retos para vencer en la actualidad para la producción del Amoniaco.</li>
  </ul>
  <p>Puedes investigar en otras fuentes y referencias bibliográficas. No olvides incluir:</p>
  <ul>
    <li>Datos recientes con base en fuentes verídicas y confiables.</li>
    <li>Emplear imágenes ilustrativas sobre el tema.</li>
    <li>Indicar referencias en formato APA.</li>
  </ul>
  <p>El documento debe contener:</p>
  <ul>
    <li>Datos personales.</li>
    <li>Ideas principales, claras y breves.</li>
    <li>Sin faltas de ortografía.</li>
    <li>El documento debe ser enviado en PDF.</li>
    <li>Guarda tu documento con Apellidos_Nombre.</li>
  </ul>
  <p>Por último, revisa el criterio de <a href="<?php echo PATH_DOCS . 'u3-t2-p4-rubrica.docx'; ?>" target="_blank">evaluación de esta actividad</a> en el siguiente enlace:</p>

  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3a4', "Infografía del proceso Haber-Bosch y la producción de amoniaco", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

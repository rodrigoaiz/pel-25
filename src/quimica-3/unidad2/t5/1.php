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
  <h2>Enlace metálico.</h2>
  <h3>Relación Estructura-propiedades-usos</h3>
  
  <p>Como has estudiado en el curso, los minerales son las materias primas para la obtención de los metales.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-aluminio.webp','aluminio en la naturaleza','https://pixabay.com/es/photos/latas-textura-aluminio-2542942/','Pixabay')
  ?>
  </div>

  <h4>¿Sabes por qué son importantes los metales?</h4>

  <p>Porque a tu alrededor hay materiales que se están constituidos por metales, los cuales han sido empleados a lo largo de la historia de la humanidad, para la fabricación de utensilios, joyas y máquinas empleadas en las industrias. </p>

  <p>Actualmente los puedes encontrar en aleaciones como monedas, llaves, sartenes, etc. Además de ser empleados en la fabricación de ventanas, muebles, celulares, computadoras, pantallas, baterías, entre otros. Los metales son importantes también porque están presentes en proteínas que se encuentran en el cuerpo y cumplen una función biológica, un ejemplo la hemoglobina, la cual contiene un centro metálico de hierro y su función es transportar el oxígeno a la sangre.</p>

  <p>A continuación, revisa el siguiente video, donde observarás otras aplicaciones de los metales en la medicina.</p>

  <?php
  renderVideoIframe('AXK-Bm7d1Qs', 'Aplicaciones de los metales. Entrevista a Gustavo Espino');
  ?>

  <p>Como has observado, los metales son importantes en distintos campos, las aplicaciones de estos se deben a la estructura química que presentan. Los metales están formados por átomos, los cuales tienen un empaquetamiento compacto y forman redes metálicas. Las estructuras más comunes son: </p>

  <ol class="ol-number">
    <li>Empaquetamiento cúbico centrado en el cuerpo (bcc) ó centrado en las caras (fcc).</li>
    <li>Empaquetamiento cerrado hexagonal (hcp).</li>
  </ol>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-empaque.webp','Empaquetamiento compacto de los metales. Representa el acomodo de los átomo en un metal, generalmente los metales tienen estos empaquetamientos más comunes.')
  ?>
  </div>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

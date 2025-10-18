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
  <h3>Propiedades físicas de los metales.</h3>
  
  <p>Las características físicas de los metales son:</p>

  <ul class="ul-disc">
    <li>Son sólidos, excepto, el mercurio.</li>
    <li>Generalmente presentan color gris, excepto el oro que es amarillo y el cobre de color rojizo.</li>
    <li>Son maleables (forman lámina) y dúctiles (forman alambres).</li>
    <li>Son buenos conductores de electricidad, calor y sonido.</li>
    <li>Presentan brillo.</li>
    <li>Son duros.</li>
    <li>Tienen altos puntos de ebullición y de fusión.</li>
    <li>Son densos.</li>
    <li>Son insolubles en agua.</li>
  </ul>

  <p>Otra característica importante de los metales es que pueden formar aleaciones (mezclas de dos o más metales). Entre las aleaciones conocidas están el acero (Fe y C), latón (Cu y Zn), bronce (Cu y Sn),plata sterling (Ag y Cu), acero inoxidable (Fe, Cr, Ni y C) y oro de 14 kilates (Au y Cu).</p>


  <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-joyeria.webp','La plata sterling es una aleación de plata con otros metales como cobre.','https://pixabay.com/es/photos/joyas-joyer%C3%ADa-plata-precioso-2255623/','Pixabay')
  ?>
  </div>

  <p>Para complementar las características de los metales, revisa la siguiente página:</p>

   <div class="mx-auto max-w-md">
    <?php
      renderImage('q3-u2-bunam.webp','','https://alianza.bunam.unam.mx/cch/los-metales-y-los-no-metales/','Los metales y los no metales')
  ?>
  </div>

  <?php ob_start(); ?>
  <p>En la actividad Características y usos de los metales confirmarás lo aprendido.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t5a1', "Características y usos de los metales.", $ActividadContent);
  ?>


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

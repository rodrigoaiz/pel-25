<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h3>Tipos de computadoras y sus características</h3>
  <p class="font-bold">Presentación</p>
  <p>Es un gusto iniciar contigo esta nueva lección de aprendizaje “Identifica las características de los distintos tipos de computadoras”, en ella identificarás las características de los diversos tipos de computadoras por su tamaño y tecnología, para lograr el aprendizaje realizarás diferentes actividades interactivas.</p>
  <div class="max-w-xl mx-auto">
    <?php renderImage('u2_t1_estacion_trabajo.webp', 'Estación de trabajo. Imagen creada con generador de imágenes Bing con tecnología de DALL·E Ubicación.') ?>
  </div>
  <p>Espero que las actividades que realices sean agradables y logres el aprendizaje de esta lección. Para ello a continuación te presento la temática que utilizaremos para llevar a cabo tu aprendizaje.</p>
  <div class="my-5 mx-40 border border-primary px-5 py-2">
    <h4 class="my-0">Temática</h4>
    <p><strong>Tipos de computadoras y sus características:</strong></p>
    <ul class="ul-disc">
      <li>Microcomputadoras: </li>
      <ul class="circle">
        <li>escritorio, </li>
        <li>laptop, </li>
        <li>handheld, </li>
        <li>tablet, </li>
        <li>teléfonos inteligentes.</li>
      </ul>
      <li>Estaciones de trabajo.</li>
      <li>Supercomputadoras (Mainframe).</li>
    </ul>
  </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

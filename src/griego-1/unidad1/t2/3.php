<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Aplicación de signos ortográficos, espíritus, acentos y puntuación</h2>
  <?php ob_start(); ?>
  <p>Te invito a realizar esta actividad de lectura interactiva de las palabras minúsculas con este mapa en nombres griegos. Lee y revisa cuantas veces necesites el mapa para resolver este ejercicio de pronunciación o lectura de palabras de la Antigua Grecia. “Normas de lectoescritura, espíritus y acentos”. </p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividadH5P('u1a2', "Normas de lectoescritura, espíritus y acentos", $ActividadContent);
  ?>

 

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

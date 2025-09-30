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
  <h2>Práctica Experimental: Rapidez de reacción</h2>

  
  <p>A continuación, se presenta un video en el que se muestra una actividad experimental sobre la rapidez de reacción, modificando varios factores: temperatura, grado de división (área de superficie) de los reactivos, concentración de los reactivos y presencia de un catalizador en la reacción.</p>

   <?php ob_start(); ?>
  <p>Es momento de que realices la actividad “Factores de la rapidez de reacción”</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a3', "Factores de la rapidez de reacción", $ActividadContent);
  ?>

  <p>¡Vamos a experimentar!</p>

  <p>El siguiente documento te guiará en un emocionante experimento en casa sobre los factores que influyen en la rapidez de una reacción química. Utiliza materiales comunes y sigue cada paso cuidadosamente. Observa atentamente lo que sucede y toma nota de todos los detalles. </p>

<a href="<?php echo PATH_DOCS . 'u3_t2_rapidez.pdf'; ?>" target="_blank">Práctica experimental: Rapidez de reacción</a>

<p>Una vez finalizado el experimento, deberás elaborar una UVE de Gowin para organizar y analizar tus resultados. Realiza la actividad Uve De Gowin: Rapidez de reacción. </p>

<?php ob_start(); ?>
  <p>Realiza la actividad Uve De Gowin: Rapidez de reacción.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u3t2a3', "Uve De Gowin: Rapidez de reacción.", $ActividadContent);
  ?>

 

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

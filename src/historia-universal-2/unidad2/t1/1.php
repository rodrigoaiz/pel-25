<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>¡Buenas tardes jóvenes! Queremos darles la bienvenida a la segunda unidad de tú curso de Historia Universal Moderna y Contemporánea 2.</h2>     
 <p>En el siguiente video queremos que aprendas de los contenidos de la Unidad 2; de la materia de Historia Universal Moderna y Contemporánea II. Por lo que conocerás los objetivos,
 aprendizajes y temas correspondientes encontrados en el programa institucional de Historia Universal Moderna y Contemporánea II; al finalizar encontrarás algunas actividades relacionadas con la materia de Historia, para fortalecer tus habilidades y conocimientos.</>
 <?php 
  renderVideoIframe('QA1ueGOF0-M', 'Bienvenida a la Unidad II.');
  ?>
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t1a1', "Cuestionario diagnóstico Unidad 2", $ActividadContent);
  ?>
  
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

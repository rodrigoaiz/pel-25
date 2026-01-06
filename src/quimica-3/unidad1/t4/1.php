<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'ImagenPie.php';
ob_start();
?>
<section>

 <p>Estás por concluir el estudio de la primera unidad. Felicidades por tu dedicación y esfuerzo al concluir esta unidad de estudio.</p>

 <p>Ha sido un recorrido de aprendizaje significativo en Química III, donde has adquirido conocimientos esenciales que serán fundamentales para tu desarrollo académico. </p>

 <p>Ahora, nos dirigimos hacia la evaluación final, que estará vinculada a los tres aprendizajes clave de tu programa: la comprensión de los conceptos fundamentales de la química, la aplicación de estos conceptos en contextos prácticos y la capacidad para analizar y resolver problemas relacionados con procesos químicos.</p>

 <p>¡Te deseamos mucho éxito en esta evaluación y esperamos que demuestres todo lo que has aprendido!</p>
  
  <?php ob_start(); ?>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t4a1', "Evaluación final de la Unidad 1", $ActividadContent);
  ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

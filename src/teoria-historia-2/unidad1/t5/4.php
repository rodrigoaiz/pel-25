<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Accordion.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<h2> Unidad 1. Interpretaciones de la historia en el siglo XIX </h2>

<h3> Evaluación Final </h3>

<p>Para finalizar esta unidad, te pedimos que realices un ejercicio de autoevaluación para que compruebes cuáles son los conocimientos que adquiriste a lo largo de esta unidad.</p>

<?php ob_start(); ?>
<?php
  $ActividadContent = ob_get_clean();
  renderActividad('u1t5a3', "Cuestionario de autoevaluación final Unidad 1", $ActividadContent);
?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
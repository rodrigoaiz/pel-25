<?php
include '../../../config.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'TemplatePages.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Autoevaluación de la Unidad 4</h2>

    <?php ob_start(); ?>
    <p>Ahora te invitamos a que contestes el siguiente cuestionario, para que puedas constatar todo lo que has aprendido.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a19', "Cuestionario final unidad 4", $ActividadContent);
    ?>

    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

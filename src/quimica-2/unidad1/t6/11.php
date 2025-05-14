<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Cuestionario final de la Unidad 1</h3>
    <?php ob_start(); ?>
    <p>Realiza el cuestionario final de la Unidad 1 para que evalúes tus conocimientos.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a22', "Cuestionario final de la unidad 1", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
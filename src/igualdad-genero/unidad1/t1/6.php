<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Evaluación sumativa del Aprendizaje 1</h2>
    <p>Vamos a comprombar que tienes conocimientos esenciales que te ayudarán en esta asignatura.</p>
    <?php ob_start(); ?>
    <p>1. Relaciona las columnas colocando el número que corresponde a cada oración.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a3', "Evaluación sumativa del Aprendizaje 1", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
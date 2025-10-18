<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Questionnaire final pour l'unité 1</h2>
    <h3>Examen final de la unidad 1</h3>

    <?php ob_start(); ?>
    <p>Responde el cuestionario, selecciona la respuesta correcta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a3', "Français I Unité 1", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

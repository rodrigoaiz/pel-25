<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Evaluación diagnóstica de aprendizaje 1</h2>
    <p>Antes de comenzar a revisar los contenidos, te invitamos a contestar este cuestionario diagnóstico. </p>
    <?php ob_start(); ?>
    <p>Elige la opción que consideres responde mejor a cada pregunta u oración.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a2', "Evaluación diagnóstica de aprendizaje 1", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
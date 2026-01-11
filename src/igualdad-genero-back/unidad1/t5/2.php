<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Diagnóstico</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Detectar tus conocimientos previos para introducirte al aprendizaje de la cultura de la igualdad.</p>
    <?php ob_start(); ?>
    <p>Contesta las siguientes preguntas eligiendo la respuesta que consideres correcta. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t5a1', "Diagnóstico aprendizaje 5", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
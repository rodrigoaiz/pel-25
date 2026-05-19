<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Final</h2>
    <p class=" font-bold  text-center text-2xl text-fuchsia-900"><strong>¡Felicidades! Has concluido con los contenidos de la asignatura.</strong></p>
    <p><strong>Instrucciones:</strong></p>
    <p>Realiza tu examen final cuando sea la fecha indicada por tu asesor o asesora.</p>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a7', "Examen final", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
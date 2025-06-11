<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>¿Cómo surge un nuevo medicamento?</h3>
    <p>El desarrollo de nuevos medicamentos es un proceso largo que requiere de muchas etapas. Como vimos anteriormente, el primer paso es descubrir una nueva molécula, ya sea natural o por síntesis y semisíntesis química. Sin embargo, este es solo el principio de un largo viaje hasta que la molécula seleccionada pueda llegar a las farmacias.</strong>
    </p>
    <?php ob_start(); ?>
    <p>Con la finalidad de que entiendas las múltiples fases que se requieren para que un nuevo medicamento llegue al mercado, deberás realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a24', "Línea del tiempo medicamentos", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
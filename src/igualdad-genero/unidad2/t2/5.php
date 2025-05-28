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
    <h2>Autoevaluación de los mitos del amor romántico</h2>
    <div class="grid grid-cols-3 gap-4">
        <div><?php
                renderImage('iga8-img02.webp');
                ?></div>
        <div class="col-span-2">
            <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
            <p>En esta actividad de retroalimentación podrás comprobar lo que has aprendido hasta ahora acerca de los mitos del amor romántico.</p>
            <p><strong>Instrucciones:</strong></p>
            <p>Contesta las siguientes preguntas de opción múltiple.</p>
        </div>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t2a4', "Los mitos del amor romántico", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Violencia directa, estructural y cultural</h2>
    <div class="grid grid-cols-2 gap-4 content-center">
        <div class="...">
            <?php
            renderImage('u2t1p04_violencia.webp');
            ?>
        </div>
        <div class="mt-14">
            <p>En este tema veremos lo que es la violencia directa, estructural y cultural. <strong>La violencia directa</strong> es la forma más evidente de violencia y es caracterizada por agresiones fisicas o psicologicas que causan daño inmediato en la o el individuo; <strong>la violencia estructural</strong> es un tipo de violencia que no es directa y es derivado de diferencias sociales, de género, edad, etc, el racismo es un ejemplo; <strong>la violencia cultural</strong> es cuando los demás utilizan aspectos como lo son a religión y la ideología, el lenguaje y el arte, la ciencia empírica y la ciencia formal. </p>
        </div>
    </div>
    <p class="mt-10">Para terminar con este tema realiza la siguiente actividad.</p>
    <?php ob_start(); ?>
    <p>Selecciona el tipo de violencia o tipo de paz de acuerdo a cada situación e imagen. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t2a3', "Formación de imágenes en espejos parabólicos", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
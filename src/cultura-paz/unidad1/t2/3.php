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
    <h2>Gestión de las emociones</h2>
    <div class="grid grid-cols-2 gap-4 content-center">
        <div class="...">
            <?php
            renderImage('u1t2p06-emociones.webp');
            ?>
        </div>
        <div class="...">
            <p class="mt-16">Las emociones son <strong>reacciones biológicas</strong> que nos ayudan a responder ante distintas situaciones y favorecen la supervivencia. Cada emoción tiene una función específica. Sin embargo, cuando se desbordan pueden perjudicarnos, por lo que es <strong>importante aprender a reconocerlas y controlarlas.</strong></p>
        </div>
    </div>
    <p class="mt-2"> El <strong>autocontrol</strong> nos permite <strong>gestionar nuestras emociones</strong> sin que dominen nuestro comportamiento. Con la información que te proporcionamos realiza la siguiente actividad:</p>
    <?php ob_start(); ?>
    <p>Responde el crucigrama.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a2', "Crucigrama de las emociones.", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
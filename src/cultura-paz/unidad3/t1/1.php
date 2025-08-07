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
    <h2>Bienvenida a la unidad 3</h2>
    <div class="grid grid-cols-3 gap-4 content-center">
        <div class="col-span-2 mt-6">
            <p class="font-bold text-xl text-orange-500">¡Bienvenidos y bienvenidas a este módulo dedicado a la resolución pacífica de conflictos!</p>
            <p>Antes de comenzar con el tema debemos saber que es un <strong>conflicto</strong> es una situación en la cual dos o más personas, grupos o entidades tienen intereses, opiniones o necesidades que se contradicen y no pueden desarrollarse al mismo tiempo.</p>
            <p>Antes de continuar con la revisión de los siguientes temas, responde la siguiente encuesta. Recuerda que no hay una respuesta correcta o incorrecta, por favor responde sinceramente.</p>
        </div>
        <div class="mt-16">
            <?php
            renderImage('u3t1p01-conflictos.webp');
            ?>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>Responde la pregunta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t1a1', "Encuesta: ¿Cómo reacciono ante un conflicto?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
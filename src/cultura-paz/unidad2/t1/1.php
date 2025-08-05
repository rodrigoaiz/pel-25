<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenida a la unidad 2</h2>
    <div class="grid grid-cols-3 gap-4 content-center">
        <div class="col-span-2">
            <p class="font-bold text-xl text-orange-500">¡Bienvenidas y bienvenidos a esta nueva unidad del curso!</p>
            <p>En esta etapa hablaremos sobre qué es la <strong>cultura de paz</strong> y aprenderemos algunos de sus conceptos clave, que nos ayudarán a entender cómo se expresa la paz y la violencia en diferentes contextos, así como la importancia de asumir una actitud comprometida tanto en lo <strong>personal</strong> como en lo <strong>social.</strong></p>
        </div>

        <div class="...">
            <?php
            renderImage('u2t1p01-cuturapaz.webp');
            ?>
        </div>
    </div>
    <div class="max-w-xl mx-left">
        <?php
        renderVideoIframe('1wGvkCdfrkg', 'La Cultura de Paz y Transformación de Conflictos');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Ahora te pedimos que participes en el siguiente foro de discusión.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a1', "Foro: ¿Qué entendemos por la paz?", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Para terminar esta fase, contesta la siguiente encuesta. Te recordamos que no hay respuestas correctas o incorrectas, solo se honesto y honesta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a2', "Encuesta: ¿Qué entendemos por la paz?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
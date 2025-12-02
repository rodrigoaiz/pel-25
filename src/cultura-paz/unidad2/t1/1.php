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
    <div class="grid grid-cols-4 md:gap-10 items-center">
        <div class="col-span-4 md:col-span-1 order-1 md:order-0">
            <?php
            renderImage('u2t1p01-cuturapaz.webp');
            ?>
        </div>
        <div class="col-span-4 md:col-span-3">
            <p class="font-bold text-xl text-orange-500">¡Bienvenidas y bienvenidos a esta nueva unidad del curso!</p>
            <p>En esta etapa hablaremos sobre qué es la <strong>cultura de paz</strong> y aprenderemos algunos de sus conceptos clave, que nos ayudarán a entender cómo se expresa la paz y la violencia en diferentes contextos, así como la importancia de asumir una actitud comprometida tanto en lo <strong>personal</strong> como en lo <strong>social.</strong></p>
        </div>
    </div>
    <div class="max-w-xl mx-auto mt-10">
        <?php
        renderVideoIframe('1wGvkCdfrkg', 'La Cultura de Paz y Transformación de Conflictos');
        ?>
    </div>
    <p>Después de haber visto el video sobre qué es la paz, te pedimos que participes en el siguiente foro de discusión.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Te pedimos que generes una imagen propia de lo que para ti representa la paz.</li>
        <li>Súbela al foro y explica brevemente tu imagen.</li>
        <li>Revisa al menos dos imágenes de tus compañeros y dales una opinión.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a1', "Foro: ¿Qué entendemos por la paz?", $ActividadContent);
    ?>
    <p>Para terminar esta fase, contesta la siguiente encuesta. Te recordamos que no hay respuestas correctas o incorrectas, solo se honesto y honesta.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-4-encuesta-que-entendemos-por-paz.docx'; ?>" target="_blank">act-4-encuesta-que-entendemos-por-paz</a>.</li>
        <li>Responde las preguntas de la tabla.</li>
        <li>Guarda tu archivo y súbelo.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu trabajo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a2', "Encuesta: ¿Qué entendemos por la paz?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

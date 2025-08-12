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
    <h2>Bienvenida a la unidad 5</h2>
    <div class="grid grid-cols-2 gap-4 content-center mt-4">
        <div class="mt-6">
            <p>Te damos la más cordial bienvenida a esta última unidad. A lo largo de esta hablaremos sobre el Modelo Educativo del Colegio y normatividad universitaria, esto con la finalidad de que como estudiante Universitario promuevas principios como el respeto, la equidad, la inclusión y la resolución pacífica de conflictos; valores que son esenciales para fortalecer una convivencia armónica dentro y fuera del Colegio.</p>
        </div>
        <div>
            <?php
            renderImage('u5t1p01_modelo-educativo.webp');
            ?>
        </div>
    </div>
    <p class="mt-10">Antes de iniciar con esta unidad, te pedimos que ingreses al foro de discusión <strong>"¿Qué tanto conozco del Modelo Educativo?"</strong></p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-16">
        <li>Ingresa al foro y comparte tu respuesta a la siguiente pregunta: <strong>¿Para ti qué significa aprender a ser?</strong></li>
        <li>Además de participar revisa las respuestas de tus compañeros.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Participa aquí en el foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u5t1a1', "Lo que conozco sobre el Modelo Educativo", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
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
    <h2>Orígenes del feminismo</h2>
    <p>Te invitamos a revisar el siguiente video, en él harás un recorrido histórico desentrañando las diversas etapas y antecedentes que han moldeado este movimiento crucial. Así también explorarás cómo es que las ideas y acciones de mujeres visionarias han desafiado las normas establecidas, luchando incansablemente por la igualdad y la justicia. Descubrirás como el feminismo ha evolucionado, adaptándose a los desafíos de la época y como ha dejado una huella imborrable en la sociedad actual.</p>
    <p>Mientras ves el video identifica la siguiente información:</p>
    <ul class="ul-disc ml-20">
        <li>¿Cuándo surge el feminismo?</li>
        <li>¿Cómo se ha dividido la historia del feminismo?</li>
        <li>¿Cuáles han sido las demandas históricas del feminismo?</li>
        <li>¿Quiénes han sido las representantes del feminismo?</li>
        <li>¿Qué tipos de feminismo existen?</li>
    </ul>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('C60iyBIXxQs', 'Historia del feminismo en 10 minutos');
        ?>
    </div>
    <?php ob_start(); ?>
        <p>Al finalizar el video contesta las preguntas que se presentan:</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u1a5', "Orígenes del feminismo", $ActividadContent);
        ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
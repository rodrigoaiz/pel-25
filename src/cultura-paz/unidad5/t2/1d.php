<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Desafíos y compromisos: ¿qué estoy dispuesto a hacer?</h2>
    <p>El Colegio de Ciencias y Humanidades es mucho más que un lugar para aprender materias académicas; también es un espacio donde se construyen valores, actitudes y relaciones que pueden fortalecer una cultura de paz. La paz se refleja en el respeto, la inclusión, el diálogo y la solución pacífica de los conflictos. Fomentar una cultura de paz en la UNAM es responsabilidad de todos. Por eso, es importante preguntarme: <span class="text-fuchsia-800 font-bold">¿qué estoy dispuesto(a) a hacer para tener una cultura de paz?</span> ya que reconocer mi papel en este proceso es el primer paso para generar un ambiente más armonioso, justo y respetuoso para todos y todas.</p>

    <?php
    renderImagePleca('u5t2p01_compromisos.webp');
    ?>
    <p class="mt-10">Ahora, te pedimos que ingreses al foro de discusión <strong>"Compromisos ceceacheros de la Cultura de Paz"</strong></p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-16">
        <li>Te pedimos que ingreses al foro de discusión y compartas tu respuesta a lo siguiente: <strong>Qué estoy dispuesto(a) a hacer para tener una cultura de paz?</strong></li>
        <li>Además de participar revisa y comenta al menos dos respuestas de tus compañeros.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Participa aquí en el foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u5t2a2', "COMPROMISOS CECEACHEROS DE LA CULTURA POR LA PAZ", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad diagnóstica: reflexionando sobre el amor</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Iniciaremos la discusión del tema del amor romántico para que te familiarices con los conceptos básicos: tipos de noviazgo, enamoramiento, amor, amor romántico e iniciaremos con la identificación del problema.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Observa el video con atención e identifica los elementos de esta relación.</li>
        <li>Posteriormente escribe en una cuartilla en dos tablas, con qué actitudes estás de acuerdo y con cuáles no. Además, en ese mismo documento compartirás tu opinión sobre el tema (media cuartilla).</li>
        <li>Después de que escribas tu opinión envía tu archivo. Nómbralo de la siguiente manera: Nombre_Apellido_ReflexiónAmor</li>
    </ol>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('UHs9wmy4H5Q', 'No confundir amor con abuso');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t8a1', "Diagnóstico aprendizaje 8", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

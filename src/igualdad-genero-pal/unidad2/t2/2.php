<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad diagnóstica: reflexionando sobre el amor</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Iniciaremos la discusión del tema del amor romántico para que te familiarices con los conceptos básicos: tipos de noviazgo, enamoramiento, amor, amor romántico e iniciaremos con la identificación del problema.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Observa el video con atención e identifica los elementos de esta relación.</li>
        <li>Posteriormente escribe en una cuartilla en dos tablas, con qué actitudes estás de acuerdo y con cuáles no, justificando porqué.</li>
        <li>Después relaciona el siguiente diagrama que se llama “violencia contra las mujeres, tipos y modalidades” y contrástalos con las acciones que se presentan en el video. Elabora con ello una conclusión breve.</li>
        <li>Al terminar de escribir tu texto envía el archivo. Nómbralo de la siguiente manera: Nombre_Apellido_ReflexionAmor</li>
    </ol>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('UHs9wmy4H5Q', 'No confundir amor con abuso');
        ?>
    </div>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('iga8-img03.webp');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a1', "Diagnóstico aprendizaje 8", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
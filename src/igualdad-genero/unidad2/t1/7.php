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
    <h2>La violencia de género es un tema de salud pública</h2>
    <div class="grid grid-cols-3 gap-4">
        <div><?php
                renderImage('iga7-img04.webp');
                ?></div>
        <div class="col-span-2">
            <p>Un aspecto relevante respecto a la violencia de género, es que, en todas sus formas, desde el maltrato psicológico hasta la agresión física tiene consecuencias profundas en la salud mental y física de las personas que la sufren. Es debido a esto, que tanto las autoridades como los expertos la consideran un tema de salud pública, algo que nos afecta a todos como sociedad y que requiere de nuestra atención y acción.</p>
            <p>En los videos que verás a continuación, explorarás con mayor detalle qué significa esto y cómo es que impacta la vida de muchas personas.</p>
        </div>
    </div>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reconocer la violencia de género como un problema de salud pública y su impacto en el bienestar de las personas.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Observa con atención los siguientes videos y toma notas en tu cuaderno de los principales conceptos.</li>
        <li>Después realiza la actividad de memorama , que se encuentra debajo de los videos, para ello tendrás que voltear dos cartas y relacionar correctamente las preguntas y respuestas.</li>
        <li>Una vez que concluyas, continúa con la siguiente actividad.</li>
    </ol>
</section>
<div class="grid grid-cols-6 gap-4">
    <div class="col-span-2 col-start-2"><?php
                                        renderVideoIframe('j0-iWpNAT0M', 'Violencia de género un problema de salud publica y social');
                                        ?></div>
    <div class="col-span-2">
        <?php
        renderVideoIframe('NAlY-1KI6ts', 'OMS: Fortalecer la función del sistema de salud para abordar la violencia contra las mujeres');
        ?> </div>
</div>
<section>
    <?php ob_start(); ?>
    <p>¡Mucho éxito!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a6', "La violencia de género es un tema de salud pública", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

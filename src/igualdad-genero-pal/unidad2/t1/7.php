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
    <h2>Actividad: Legislación para proteger los Derechos Humanos y erradicar la violencia de género</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar en casos reales los derechos violados, a fin de visibilizar las afectaciones de las víctimas, exigir justicia y contribuir a la construcción de una sociedad más igualitaria.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Observa con atención cada uno de estos cinco videos y después responde las preguntas.</li>
    </ol>
</section>
    <div class="grid grid-cols-6 gap-4 mb-10">
        <div class="col-span-2 col-start-2">
            <?php
            renderVideoIframe('UBTcfssHup4', '
El Caso Campo Algodonero vs. México - DE1M # 47');
            ?></div>
        <div class="col-span-2">
            <?php
            renderVideoIframe('WD8D5KHVgkY', 'EL CASO ROSENDO CANTÚ vs. MÉXICO en un minuto - DE1M # 69');
            ?> </div>
    </div>
    <div class="grid grid-cols-6 gap-4 mb-10">
        <div class="col-span-2 col-start-2">
            <?php
            renderVideoIframe('1oiO9gndB1s', 'El Caso Mujeres víctimas de Tortura Sexual en Atenco Vs. México - DE1M # 95');
            ?></div>
        <div class="col-span-2">
            <?php
            renderVideoIframe('DxIBlW917f4', 'El Caso Digna Ochoa Vs. México - DE1M # 119');
            ?> </div>
    </div>
    <div class="grid grid-cols-6 gap-4 mb-10">
        <div class="col-span-2 col-start-3">
            <?php
            renderVideoIframe('-qUTzJ6tlBo', 'El Caso LEONARDO FORNERÓN e HIJA vs. ARGENTINA en un minuto - DE1M # 88');
            ?></div>
    </div>
    <section>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a3', "Legislación para proteger los Derechos Humanos y erradicar la violencia de género", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
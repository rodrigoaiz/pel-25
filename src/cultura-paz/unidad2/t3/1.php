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
    <h2>Cultura de la paz en lo personal, relacional y social</h2>
    <p>En este tema veremos lo que es la <strong>cultura de la paz</strong> en el ámbito <strong>personal, relacional</strong> y <strong>social</strong>. Se hará énfasis en cada uno de estos para que el alumnado logre comprender, entender y llevar a cabo lo que aquí se menciona.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u2t3p01_cultura-paz-niveles.webp');
        ?>
    </div>
    <p>La cultura de la paz, se manifiesta en la intrincada red de nuestras vidas a múltiples niveles.</p>
    <ul class="ul-disc mt-6">
        <li><span class="text-emerald-600 font-bold">En lo personal</span>, implica una transformación interna, un compromiso consciente con la autoconciencia y la gestión de nuestras propias emociones.</li>
        <li><span class="text-emerald-600 font-bold">A nivel relacional</span>, la cultura de la paz se traduce en la habilidad para construir vínculos saludables y respetuosos a través de una comunicación efectiva y asertiva.</li>
        <li><span class="text-emerald-600 font-bold">En el ámbito social</span>, la cultura de la paz se expande para abarcar la promoción de estructuras justas e inclusivas. Esto significa fomentar la equidad y el respeto a los derechos humanos.</li>
    </ul>
    <p>A continuación, para cerrar esta unidad, realiza la siguiente actividad.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-6-cuadro-respuestas-como-puedo-contribuir.docx'; ?>" target="_blank">act-6-cuadro-respuestas-como-puedo-contribuir</a>.</li>
        <li>Responde las preguntas de la tabla.</li>
        <li>Guarda tu archivo y súbelo.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu trabajo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t3a4', "¿Cómo puedo contribuir a la construcción de la cultura de paz?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
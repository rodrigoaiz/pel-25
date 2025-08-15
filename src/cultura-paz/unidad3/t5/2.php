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
    <h2>Reflexiones finales</h2>
    <p>La resolución pacífica de conflictos no solo se trata de encontrar soluciones, sino de fomentar una cultura de diálogo, respeto y entendimiento. Cada desacuerdo ofrece la <strong>oportunidad</strong> de aprender y fortalecer nuestras relaciones, siempre y cuando se maneje con empatía y apertura. Al resolver un conflicto de manera pacífica, no solo resolvemos problemas, sino que construimos una sociedad más respetuosa y colaborativa. Aplicar estos principios es un paso hacia una convivencia más armónica y justa para todos.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u3t3p02_decisiones.webp');
        ?>
    </div>
    <p>A continuación, presentaremos distintos casos que deberás analizar y resolver con los principios que has aprendido en esta unidad.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-9-eligir-con-conciencia.docx'; ?>" target="_blank">act-9-eligir-con-conciencia</a>.</li>
        <li>Reflexiona respecto a lo planteado y responde las preguntas.</li>
        <li>Guarda tu archivo y súbelo.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t3a3', "¿Cómo tomar decisiones éticas?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

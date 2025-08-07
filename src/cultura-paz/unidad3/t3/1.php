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
    <h2>Pensamiento crítico y toma de decisiones éticas</h2>
    <p>Uno de los aportes más relevantes del enfoque de cultura de paz es la <strong>resolución de conflictos</strong> de manera pacífica. En este sentido, el pensamiento crítico y la toma de decisiones éticas se reconocen como herramientas fundamentales para una convivencia pacífica. <strong>El pensamiento crítico</strong> permite analizar los conflictos más allá de las apariencias, cuestionar supuestos, identificar causas profundas y valorar las distintas perspectivas. Esta habilidad fomenta la autonomía moral y la responsabilidad ciudadana.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u3t3p01_pensamiento-critico.webp');
        ?>
    </div>
    <p>Resolveremos la actividad basándonos en los conceptos vistos en la lectura y los videos anteriores.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-8-analisis-de-casos.docx'; ?>" target="_blank">act-8-analisis-de-casos</a>.</li>
        <li>Realiza el análisis de los casos y responde las preguntas.</li>
        <li>Guarda tu archivo y súbelo.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t3a2', "Análisis de casos - ¿De qué forma puedo gestionar adecuadamente un conflicto?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
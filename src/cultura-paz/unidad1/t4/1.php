<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Límites y consentimiento en la convivencia</h2>
    <p>En la <strong>convivencia</strong>, ya sea en el hogar, en la escuela o en círculos sociales, <strong>comunicar de manera efectiva límites claros,</strong> así como entender el concepto de <strong>consentimiento</strong> son fundamentales para crear un ambiente de <strong>respeto y armonía</strong>. Estos elementos no solo promueven relaciones saludables, sino que también <strong>son esenciales para prevenir conflictos y malentendidos.</strong> Revisa el siguiente video que te explica los tipos de límites y como ponerlos:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('5k4WmFb0al4', 'Como poner (y no poner) límites');
        ?>
    </div>
    <p class="mt-2">Para concluir con esta unidad pon en práctica lo aprendido realizando la siguiente actividad:</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Descarga el formato: <a href="<?php echo PATH_DOCS . 'act-2-cuadro-trabajo-situaciones-comparativas.docx'; ?>" target="_blank">act-2-cuadro-trabajo-situaciones-comparativas</a>.</li>
        <li>Responde las preguntas de la tabla.</li>
        <li>Guarda tu archivo y súbelo.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu trabajo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a2', "Cuadro de trabajo: Emociones, límites y consentimiento en la convivencia.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
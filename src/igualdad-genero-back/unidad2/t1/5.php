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
    <h2>Modalidades de la violencia de género</h2>
    <p>Recuerda que existen diversos tipos de violencia de género, ahora es importante que conozcas las distintas modalidades de ésta, las cuales se producen dependiendo del contexto. Realiza lo que se te pide a continuación.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reconocer las modalidades de violencia en diferentes situaciones y entornos de la vida diaria.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Para que te quede clara la diferencia entre las diferentes modalidades de violencia de género, observa con atención el siguiente video y toma notas en tu cuaderno. Recuerda que puedes poner pausa para revisar con tranquilidad todo el contenido.</li>
        <li>Después, responde el crucigrama con base en lo aprendido en el video.</li>
    </ol>

    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('FFIv1Ida2eE', 'Formas de violencia de género');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a4', "Crucigrama - Modalidades de la violencia de género", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

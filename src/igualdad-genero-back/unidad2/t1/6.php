<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad: Modalidades de la violencia de género</h2>
    <div class="w-xl mx-auto mt-10">
        <?php
        renderImage('iga7-img03.webp');
        ?>
    </div>
    <p>Ahora que tienes más claridad sobre las diferentes modalidades de violencia de género, te proponemos realizar la siguiente actividad. </p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar las modalidades de la violencia de género para prevenirla, combatirla y erradicarla.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Ingresa al cuestionario.</li>
        <li>Observa los videos y con base en su contenido, responde las preguntas.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Contesta las siguientes preguntas eligiendo la respuesta que consideres correcta. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a5', "Modalidades de la violencia de género ", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

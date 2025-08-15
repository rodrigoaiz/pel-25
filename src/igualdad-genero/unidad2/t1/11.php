<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>¿Cómo puedes contribuir para erradicar la violencia de género en tu entorno?</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Elaborar tres compromisos personales que promuevan la igualdad, el respeto a los derechos humanos y la erradicación de la violencia de género.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Escribe en el foro tres acciones personales con las que te comprometes para fomentar la igualdad, el respeto a los derechos humanos y la erradicación de la violencia de género, por ejemplo, no reproducir chistes misóginos.</li>
        <li>Lee las diferentes participaciones, elige una y coméntala. Recuerda que tu respuesta debe ser tolerante, respetuosa y empática.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a10', "Foro final de aprendizaje", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

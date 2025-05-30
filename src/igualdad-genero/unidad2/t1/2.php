<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Diagnóstico</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar los conocimientos previos en relación con la violencia de género, sus tipos y modalidades.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Ingresa al cuestionario y contesta cada una de las preguntas que aparecen.</li>
        <li>No consultes las respuestas a través de algún documento o respondas con la ayuda de alguien, recuerda que este cuestionario solo pretende identificar lo que ya conoces del tema.
        <li>Una vez que concluyas, continúa con la siguiente pantalla.</li>
    </ol>
    <p class="text-center font-bold text-fuchsia-900">¡Mucho éxito!</p>
        <?php ob_start(); ?>
        <p>Contesta las siguientes preguntas eligiendo la respuesta que consideres correcta. </p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2t7a1', "Diagnóstico aprendizaje 7", $ActividadContent);
        ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
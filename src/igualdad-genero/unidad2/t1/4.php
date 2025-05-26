<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Cuestionario: Violencia de género y tipos</h2>
    <p>Una vez que ya conoces el tema de violencia de género y sus tipos, es muy importante que pongas en práctica tus conocimientos y trates de identificar qué tipos de violencia de género predomina en cada una de las situaciones que a continuación te presentamos.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar la violencia de género, sus tipos y características en diferentes situaciones de la vida cotidiana.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Ingresa al siguiente cuestionario y responde cada una de las preguntas que aparecen.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Contesta las siguientes preguntas eligiendo la respuesta que consideres correcta. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a3', "Tipos de violencia", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
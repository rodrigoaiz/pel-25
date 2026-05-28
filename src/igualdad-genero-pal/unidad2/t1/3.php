<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Cuestionarios: Violencia de género, tipos y modalidades</h2>
    <p>Una vez que ya conoces el tema es muy importante que pongas en práctica tus conocimientos y trates de identificar qué tipos y modalidades de violencia de género predomina en cada una de las situaciones que a continuación te presentamos.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar la violencia de género, tipos, modalidades y características en diferentes situaciones de la vida cotidiana.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Ingresa a los siguientes cuestionarios y responde cada una de las preguntas que aparecen.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t6a1', "CUESTIONARIO 1 | Tipos y modalidades de violencia", $ActividadContent);
    ?>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t6a2', "CUESTIONARIO 2 | Tipos y modalidades de violencia", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
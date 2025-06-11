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
    <h2>Actividad de aprendizaje</h2>
    <p>La relación que se presenta entre la estructura química con su función, determina las propiedades y características de la molécula. Como se ha visto, en el caso del almidón y la celosa, ambos homopolisacáridos, sus propiedades cambian debido a la disposición del enlace glucosídico, mientras el almidón tiene un enlace a, la celulosa tiene un enlace b. Lo mismo sucede con los ácidos grasos insaturados, donde la orientación de la doble ligadura determina su estabilidad.</p>
    <p>Para continuar, observa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('Ipoiehqd0m8', '7. GRASAS CIS Y TRANS (NUTRICIÓN ORTOMOLECULAR)');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Ahora es momento de responder las preguntas que ahí se presentan, ¡¡¡Suerte!!!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a20', "Ácidos grasos cis y trans.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
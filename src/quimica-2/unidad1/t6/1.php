<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Bienvenida a la Lección 6</h3>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('yLZiUjX0ebo', 'Bienvenida a la lección 6.');
        ?>
    </div>
    <p>Hola, bienvenidos a lección 6 de la Unidad 1, Estequiometría. </p>
    <p>En esta lección aprenderás qué es la estequiometría y un concepto muy importante denominado “mol”. </p>
    <p>Aplicarás tus conocimientos en la resolución de problemas de la vida diaria en los cuales se ven
        involucrados el uso de cálculos estequiométricos. </p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
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
    <h3>Ejercicios de Nomenclatura inorgánica</h3>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u1t2_quimica_inorganica.webp', 'Química inorgánica');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Da click en el botón que te llevará a un cuestionario donde podrás poner a prueba tus conocimientos sobre nomenclatura inorgánica. ¡Éxito!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a11', "Nomenclatura inorgánica", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
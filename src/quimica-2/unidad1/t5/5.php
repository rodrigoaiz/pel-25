<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Disociación iónica</h3>
    <p>La disociación iónica es el proceso en el que un compuesto se separa en iones (catión y anión), las
        sustancias que se pueden disociar son los ácidos y las sales.</p>
    <p>En el caso de las sales llevan a cabo solvatación por el disolvente que es agua, logrando separar al
        catión y al anión, lo que hace posible que la sal sea disuelta en agua.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_disociacion_de_la_sal_KCl.webp', 'Disociación de la sal KCl');
        ?>
    </div>
    <p>Revisa los siguientes ejemplos de disociación de sales.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('1RyGEIceVNM', 'Ejemplos de disociación de sales');
        ?>
    </div><?php ob_start(); ?>
    <p>Realiza la siguiente actividad para corroborar lo aprendido.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a18', "Disociación de sales", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
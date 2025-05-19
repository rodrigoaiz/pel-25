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
    <h3>Reacciones de desplazamiento simple</h3>
    <p>Las sales también se pueden obtener mediante una reacción de desplazamiento simple o también conocida
        como sustitución simple. Es una reacción óxido reducción donde un ion (o átomo) de un compuesto se
        reemplaza por un ion (o átomo) de otro elemento.</p>
    <p>El esquema general de la reacción es:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_reaccion_desplazamiento_simple.webp', 'Reacción de desplazamiento simple');
        ?>
    </div>
    <p>Las reacciones de desplazamiento simple se pueden clasificar en:</p>
    <ul class="ul-disc ml-10">
        <li><span class="font-bold">Desplazamiento de hidrógeno:</span> los metales alcalinos y alcalinotérreos
            desplazan al hidrógeno del agua para formar la sal correspondiente. Otros metales menos reactivos
            desplazan al hidrógeno de los ácidos.</li>
        <li><span class="font-bold">Desplazamiento de metal:</span> un metal de un compuesto puede ser
            reemplazado por otro metal en estado libre, esto dependerá de la reactividad de los metales
            empleados. </li>
        <li><span class="font-bold">Desplazamiento de halógeno:</span> los halógenos son agentes oxidantes y su
            comportamiento en reacciones de desplazamientos es F2 > Cl2> Br2> I2, siendo el flúor el más
            reactivo de los halógenos que puede desplazar a los otros halógenos.</li>
    </ul>
    <p>En el siguiente esquema se muestran ejemplos de cada reacción:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_sales_obtenidas_desplazamiento_simple.webp', 'Sales obtenidas por desplazamiento simple');
        ?>
    </div>
    <div class="max-w-xl mx-auto my-20">
        <?php
        renderVideoIframe('--MqwDTmOHE', 'Reacciones de metales con agua');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Después de observar el video, completa la tabla de la actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a19', "Reacción de metales con agua", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
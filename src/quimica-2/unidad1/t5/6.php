<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Reacciones de síntesis</h3>
    <p>Revisa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('XyrOvg3pS88', 'Formación de MgO');
        ?>
    </div>
    <p>Como observaste, la formación del óxido de magnesio (MgO) se debe a la reacción óxido-reducción entre el
        magnesio (Mg) y el oxígeno (O2). Este tipo de reacción química, donde se unen dos reactivos para formar
        un solo producto, se le conoce como reacción de síntesis, combinación o adición. Las sales se pueden
        obtener por medio de esta reacción.</p>
    <p>El esquema general de una reacción de síntesis es el siguiente:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_reaccion_sintesis.webp', 'Reacción de síntesis');
        ?>
    </div>
    <p>Donde A y B pueden ser elementos o compuestos y el producto AB es un compuesto.</p>
    <p>Cuando se combinan un metal y un no metal el producto formado es una sal. En la siguiente figura se
        muestran algunos ejemplos:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_sales_obtenidas_reaccion.webp', 'Sales obtenidas por medio de una reacción de síntesis');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
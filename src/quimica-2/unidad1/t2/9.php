<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Nomenclatura Stock</h3>
    <p>Consiste en indicar el número de oxidación del elemento metálico (catión) con números romanos entre paréntesis, en este sistema se utilizan dos palabras para nombrar a los compuestos, la primera hace referencia a la función y la segunda al catión. Si el catión tiene varios estados de oxidación basta con colocar un número romano entre paréntesis después del nombre del catión que indique con cuál se está trabajando.</p>
    <p>Observa los siguientes ejemplos:</p>

    <div class="grid grid-cols-2 gap-4 items-center justify-items-center">
        <div><?php
                renderImage('u1t2_nomenclatura_stock.webp', 'Nomenclatura de Stock');
                ?></div>
        <div><?php
                renderImage('u1t2_ejemplos_nomenclatura_stock.webp', 'Ejemplos de nomenclatura Stock');
                ?></div>
    </div>
    <p>Revisa el siguiente video para aprender más sobre la nomenclatura sistemática de los compuestos inorgánicos:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('H_Wwgpuw0w8', '¿Cómo nombrar óxidos utilizando la nomenclatura STOCK? (Básico)');
        ?>
    </div>
    <p class="text-rose-700 font-bold">En el siguiente vínculo encontrarás un sitio web en el cual hallarás una amplia información sobre la formulación de los compuestos inorgánicos:</p>
    <div class="w-md mx-auto">
        <p class="text-center rounded-lg shadow-md p-2 bg-rose-700"><a class=" text-gray-50" href="<?php echo PATH_DOCS . 'nomeclatura_de_sales.pdf'; ?>" target="_blank">Formulación Química</a>
        </p>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
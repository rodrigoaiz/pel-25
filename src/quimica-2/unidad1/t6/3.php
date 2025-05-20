<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>¿Cómo puedo hacer un pastel?</h3>
    <p>Observa la siguiente imagen de un pastel y reflexiona: ¿cómo puedo hacerlo? ¿Qué ingredientes necesito?</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_pastel.webp', 'Imagen de TesaPhotography,', 'https://pixabay.com/es/photos/pastel-dulce-comida-panader%C3%ADa-727854/', 'Pixabay.');
        ?>
    </div>
    <p>Seguramente has pensado en que para elaborar el pastel se requieren de ciertos ingredientes como leche,
        harina, huevos, levadura, sal, azúcar, etc, que se combinarán para formar una mezcla que luego de
        hornearla podremos obtener el pastel.</p>
    <p>Estos ingredientes son los reactivos necesarios para hacerlos reaccionar entre sí y formar el producto
        (pastel), pero…¿qué cantidad de cada ingrediente requiero?</p>
    <p>Podemos hacer una analogía de la preparación del pastel con la realización de una reacción química.</p>
    <p>Es aquí donde puedes darte cuenta y reflexionar que se requieren cantidades específicas necesarias para
        la elaboración de un producto con calidad, además también necesitas condiciones de presión, temperatura
        y tiempo de cocción para poder obtener el producto deseado. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t6_cooking.webp', 'Imagen de sontung57 Pixabay,', 'https://pixabay.com/es/photos/cocinando-ingredientes-endecha-plana-5880136/', 'Pixabay.');
        ?>
    </div>
    <p>Así mismo sucede con las reacciones químicas, son necesarios reactivos en cantidades cuantitativas
        específicas y condiciones de reacción tales como la temperatura, presión, tiempo e inclusive
        catalizadores que nos ayuden a llevar a cabo la reacción y aquí es donde la estequiometría nos ayuda a
        determinar las cantidades y relaciones existentes entre los reactivos y los productos al experimentar
        cambios químicos.</p>
    <p>Es importante que tengas presente que la estequiometría se basa en tres aspectos fundamentales que son:
    </p>
    <ol class="ol-number ml-20">
        <li>Conservación de la masa</li>
        <li>Masa relativa de los átomos y masa molecular (es posible que la encuentres denominada como peso
            molecular)</li>
        <li>El concepto de MOL</li>
    </ol>
    <p>Y se relaciona con leyes ponderales:</p>
    <ol class="ol-number ml-20">
        <li>Ley de conservación de la masa</li>
        <li>Ley de las proporciones constantes o definidas</li>
        <li>Ley de las proporciones múltiples </li>
        <li>Ley de los volúmenes de combinación</li>
    </ol>
    <p>El siguiente mapa conceptual te ayudará a relacionar y comprender mejor los conceptos concernientes con
        la estequiometría.</p>
    <div class="w-lg-2 mx-auto">
        <?php
        renderImage('u1t6_estequiometría-mapa-conceptual-2.webp');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
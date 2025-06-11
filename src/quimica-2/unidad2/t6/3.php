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
    <h2>Aporte calórico</h2>
    <p>El aporte de energía que proveen los alimentos, también se llama aporte calórico y es proporcional a la
        cantidad de energía que libera al quemarse el alimento en presencia de oxígeno. La unidad de medición de
        la energía en el sistema internacional de unidades es el Joule (J), sin embargo, de forma tradicional,
        los valores que aportan los alimentos, se expresan en calorías. Una caloría equivale a la energía
        necesaria para elevar 1ºC la temperatura de 1 g de agua.</p>
    <p>Todos los alimentos tienen una composición química diferente, por lo cual el aporte calórico que proveen
        al organismo al consumirlos es diferente. En la figura 3 se muestra una tabla de aporte calórico para
        diferentes alimentos.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t6_img_etiqueta_nutrimental.webp', 'Etiqueta nutrimental.');
        ?>
    </div>
    <p>Para complementar tu formación te presento este video "Reacciones de oxidación y aporte calórico de
        alimentos", en el cual se explica, a través de una actividad experimental, cómo las reacciones de
        hidrólisis permiten el aprovechamiento de los macronutrimentos.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('CYGh1pEaO4o', 'Reacciones de oxidación y aporte calórico de alimentos.');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
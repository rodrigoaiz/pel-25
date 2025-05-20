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
    <h3>Reacción química</h3>
    <p>Para comprender el tema de reacción química revisa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('FX1IsKtvZ9Y', 'Reacción química');
        ?>
    </div>
    <p>Como viste en el video las reacciones químicas indican que están ocurriendo transformaciones en las
        sustancias, las cuales ocurren diariamente en tu vida. Si observas a tu alrededor estás en contacto con
        cambios químicos como la oxidación de una manzana, cuando respiras, si tienes acidez estomacal y te
        tomas un antiácido, cuando cocinas, etc.</p>
    <p>Recuerda que es importante que representes correctamente una reacción química mediante la escritura de la
        ecuación química, escribiendo bien las fórmulas de cada sustancia y la simbología correspondiente en la
        ecuación química.</p>
    <p>En una reacción química cambian la estructura interna de las sustancias, donde hay ruptura y formación de
        enlaces para formar las nuevas sustancias. Por eso es importante que conozcas e identifiques qué tipo de
        reacción está ocurriendo.</p>
    <p>Las sales presentes en el suelo se pueden sintetizar a partir de las siguientes reacciones:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_reacciones_para_obtener_sales.webp', 'Reacciones para obtener sales');
        ?>
    </div>
    <p>Como material de apoyo puedes consultar la siguiente página:</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-green-600"><a class=" text-gray-50" href="https://www.aev.dfie.ipn.mx/Materia_quimica/temas/tema6/subtema1/subtema1.html" target="_blank">Reacciones químicas</a></p>
    </div>
    <?php ob_start(); ?>
    <p>Realiza la siguiente actividad para corroborar lo aprendido.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a17', "Reacción química", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
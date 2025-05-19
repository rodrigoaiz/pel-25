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
    <h3>Reacciones de doble desplazamiento</h3>
    <p>La reacción de desplazamiento doble o también conocida como sustitución doble es otro método para obtener
        sales. Esta reacción consiste en intercambiar el catión y el anión de dos compuestos generando dos
        nuevos compuestos. El esquema general de la reacción es:</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_reaccion_desplazamiento_doble.webp', 'Reacción de desplazamiento doble');
        ?>
    </div>
    <p>Las reacciones de precipitación (formación de un precipitado) y las reacciones ácido-base de
        neutralización son ejemplos de reacciones de desplazamiento doble, en la siguiente figura se ilustra un
        ejemplo de cada una.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u1t5_ejemplos_reacciones_desplazamiento_doble.webp', 'Ejemplos de reacciones de desplazamiento doble');
        ?>
    </div>
    <p class="mt-16">Para conocer más sobre las reacciones de doble desplazamiento puedes revisar la página:</p>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-red-500"><a class=" text-gray-50" href="https://uapas2.bunam.unam.mx/ciencias/reacciones_quimicas/" target="_blank">Reacciones químicas</a></p>
    </div>
    <?php ob_start(); ?>
    <p>Realiza el siguiente cuestionario para corroborar lo aprendido en toda la lección.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a20', "Obtención de sales", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
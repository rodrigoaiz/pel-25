<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>El enlace químico</h3>
    <p>Para el caso del estudio de los macronutrimentos, consideraremos al enlace covalente como protagónico, ya que es el que se presenta en este tipo de sustancias orgánicas. A continuación, revisa la siguiente presentación que contiene información asociada con el tema de enlace químico y, en particular, el enlace covalente.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t2_img_enlaces_electrones.webp', 'Enlaces electrones.');
        ?>
    </div>
    <div class="w-md mx-auto m-10">
        <p class="text-center rounded-lg shadow-md p-2 bg-orange-500">
            <a class=" text-gray-50" href="../../assets/docs/enlacecovalente.pptx" target="_blank">Enlace químico y enlace covalente</a>
        </p>
    </div>
        <p>Un enlace covalente puede ser sencillo, doble o triple, dependiendo del número de electrones que se comparten. Los primeros dos enlaces se presentan en los macronutrimentos, el triple enlace lo podemos observar en los hidrocarburos, que son los compuestos más simples que el carbono forma.</p>
        <div class="w-lg mx-auto">
            <?php
            renderImage('u2t2_img_enlace_sencillo_doble_triple.webp', 'Enlace sencillo, doble o triple.');
            ?>
        </div>
        <p>En la siguiente figura ejemplificamos los enlaces covalentes sencillo y doble en tres estructuras de macronutrimentos:</p>
        <div class="w-md-2 mx-auto">
            <?php
            renderImage('u2t2_img_proteina.webp', 'Proteína.');
            ?>
        </div>
        <?php ob_start(); ?>
        <p>Es momento de participar en la siguiente actividad.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a13', "Química del carbono", $ActividadContent);
        ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
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
    <h2>Enlace éster</h2>
    <p>Observa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('QOPYamA6TMs', 'Enlace tipo Éster para Lípidos');
        ?>
    </div>

    <div class="grid grid-flow-col grid-rows-3 gap-4 h-96">
        <div class="col-span-2 pt-4">
            <p class="content-center">El grupo funcional éster se forma cuando los ácidos carboxílico reaccionan con alcoholes; en un éster, el átomo de hidrógeno del grupo carboxilo es reemplazado por una cadena carbonada. Los ésteres están presentes en las grasas y los aceites que ingerimos.</p>
            <p class="content-center">Por ejemplo los triacilglicéridos son ésteres formados por un glicerol y los ácidos grasos que son ácidos carboxílico de cadena larga. El glicerol, también llamado glicerina, es un triol, es decir, una molécula con tres grupos alcohol, también llamados hidróxilo (<em>-OH</em>).</p>
            <p>El glicerol puede esterificarse una, dos o tres veces con moléculas que contengan ácidos carboxílicos. Un ejemplo de esas moléculas son los ácidos grasos los cuales son moléculas de cadenas hidrocarbonadas y un grupo ácido carboxílico.</p>
        </div>
        <div class="row-span-3 content-center">
            <img class="h-full max-h-80" src="../../assets/img/u2t4_img_glicerol.webp" />
        </div>
    </div>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t4_img_acidos_grasos.webp', 'Ácidos grasos.');
        ?>
    </div>
    <p>Los ésteres que se forman de los ácidos grasos y glicerol generalmente se les llama glicéridos, pero cuando es un glicerol unido a tres ácidos grasos se les conoce como triacilglicéridos (triglicéridos). Son los compuestos más abundantes en la célula para almacenar grasas en animales y plantas, ya que su principal función biológica es la de reserva energética. Cuando se unen los ácidos grasos con el glicerol se libera una molécula de agua por cada enlace éster formado, por eso, en los triacilglicéridos se liberan tres moléculas de agua.</p>
    <div class="w-lg-2 mx-auto">
        <?php
        renderImage('u2t4_img_enlace_ester.webp', 'Enlace éster en los triacilglicéridos.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Ahora que has revisado los temas de los diferentes enlaces que mantienen unidas las macromoléculas, te pido por favor, que realices una infografía en la que presentes el contenido de estos tres temas.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a17', "Infografía.", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
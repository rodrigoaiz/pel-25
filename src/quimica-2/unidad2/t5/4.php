<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Acidos grasos</h2>
    <p>En la forma pura todas las grasas y aceites están constituidos exclusivamente por triacilglicéridos, los que a su vez son ésteres de ácidos grasos con glicerol. El número de ácidos grasos que comúnmente se localizan en los alimentos es muy reducido por lo general están esterificados, integrando los tres heridos y cuando llegan a presentarse en estado libre es porque ocurrió una hidrólisis del enlace éster. </p>
    <p>Los <strong>ácidos grasos</strong> se clasifican en <strong>saturados</strong> e <strong>insaturados</strong>. </p>
    <p>Los ácidos grasos saturados varían de 4-26 átomos de carbono y su punto de fusión aumenta con el largo de la cadena hidrocarbonada; así, los ácidos cuya cadena es de 4-8 carbonos son líquidos a 25 °C, mientras que las cadenas mayores a 10 átomos de carbono son sólidos. Entre los más comunes está el ácido laúrico, que abunda en los aceites de palmiste y de coco; el palmítico que se encuentra en la palma, en el cacao y en la manteca de cerdo y el estético en el cacao y en los aceites hidrogenados. La grasa de la leche o grasa butírica contiene ácido butírico.</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t5_img_acido_graso.webp', 'Ácidos grasos saturados.');
        ?>
    </div>
    <p>Los <strong>ácidos grasos insaturados</strong> son cadenas hidrocarbonadas que presentan dobles enlaces entre C=C, estos compuestos tienen una gran reactividad química, ya que son propensos a la saturación con hidrógeno y a transformaciones químicas. Son muy abundantes en los aceites vegetales y marinos; su temperatura de fusión disminuye con el aumento de los dobles enlaces y siempre es menor que la de los ácidos grasos saturados, aún cuando se tiene la misma longitud de cadena. Los que tienen un doble enlace (insaturación) se llaman monoinsaturados y los que presentan más de un doble enlace se conocen como poliinsaturados. </p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t5_img_graso_insaturado.webp', 'Ácidos grasos insaturados.');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
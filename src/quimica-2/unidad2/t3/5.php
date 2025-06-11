<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Estructura química de proteínas</h3>
    <p>Las unidades funcionales de las proteínas se llaman <strong>aminoácidos</strong>. Las proteínas son biopolímeros que desempeñan muchas funciones en el organismo, entre las que destacan: transporte, defensa, soporte, estructural, contráctil, entre otras.</p>
    <p>La composición química de estos macronutrimentos es más extensa, a diferencia de los carbohidratos y lípidos, ya que podemos encontrar carbono, hidrógeno, oxígeno, nitrógeno, fósforo y azufre. Algunas proteínas involucran elementos metálicos en su estructura, por ejemplo el hierro en la hemoglobina. Los grupos funcionales en los aminoácidos de las proteínas son imprescindibles para la formación del enlace peptídico. Todos los aminoácidos, por relación directa con su nombre, contendrán los grupos funcionales amina y ácido carboxílico.</p>
    <p>En la siguiente imagen se observa la estructura del ácido aspártico, con sus respectivos grupos funcionales señalados.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_acido_aspartico.webp', 'Estructura del ácido aspártico.');
        ?>
    </div>
    <p>Este ácido es uno de los principales aminoácidos que constituyen a la albúmina del huevo, una proteína que desempeña funciones de transporte en muchos organismos. En la siguiente imagen se observa la estructura tridimensional de la albúmina del huevo, así como la representación del ácido aspártico, su principal componente.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_albumina.webp', 'Albúmina del huevo.');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
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
    <h2>Reacción química</h2>
    <p>En el laboratorio se pueden llevar a cabo diferentes reacciones químicas, en las cuales se implica la
        reacción de dos reactivos orgánicos para formar un producto orgánico más complejo, pero también a partir
        de una molécula compleja es posible que se obtengan dos o más productos. Esto mismo sucede con las
        macromoléculas como las proteínas, lípidos y carbohidratos; para que estas macromoléculas pueden ser
        metabolizadas, es necesario reducir su tamaño, es decir, que se vayan descomponiendo en moléculas más
        pequeñas para que así puedan ser asimiladas por el organismo. </p>
    <h3>Reacción de condensación</h3>
    <p>En una reacción de condensación se combinan dos moléculas para formar una más compleja, pero además se
        caracteriza por la liberación de una molécula de agua. En su forma habitual, la molécula perdida se
        forma a partir de los grupos funcionales de cada una de las moléculas del reactivo. En esencia, una
        reacción de condensación es una reacción de eliminación, donde un enlace se forma entre dos átomos que
        no estaban unidos previamente entre sí. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t4_img_condensacion.webp', 'Reacción de condensación.');
        ?>
    </div>
    <p>Este tipo de reacciones son características de los enlaces glucosídico, peptídico y éster, que se
        revisaron en la sección anterior. En la caso de los carbohidratos, cuando se unen dos monosacáridos para
        producir un disacárido, se libera una molécula de agua; lo mismo ocurre en la unión de dos aminoácidos,
        cuando se unen para formar un péptido también liberan una molécula de agua por cada enlace peptídico
        formado y en los triacilglicéridos se desprenden tres moléculas de agua, una por cada enlace éster.</p>
    <h3>Reacción de hidrólisis</h3>
    <p>La reacción de hidrólisis es una reacción por adición, donde reacciona una molécula de agua con otros
        grupos funcional como el éter, en el caso de los carbohidratos, la amida de las proteínas y el éster de
        los triacilglicéridos. La molécula de agua se divide en grupos H+ y OH- para reaccionar con un enlace
        específico (glucosídico, peptídico y éster) y para producir dos nuevas moléculas. Una reacción de
        hidrólisis es el paso contrario de una reacción de condensación. En la siguiente imagen se presenta la
        reacción de hidrólisis de un disacárido para producir dos monosacáridos. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t4_img_hidrolisis.webp');
        ?>
    </div>
    <p>Además de los carbohidratos, las reacciones de hidrólisis también se presentan en otras macromoléculas
        como las proteínas y los triacilglicéridos. En este contexto una molécula orgánica y el agua reaccionan
        rompiendo un enlace covalente para formar dos moléculas orgánicas con grupos funcionales que incluyen
        los átomos de la molécula de agua. Para que se lleve a cabo la reacción se requiere añadir ácidos o
        bases fuertes para catalizar la hidrólisis.</p>
    <?php ob_start(); ?>
    <p>Realiza el siguiente ejercicio e identifica cada una de las siguientes reacciones como de condensación o hidrólisis.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a18', "Reacciones de condensación e hidrólisis y enlaces.", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
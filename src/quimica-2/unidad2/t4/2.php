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
    <h2>Enlace entre macromoléculas</h2>
    <p>En las moléculas orgánicas se encuentra un átomo o un grupo de átomos que se conocen como grupos funcionales, los cuales determinan las características y propiedades de la molécula donde se encuentran. </p>
    <p>En los alimentos, los grupos funcionales están presentes en las macromoléculas y éstos le confieren a cada molécula propiedades específicas, pero además, pueden dar origen a la formación de nuevas moléculas a través de enlaces que se presentan entre ellas, por ejemplo: en los carbohidratos, es el glucosídico; en las proteínas, el peptídico y en los lípidos, específicamente en los triacilglicéridos el enlace éster. A continuación se describen cada uno de ellos.</p>
    <h3>Enlace glucosídico</h3>
    <p>Observa el siguiente video:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('B4Z-SIUd7ww', 'Enlace glucosídico.');
        ?>
    </div>
    <p class="mt-4">En el video anterior, se habla de los carbohidratos, los cuales son compuestos polihidroxílicos (<em>-OH</em>) y que además pueden tener grupos cetona (<em>-CO-</em>) o aldehído (<em>-CHO</em>). Estas moléculas tienen funciones muy importantes en el organismo humano, por ejemplo: son fuente de energía y también forman material estructural de las membranas celulares, entre otras más.</p>
    <p>Recordemos brevemente cómo se clasifican los carbohidratos de acuerdo con el número de unidades enlazadas en su estructura:</p>
    <div class="grid grid-cols-6 gap-4 h-40 border-y-1 border-indigo-300">
        <div class="col-span-3 col-start-2 content-center"><strong>Monosacáridos:</strong> están formados sólo por una unidad.</div>
        <div class="h-full content-center">
            <img class="mx-left" src="../../assets/img/u2t4_img_monosacarido.webp" />
        </div>
    </div>
    <div class="grid grid-cols-6 gap-4 h-40 border-y-1 border-indigo-300">
        <div class="col-span-3 col-start-2 content-center"><strong>Disacáridos:</strong> están formados por dos unidades de monosacáridos.</div>
        <div class="h-full content-center">
            <img class="mx-left" src="../../assets/img/u2t4_img_disacarido.webp" />
        </div>
    </div>
    <div class="grid grid-cols-6 gap-4 h-64 border-y-1 border-indigo-300">
        <div class="col-span-2 col-start-2 content-center"><strong>Oligosacáridos:</strong> están formados de 3 a 20 unidades de monosacáridos.</div>
        <div class="h-full col-span-3 content-center">
            <img class="mx-auto" src="../../assets/img/u2t4_img_oligosacaridos.webp" />
        </div>
    </div>
    <div class="grid grid-cols-6 gap-4 h-64 border-y-1 border-indigo-300">
        <div class="col-span-2 col-start-2 content-center"><strong>Polisacáridos:</strong> están formados por más de 20 unidades de monosacáridos.</div>
        <div class="h-full col-span-3 content-center">
            <img class="mx-auto" src="../../assets/img/u2t4_img_polisacarido.webp" />
        </div>
    </div>
    <p>Las unidades de monosacáridos se unen a través de un enlace que conoce como <strong>enlace glucosídico</strong>, que presenta un <strong>grupo funcional éter</strong>, el cual se produce por la unión del grupo hidroxilo <em>-OH</em> de un monosacárido con el grupo <em>-OH</em> de otro; formando así <strong>disacáridos</strong> (2 unidades de monosacáridos), oligosacáridos (3-20 unidades) o polisacáridos (más de 20 unidades). </p>
    <p>Un ejemplo de disacárido y donde se puede observar el enlace glucosídico es en la lactosa, que es un disacárido que se encuentra en la leche y en los productos lácteos. Algunas personas no producen una cantidad suficiente de la enzima necesaria para hidrolizar la lactosa por lo que no digieren este disacárido, lo que les produce dolores abdominales y diarrea. En algunos productos lácteos comerciales se añade una enzima denominada lactasa para romper el enlace glucósido entre la glucosa y la galactosa. En la siguiente figura se presenta la formación de la lactosa a partir de sus monosacáridos galactosa y glucosa, observa que cada vez que se forma un enlace glucosídico se libera una molécula de agua derivada de la unión de los grupo hidroxilo de ambos monosacáridos. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t4_img_glusidicolactosa.webp', 'Enlace glucosídico en la lactosa.');
        ?>
    </div>
    <p>La sacarosa, mejor conocida como el azúcar de mesa, es un disacárido que está formado por una molécula de glucosa y otra de fructosa, unidas a través de un enlace glucosídico. En la figura se presenta la reacción de formación de la sacarosa, a partir de sus monosacáridos glucosa y fructosa, observa que cada vez que se forma un enlace glucosídico se libera una molécula de agua. </p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t4_img_sacarosa.webp');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Ahora podrás poner a prueba tus conocimientos sobre enlace glucosídico. ¡Éxito!</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u2a15', "Reacciones de condensación e hidrólisis.", $ActividadContent);        
        ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
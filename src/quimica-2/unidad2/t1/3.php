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
    <h3>Macronutrimentos</h3>
    <p>De acuerdo a las actividades que realizaste, seguramente has concluido que los macronutrimentos son aquellas
        sustancias que nuestro organismo requiere en grandes cantidades, pues desempeñan funciones esenciales en el
        organismo como aportar energía, formar estructuras y regular funciones celulares entre otra gran diversidad de
        funciones. Veamos a continuación algunas generalidades. </p>
    <p class="font-bold text-red-600 underline decoration-red-600 text-xl decoration-4 underline-offset-8">Carbohidratos</p>
    <p>Los carbohidratos son considerados como macronutrimentos. Son compuestos esenciales en los organismos y las
        biomoléculas más abundantes son la principal fuente de alimento para la humanidad, se denominan “combustibles de
        uso rápido” debido a que proporcionan energía a la célula para la realización de sus funciones vitales. Están
        formados por carbono, hidrógeno y oxígeno.</p>
    <p>Los vegetales sintetizan los carbohidratos a partir del dióxido de carbono del ambiente y el agua del suelo,
        por medio de la fotosíntesis, la clorofila que actúa como catalizador y la energía solar para formar glucosa y
        liberar oxígeno a la atmósfera. La glucosa es la base para formas más complejas de hidratos de carbono y otros
        compuestos orgánicos, la clasificación más aceptada de los carbohidratos es:</p>
    <ul class="list-disc ml-30">
        <li>Monosacáridos</li>
        <li>Oligosacáridos</li>
        <li>Polisacáridos</li>
    </ul>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t1_img_carbohidratos.webp', 'Carbohidratos.');
        ?>
    </div>
    <p>Los monosacáridos constituyen la unidad fundamental de todo carbohidrato, dentro de su composición química
        encontramos átomos de carbono, hidrógeno y oxígeno unidos covalentemente. El monosacárido más popular e
        importante para la vida es la glucosa. A continuación, se observa su estructura química bajo diferentes
        proyecciones.</p>
</section>
<div class="grid grid-cols-3 gap-4">
    <div><?php
            renderImage('u2t1_img_carne.webp', 'Carne, Imagen de Shutterbug75,', 'https://pixabay.com/es/images/search/parilla+parrilla/', 'Pixabay.');
            ?></div>
    <div><?php
            renderImage('u2t1_img_fruta.webp', 'Fruta, Imagen de silviarita,', 'https://pixabay.com/es/photos/frutas-frescas-bochas-2305192/', 'Pixabay.');
            ?></div>
</div>






<section>
    <?php ob_start(); ?>
    <p>Después de observar el video, realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a3', "Conceptos de alimento, macronutrimento y micronutrimento", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
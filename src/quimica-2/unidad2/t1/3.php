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
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t1_img_glucosa_estructuras.webp', 'Glucosa.');
        ?>
    </div>
    <p>Los oligosacáridos son carbohidratos que tienen entre 2 y 9 monosacáridos, ejemplos comunes en los alimentos son la lactosa (en la leche) y sacarosa (azúcar de mesa). La lactosa está constituida por glucosa y galactosa, mientras que la sacarosa por glucosa y fructosa. Las siguientes imágenes representan la estructura química de ambos oligosacáridos.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t1_img_lactosa_sacarosa.webp', 'Lactosa y Sacarosa.');
        ?>
    </div>
    <p>Los polisacáridos son polímeros naturales conformados, en su mayoría, por unidades de glucosa unidas por enlace covalente. Ejemplos de ellos son el almidón, celulosa, glucógeno, entre otros.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t1_img_almidon_estructura.webp', 'Estructura del almidón.');
        ?>
    </div>
    <p class="font-bold text-orange-600 underline decoration-orange-600 text-xl decoration-4 underline-offset-8">Lípidos</p>
    <p>Son biomoléculas que fungen como reserva energética en los organismos, son componentes estructurales de las membranas biológicas y regulan muchas funciones celulares. Están formados por carbono, hidrógeno y oxígeno, principalmente. Algunos lípidos compuestos presentan otros elementos, tales como el fósforo y el nitrógeno. La clasificación de estas sustancias, de acuerdo con algunas reacciones químicas que pueden presentar, es:</p>
    <ul class="list-disc ml-30">
        <li>Saponificables</li>
        <li>Insaponificables</li>
    </ul>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t1_img_lipidosx2.webp', 'Imágenes de Ashwini Chaudhary y Sorin Gheorghita, Unsplash.');
        ?>
    </div>
    <p>Los lípidos saponificables son aquellos que pueden formar ésteres a partir de su reacción química con los grupos funcionales ácido carboxílico y alcohol, son característicos en este grupo los ácidos grasos. Esta reacción de esterificación es conocida como reacción de saponificación y, en la industria, es el proceso para obtener jabones. A continuación, se ejemplifica la estructura química de dos ácidos grasos, el oleico y linoleico.</p>
    <p class="font-bold text-green-600 underline decoration-green-600 text-xl decoration-4 underline-offset-8">Proteínas</p>
    <p>Se trata de macromoléculas que cumplen muchas funciones en el organismo: estructural, reguladora, contráctil, defensa, catalizadora, entre otras. Están formadas por unidades funcionales denominadas aminoácidos, por lo que en su estructura química encontramos carbono, hidrógeno, nitrógeno, oxígeno y, en algunas de ellas, fósforo y azufre.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t1_img_proteinasx2.webp', 'Imágenes de Tapan Kumar y Iogan jeffrey, Unsplash');
        ?>
    </div>
    <p class="font-bold text-sky-600 underline decoration-sky-600 text-xl decoration-4 underline-offset-8">Micronutrimentos</p>
    <p>Los micronutrimentos son nutrientes requeridos por el organismo en muy pequeñas cantidades y son de vital importancia para el buen funcionamiento del mismo a pesar de las pequeñas cantidades que deben ser consumidas. Por su naturaleza química se clasifican en minerales (sustancias inorgánicas) y vitaminas (sustancias orgánicas) y estas últimas a su vez se clasifican de acuerdo a su solubilidad en hidrosolubles y liposolubles. Es importante consumirlas porque participan en muchas rutas metabólicas por lo que si no hay un aporte adecuado a través de la dieta, se afectan diversas funciones biológicas.</p>
    <p>Se denominan micronutrientes porque se requieren diariamente en cantidades tan pequeñas que se expresan en unidades que van del miligramo (la milésima parte de un gramo) al microgramo (la millonésima parte de un gramo). A los minerales también se les conoce como microminerales u oligoelementos (y, a veces elementos traza), porque el organismo sólo los necesita en cantidades muy pequeñas.</p>
    <p class="font-bold text-fuchsia-700 underline decoration-fuchsia-700 text-xl decoration-4 underline-offset-8">Vitaminas</p>
    <p>Son compuestos importantes para el desarrollo fisiológico, por lo general, tienen una función enzimática dentro del cuerpo. Las vitaminas esenciales no pueden ser sintetizadas por el organismo y este las obtiene a través de alimentos naturales. Se clasifican de acuerdo con su solubilidad en:</p>
    <ul class="list-disc ml-30">
        <li>Hidrosolubles</li>
        <li>Liposolubles</li>
    </ul>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t1_img_vitaminas.webp', 'Imagen de Vedrana Filipovic, Unsplash');
        ?>
    </div>
    <p class="font-bold text-amber-500 underline decoration-amber-500 text-xl decoration-4 underline-offset-8">Minerales</p>
    <p>Son sustancias de origen inorgánico que intervienen en la formación de huesos como el calcio, la producción de hormonas y la regulación de los latidos cardíacos (como el potasio y el sodio). En esta gran familia encontramos minerales que abundan más que otros, a los que suelen llamarles macrominerales y, los que persisten en baja concentración, se denominan oligoelementos.</p>
    <?php ob_start(); ?>
    <p>Ahora realiza la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a4', "Elementos químicos que constituyen a los macronutrientes", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Realiza la siguiente actividad y cuando termines carga tu archivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a5', "Tabla de declaración nutrimental", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
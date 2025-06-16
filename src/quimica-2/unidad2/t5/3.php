<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Almidón</h2>
    <p>El almidón está formado por cientos y hasta miles de moléculas de glucosa unidas mediante enlaces
        gluosídico α-(1,4) que dan lugar a macromoléculas rectas (amilosa) y α-(1,6) cadenas ramificadas
        (amilopectina), observa la figura.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t5_img_estructura_almidon.webp', 'Estructura del almidón.');
        ?>
    </div>
    <div class="grid grid-flow-col grid-rows-3 gap-4 h-96">
        <div class="col-span-2 pt-20">
            <p class="...">
            <p>Se encuentra en los cereales, los tubérculos y en algunas frutas como polisacárido de reserva energética.
                Su concentración varía según el estado de madurez de la fuente; el caso del plátano es una señal muy
                clara en este sentido: en estado verde o inmaduro, el almidón constituyen la mayor fracción de los
                carbohidratos ya que los azúcares son muy escasos; a medida que la fruta madura, los polisacáridos se
                hidrolizan por acción enzimática de las amilasas y se obtienen moléculas de sacarosa y de fructosa que
                se encuentran cuando llega a la plena maduración.</p>
        </div>
        <div class="row-span-3 content-center">
            <img class="h-full max-h-80" src="../../assets/img/u2t5_img_banana.webp" />
        </div>
    </div>
    <h3>Celulosa</h3>
    <p>La celulosa es el polisacárido estructural más abundante en la naturaleza, además de constituir una
        fuente de glucosa prácticamente inagotable pues se renueva de forma continua mediante la fotosíntesis.
        Está formada por moléculas de glucosa unidas mediante enlaces β-glucosídico y sus cadenas permiten la
        atracción por puentes de hidrógeno entre ellas, por lo que se obtiene un polímero lineal y rígido
        generando las micro fibrillas de las fibras vegetales.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t5_img_celulosa.webp', 'Estructura celulosa.');
        ?>
    </div>
    <<p>A diferencia de los animales monogástricos como el hombre, los herbívoros son los únicos capaces de
        aprovechar la celulosa en su metabolismo, pues cuenta con las correspondientes enzimas células en el
        tracto gastrointestinal. Los humanos no podemos digerir la celulosa porque no poseemos las enzimas que
        son capaces de hidrolizar los enlaces glucosídicos β. Para el organismo humano, la celulosa es parte de
        la fibra cruda, por lo que se elimina en las heces sin haber sido aprovechada. </p>
        <p>La celulosa se encuentra en las frutas, las hortalizas y los seriales como constituyentes estructurales
            de las paredes celulares y también la producen ciertos microorganismos. En el arroz, el maíz y el trigo
            se localizan en el pericarpio y en el germen junto con la semicelulosas y la lignina representando entre
            el uno y el 2% del grano. Comercialmente, este polisacárido se obtiene de la madera y del algodón,
            siendo esta última la fuente más pura.</p>
        <div class="grid grid-cols-2 gap-6">
            <div class="..."><?php
                                renderImage('u2t5_img_alimentos_fibra.webp', 'Alimentos fuente de fibra. Imagen de idornbrach, Pixabay');
                                ?></div>
            <div class="..."><?php
                                renderImage('u2t5_img_alimentos_pan.webp', 'Alimentos fuente de fibra. Imagen de manfredrichter, Pixabay');
                                ?></div>
        </div>
        <p>Para complementar, investiga las funciones que tienen los polisacáridos en las diferentes fuentes de
            información que a continuación se te presentan y toma notas de lo que consideres importante.</p>
        <div class="max-w-2xl mx-auto m-10">
            <p class="text-center rounded-lg shadow-md p-2 bg-emerald-700"><a class=" text-gray-50" href="https://e1.portalacademico.cch.unam.mx/alumno/quimica2/unidad2/carbohidratos/polisacaridos" target="_blank">Polisacáridos</a></p>
        </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Modelos moleculares</h3>
    <p>Estos modelos son de gran utilidad cuando deseamos analizar la estructura química de cualquier molécula, están diseñados para diferenciar los átomos que integran un compuesto y la multiplicidad del enlace. Andrés Raviolo define a un modelo como una representación simplificada de un hecho, objeto, fenómeno o proceso, que concentra su atención en aspectos específicos del mismo, y tiene las funciones de describir, explicar y predecir. Dentro de las características de un modelo molecular, encontramos que es una construcción imaginaria, puede presentarse en tercera dimensión y es simplificada. La química hace uso de modelos para explicar los fenómenos que ocurren en la naturaleza, porque éstos involucran objetos de estudio que no pueden ser medidos ni observados de manera directa, es por ello que surgen los modelos como una nueva herramienta de investigación. </p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_moleculas.webp');
        ?>
    </div>
    <p>Los modelos moleculares, generalmente, consisten en esferas de colores para identificar el tipo de átomos que integran la cadena hidrocarbonada. Damos un ejemplo de un macronutrimento: el ácido oleico.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_acido_oleico.webp', 'Ácido oleico.');
        ?>
    </div>
    <p>En la imagen podemos observar la estructura lineal del ácido oleico y abajo una representación utilizando el modelo molecular. Los oxígenos que forman parte del grupo carboxilo se representan con esferas rojas, de esta manera, podemos identificar con facilidad al grupo funcional.</p>
    <p>En el siguiente ejemplo representamos a la glucosa:</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_modelo_molecular_glucosa.webp', 'Modelo molecular de la Glucosa');
        ?>
    </div>
    <p>Las esferas rojas representan a los oxígenos, que forman parte de los grupos funcionales OH (alcohol) y <span class="font-serif">CHO</span> (aldehído).</p>
    <p>El siguiente modelo molecular representa a la tirosina, aminoácido presente en las cadenas de muchas proteínas. </p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u2t3_img_modelo_tirosina.webp', 'Modelo molecular de la Tirosina.');
        ?>
    </div>
    <p class="mt-8 text-cyan-700">En este modelo molecular observamos una esfera de color azul, que representa al grupo funcional amino (<span class="font-serif">NH<sub>2</sub></span>) de la tirosina.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>El párrafo</h2>

    <p>El <strong>párrafo</strong> es una unidad de discurso que expresa una idea o un argumento o reproduce las palabras de un hablante. Se identifica por su disposición, es decir, porque inicia con mayúscula y se separa con un punto y aparte, tiene una extensión de más o menos ocho líneas, o tres o cuatro frases. Además, en la mayoría de los casos se usa sangría para distinguirlo.</p>

    <p>Sin embargo, un párrafo es más que eso, pues un párrafo contiene una <strong>idea central</strong> y a ésta se unen otras de carácter secundario, las cuales se distribuyen ordenadamente para que el texto resulte claro. Asimismo, cada párrafo es una unidad significativa que trata un tema, o subtema o algún aspecto particular con relación al resto del texto. También suele definirse como un conjunto de frases relacionadas que desarrollan un único tema. Incluso, su correcta distribución en el texto nos indica una fácil lectura. En los ejemplos de abajo podemos observar que el <strong>B</strong> es la forma correcta de disposición del párrafo, según los gráficos tomados de Daniel Cassany.</p>
    <div class="flex">
        <div class="w-2/3 mx-auto">
            <?php
            renderImage('tlriid2-u2t2p2img1.webp');
            ?>
        </div>
    </div>

    <h3>Tipos de párrafo</h3>

    <p>Los párrafos suelen clasificarse por tipos y entre los más frecuentes tenemos los siguientes:</p>

    <!-- Párrafo narrativo -->
    <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
        <div class="bg-sky-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Párrafo narrativo o cronológico</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Está constituido por una secuencia de afirmaciones-informaciones que no requieren garantía. Es típico de un periódico o de un cuento en el que se exponen hechos en orden cronológico. Por ejemplo:</p>
            <div class="mt-4 border-l-4 border-sky-300 bg-white rounded-r-lg px-5 py-4">
                <blockquote class="font-serif not-italic text-gray-800">
                    <p><span class="underline">Ahora</span> que el obispo de la diócesis de Renada, a la que pertenece esta mi querida aldea de Valverde de Lucerna, anda, a lo que se dice, promoviendo el proceso para la beatificación de nuestro Don Manuel, o, mejor, san Manuel Bueno, <span class="underline">que fue</span> en esta párroco, quiero dejar aquí consignado, a modo de confesión y sólo Dios sabe, que no yo, con qué destino, todo lo que sé y recuerdo de aquel varón matriarcal que llenó toda la más entrañada vida de mi alma, que <span class="underline">fue</span> mi verdadero padre espiritual, el padre de mi espíritu, del mío, el de Ángela Carballino.</p>
                </blockquote>
                <p class="text-right text-sm text-gray-500 mt-2 font-semibold font-serif">Miguel de Unamuno</p>
            </div>
        </div>
    </div>

    <!-- Párrafo descriptivo -->
    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
        <div class="bg-violet-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Párrafo descriptivo o espacial</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Presenta objetos, lugares y personas. En todos los escritos aparece cuando se describen personajes, ambientes u objetos para comprometer al lector en la historia, o convencerlo de la tesis, o hacerle la lectura más concreta y viva. Por ejemplo:</p>
            <div class="mt-4 border-l-4 border-violet-300 bg-white rounded-r-lg px-5 py-4">
                <blockquote class="font-serif not-italic text-gray-800">
                    <p>Resaltó que si bien la mentira puede ser en ocasiones <span class="underline">socialmente útil</span>, es un comportamiento frecuente y que en el mitómano se caracteriza por <span class="underline">recurrir a ella continuamente sin valorar las consecuencias, con tal de maquillar una realidad que considera inaceptable, urdiendo todo tipo de sistemas, que suelen parecer delirantes.</span><sup>1</sup></p>
                </blockquote>
            </div>
        </div>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>1</sup><em>La Jornada,</em> 20 de febrero de 2007.</p>
    </div>

    <!-- Párrafo expositivo-argumentativo -->
    <div class="border-l-4 border-amber-500 bg-amber-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
        <div class="bg-amber-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">Párrafo expositivo-argumentativo</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Presenta una tesis y los datos y las observaciones que pueden ser útiles para convencer al lector de su validez. Por ejemplo:</p>
            <div class="mt-4 border-l-4 border-amber-300 bg-white rounded-r-lg px-5 py-4">
                <blockquote class="font-serif not-italic text-gray-800">
                    <p>Aguilar fue acusado de pederastia, <span class="underline">y en lugar de someterlo al juicio eclesiástico</span> por tan nefasto crimen, o de entregarlo a las autoridades civiles por ese delito, fue cambiado de lugares (de diócesis, se dice en el lenguaje de la Iglesia católica) y finalmente enviado al extranjero, a Los Ángeles, California, con la evidente intención de evitar que pudiera ser juzgado por las autoridades mexicanas.<sup>2</sup></p>
                </blockquote>
            </div>
        </div>
        <p class="text-left text-xs text-gray-500 mt-6"><sup>2</sup><em>Octavio Rodríguez Araujo, en <em>La Jornada,</em> 28 diciembre 2006.</p>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lee cada afirmación y selecciona la respuesta correcta.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t2a4', "El párrafo", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
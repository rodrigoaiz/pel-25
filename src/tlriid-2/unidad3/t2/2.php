<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Las Macrorreglas</h2>

    <p>Las <strong>macrorreglas</strong> según van Dijk, son operaciones cognitivas que permiten transformar una serie de palabras, frases u oraciones en una <strong>macroestructura</strong>. En el caso de la elaboración de un texto, las macrorreglas son, entonces, las reglas que permiten componer un resumen a partir de otro texto más largo.</p>

    <!-- Sección I -->
    <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden mb-6 mt-8">
        <div class="bg-sky-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">I. Reglas de <span class="uppercase">Anulación</span> o supresión <span class="font-normal">(a, b, c)</span></p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Se aplican cuando hay ideas principales <strong>explícitas</strong> compendiosas en el texto (se dejan al suprimir los demás datos).</p>

            <!-- Regla 1 -->
            <div class="mt-5">
                <p><strong>1. Omitir (omisión):</strong> es suprimir los datos casuales no implicados lógicamente en los demás, no esenciales para el desarrollo lógico del texto. Luego de suprimirse, <em>no</em> son recuperables.</p>
                <p class="mt-2 text-sm font-semibold text-sky-700">Por ejemplo:</p>
                <div class="mt-2 overflow-hidden rounded-lg border border-sky-200">
                    <div class="grid grid-cols-2 bg-sky-50 text-sm">
                        <div class="px-5 py-3 border-r border-sky-200">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto original</p>
                            <p class="text-gray-700">La profesora se fue en su carro, el cual es verde.</p>
                        </div>
                        <div class="px-5 py-3">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto reducido</p>
                            <p class="text-gray-700">La profesora se fue en su carro verde.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regla 2 -->
            <div class="mt-5">
                <p><strong>2. Seleccionar (selección):</strong> es suprimir los datos que sí están implicados en los demás, que son más o menos inherentes a un concepto. Luego de suprimirse, son recuperables (al menos parcialmente).</p>
                <p class="mt-2 text-sm font-semibold text-sky-700">Por ejemplo:</p>
                <div class="mt-2 overflow-hidden rounded-lg border border-sky-200">
                    <div class="grid grid-cols-2 bg-sky-50 text-sm">
                        <div class="px-5 py-3 border-r border-sky-200">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto original</p>
                            <p class="text-gray-700">La profesora fue a España por vía aérea.</p>
                        </div>
                        <div class="px-5 py-3">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto reducido</p>
                            <p class="text-gray-700">La profesora fue a España en avión.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección II -->
    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
        <div class="bg-violet-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">II. Reglas de sustitución o reelaboración <span class="font-normal">(a, b, c, d)</span></p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>Se aplican cuando <strong>no</strong> hay ideas principales explícitas en el texto (se deben componer para sustituir los demás datos).</p>

            <!-- Regla 3 -->
            <div class="mt-5">
                <p><strong>3. Generalizar (generalización):</strong> es sustituir datos no implicados entre sí, por un superconcepto o <em>hipernónimo</em> que los englobe. Luego de sustituirse, <em>no</em> son recuperables exactamente.</p>
                <p class="mt-2 text-sm font-semibold text-violet-700">Por ejemplo:</p>
                <div class="mt-2 overflow-hidden rounded-lg border border-violet-200">
                    <div class="grid grid-cols-2 bg-violet-50 text-sm">
                        <div class="px-5 py-3 border-r border-violet-200">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto original</p>
                            <p class="text-gray-700">En el salón hay pupitres, mesas, sillas, una papelera, un estante y un escritorio.</p>
                        </div>
                        <div class="px-5 py-3">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto reducido</p>
                            <p class="text-gray-700">En el salón hay elementos propios del lugar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regla 4 -->
            <div class="mt-5">
                <p><strong>4. Construir o integrar (construcción o integración):</strong> es sustituir datos implicados entre sí o inherentes al asunto, por un superconcepto o una macrosituación que los englobe. Luego de sustituirse, son recuperables (al menos, parcialmente).</p>
                <p class="mt-2 text-sm font-semibold text-violet-700">Por ejemplo:</p>
                <div class="mt-2 overflow-hidden rounded-lg border border-violet-200">
                    <div class="grid grid-cols-2 bg-violet-50 text-sm">
                        <div class="px-5 py-3 border-r border-violet-200">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto original</p>
                            <p class="text-gray-700">El estudiante se levantó, pasó al frente, tomó una tiza y trazó unas letras.</p>
                        </div>
                        <div class="px-5 py-3">
                            <p class="text-gray-500 text-xs font-semibold uppercase mb-1">Texto reducido</p>
                            <p class="text-gray-700">El estudiante hizo varias cosas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Luego de haber leído acerca de las macrorreglas trata de resolver el siguiente ejercicio que te ayudará a fijar en tu memoria estos conceptos, que sin duda te serán de ayuda durante el resto del bachillerato y en tu vida profesional.</li>
        <li>Lee la definición de la tarjeta y da clic para ver el tipo de macrorregla que le corresponde.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t2a4', "Macrorreglas", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
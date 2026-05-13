<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>El resumen y la paráfrasis</h2>

    <p>El <strong>resumen</strong> y la <strong>paráfrasis</strong> se utilizan para incorporar en el escrito propio ideas de otras personas sin utilizar las palabras textuales o las mismas construcciones gramaticales. Resumir o parafrasear significa convertir el material escrito por otro en nuestras propias palabras, sin distorsionar la idea original pero sin copiar las palabras exactas del autor.</p>

    <!-- Resumen -->
    <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden mb-6 mt-8">
        <div class="bg-sky-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">El resumen</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>El resumen <strong>condensa la información esencial</strong> de un trozo escrito en un grupo de oraciones unificadas. Contiene las principales ideas de la selección original, puestas en nuestras propias palabras. Usualmente, varias oraciones pueden ser resumidas en una.</p>
        </div>
    </div>

    <!-- Paráfrasis -->
    <div class="border-l-4 border-violet-500 bg-violet-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
        <div class="bg-violet-500 px-5 py-3">
            <p class="font-bold text-white tracking-wide">La paráfrasis</p>
        </div>
        <div class="px-6 py-5 text-gray-700">
            <p>La paráfrasis expresa una idea y los detalles que la acompañan. Una buena paráfrasis debe <strong>diferenciarse notablemente del original</strong> desde el punto de vista formal, no del contenido. Para ello pueden utilizarse:</p>
            <ul class="ul-disc mt-3">
                <li>Sinónimos</li>
                <li>Alterar el orden o la construcción gramatical de las frases</li>
                <li>Cambiar verbos</li>
            </ul>
            <p class="mt-4">La mejor manera de hacerla suele ser leer el texto original, comprender perfectamente la idea, olvidarse de cómo estaba expresada y tratar de redactarla con nuestras propias palabras.</p>
            <p class="mt-4">La paráfrasis sirve para constatar que efectivamente has comprendido un texto, y la mejor prueba de ello es que eres capaz de repetir los mismos conceptos pero con tus propias palabras. La paráfrasis también es una operación textual que consiste en expresar de otro modo la misma idea que transmite un texto; puede incluir compactación de información.</p>
        </div>
    </div>
    <div class="flex justify-center mt-6">
        <div class="w-1/3">
            <?php
            renderImage('tlriid2-u3t2p3img1.webp');
            ?>
        </div>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
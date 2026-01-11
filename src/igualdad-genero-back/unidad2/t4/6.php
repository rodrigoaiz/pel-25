<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Foro: Cartilla LGBTIQ+</h2>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <p>Comprender y promover un ambiente de <strong>respeto</strong> e <strong>inclusión</strong> para todas las personas es esencial en nuestra comunidad universitaria. Para ello, es importante conocer las directrices que nos guían. A continuación, te pedimos leer la <strong>Cartilla Universitaria De Buenas Prácticas enfocadas a Poblaciones LGBTIQ+</strong>, un recurso fundamental para construir un espacio más seguro y acogedor para todos.</p>

            <a class="font-bold no-underline" href="<?php echo PATH_DOCS . 'u2t10-lectura_CartillaLGBTIQmas.pdf'; ?>" target="_blank">
                <div class="flex flex-row justify-left gap-1 mt-4">
                    <div class="text-6xl text-gray-700">Cartilla</div>
                    <div class="p-3 bg-red-600 text-white text-center text-2xl">
                        L
                    </div>
                    <div class="p-3 bg-orange-400 text-white text-center text-2xl">
                        G
                    </div>
                    <div class="p-3 bg-yellow-400 text-white text-center text-2xl">
                        B
                    </div>
                    <div class="p-3 bg-green-600 text-white text-center text-2xl">
                        T
                    </div>
                    <div class="p-3 bg-sky-500 text-white text-center text-2xl">
                        I
                    </div>
                    <div class="p-3 bg-fuchsia-600 text-white text-center text-2xl">
                        Q
                    </div>
                    <div class="p-3 bg-purple-800 text-white text-center text-2xl">
                        +
                    </div>
                </div>
            </a>
        </div>
        <div><?php
                renderImage('iga10-img05.webp');
                ?></div>
    </div>
    <p class="font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reconocer las buenas prácticas que generen una sana convivencia en sus contextos, además de proponer estrategias que propicien el respeto e interacción entre los integrantes de la comunidad.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class=" ol-number ml-32">
        <li>Realiza la <a href="<?php echo PATH_DOCS . 'u2t10-lectura_CartillaLGBTIQmas.pdf'; ?>" target="_blank">Cartilla Universitaria De Buenas Prácticas enfocadas a Poblaciones LGBTIQ+</a> y con base en ello, identifica las buenas prácticas que aplicas en tus relaciones dentro de la escuela.</li>
        <li>Una vez terminada la identificación de las buenas prácticas, analiza tus resultados y participa en el foro donde respondas a la siguiente pregunta:
            <div class="mt-4 ml-10 font-bold">¿Qué rubro de las buenas prácticas enfocadas a Poblaciones LGBTIQ+ consideras debes reforzar?
            </div>
        </li>
        <li>Coloca tus propuestas para reforzar las buenas prácticas enfocadas a Poblaciones LGBTIQ+ con tu comunidad.</li>
        <li>Comenta, por lo menos, las respuestas de una o uno de tus pares.</li>
        <li>Consulta los criterios a evaluar en la <a href="<?php echo PATH_DOCS . 'u2t10-rubrica_ForoDeDiscusionCartillaLGBTIQmas.pdf'; ?>" target="_blank">rúbrica de evaluación</a>.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a5', "Foro: Cartilla LGBTIQ+", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
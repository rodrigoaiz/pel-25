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
    <p class="font-semibold mt-4">Recurso gratuito: Miguel de Unamuno &ldquo;San Manuel Bueno, mártir&rdquo;</p>
    <div class="flex justify-center my-4">
        <a href="https://www.cch.unam.mx/sites/default/files/SanManuelBuenoMartir.pdf" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v2a2 2 0 002 2h14a2 2 0 002-2v-2M16 6l-4-4-4 4" />
            </svg>
            Descargar PDF
        </a>
    </div>

    <div class="flex flex-col md:flex-row gap-6 items-start my-6">
        <div class="md:w-1/3 flex justify-center">
            <?php
            renderImage(
                'tlriid2-u4t3p3img1.webp',
                'Mujer leyendo un libro [fotografía]. Freepik.',
                'https://www.freepik.es/foto-gratis/mujer-leyendo-libro_959790.htm',
                'Fuente: Freepik'
            );
            ?>
        </div>
        <div class="md:w-2/3">
            <h3>Actividad de lectura atenta</h3>
            <p>Ahora queremos que seas tú quien realice el análisis del tiempo y del espacio en <em>La metamorfosis</em> de Franz Kafka. Contesta mentalmente las siguientes preguntas. Para hacerlo deberás tener el texto a la mano y releer cuantas veces sea necesario. Recuerda que ya te hemos compartido la liga al texto completo en la unidad anterior.</p>

            <ol class="ol-number space-y-3 mt-4">
                <li>¿En qué espacio de la casa de los Samsa, sucede la mayoría de la historia?</li>
                <li>¿Cuáles son las tres transformaciones evidentes que suceden en este espacio?</li>
                <li>Las transformaciones de este espacio están ligadas a los cambios que se dan entre Gregorio y los miembros de su familia. Explica la relación entre el cambio del espacio y la forma en la que Gregorio es percibido por su familia.</li>
                <li>¿En cuánto tiempo transcurre la novela?</li>
                <li>El cambio afectivo de los miembros de la familia hacia Gregorio en un periodo de tiempo tan corto, nos lleva a pensar que en realidad Gregorio no era querido, sino más bien utilizado por su familia. Explica por qué.</li>
            </ol>
        </div>
    </div>

    <?php ob_start(); ?>
    <p>Para realizar este ejercicio deberás contar con imágenes que tú mismo dibujes, busques en Internet o las generes por medio de herramientas de Inteligencia Artificial. A continuación te vamos a pedir que dejes volar tu imaginación, confíes en tu capacidad creativa y te diviertas representando la habitación de Gregorio Samsa, en cada una de las tres partes que conforman <em>La metamorfosis</em>.</p>
    <p>Este ejercicio no busca que seas pintor, o que debas realizarlo de manera literal. Queremos que busques aquellos elementos que te sirvan para simbolizar los cambios que sufre la habitación de Gregorio y que simbolizan el cambio en la relación con su familia. Posteriormente, en tu cuaderno o en un documento de procesador de texto, deberás crear un <strong>collage con las tres imágenes</strong>.</p>
    <p>Una vez terminado el collage, lo subirás al foro. Resulta importante que sepas el porqué decidiste crear tu collage de la forma en que lo hiciste y lo expliques en un pequeño párrafo al momento de subirlo. También te invitamos a participar opinando sobre el trabajo de los demás, de las cosas que encuentras atractivas o de las que te parece muestran una lectura distinta a la que tú hiciste.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a3', "Foro: La habitación de Gregorio Samsa", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

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
    <h2>La metamorfosis de Franz Kafka</h2>

    <p>Ahora trabajaremos <em>La metamorfosis</em> de Franz Kafka con el enfoque mostrado anteriormente.</p>

    <div class="flex justify-center mt-6">
        <div class="w-2/3">
            <?php
            renderImage('tlriid2-u4t1p3img1.webp', 'La Metamorfosis [ilustración digital]. 2026. Generada por inteligencia artificial, Alibaba Cloud.');
            ?>
        </div>
    </div>

    <p>Tendrás que leer la novela; puedes usar este enlace para descargarla, escucharla o bien buscarla en tu biblioteca escolar.</p>

    <p class="font-semibold mt-4">Recurso gratuito: Franz Kafka &ldquo;La metamorfosis&rdquo;</p>
    <div class="flex flex-wrap justify-center gap-4 my-6">
        <a href="https://www.cch.unam.mx/sites/default/files/La_metamorfosis.pdf" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v2a2 2 0 002 2h14a2 2 0 002-2v-2M16 6l-4-4-4 4" />
            </svg>
            Versión texto (PDF)
        </a>
        <a href="https://www.youtube.com/results?search_query=la+metamorfosis+kafka+audiolibro+espa%C3%B1ol" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-3 bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z" />
            </svg>
            Versión audiolibro (YouTube)
        </a>
    </div>

    <div class="border-l-4 border-sky-500 bg-sky-50 rounded-r-lg px-6 py-5 my-6 text-gray-700">
        <p class="font-bold text-sky-700 mb-3">PIENSA (no escribas) sobre las siguientes preguntas:</p>
        <ol class="ol-number space-y-2 text-sm">
            <li>¿Qué cosa, fuera de lo común, le sucede a Gregorio Samsa cuando se despierta en la primera parte de <em>La metamorfosis</em>?</li>
            <li>¿Cómo reacciona ante lo que le sucedió?</li>
            <li>¿Qué es lo que hace su mamá, su papá y su hermana ante esta situación?</li>
            <li>¿Quién lo va a visitar? ¿Por qué lo va a visitar? ¿Por qué Gregorio quiere impedir que se vaya?</li>
            <li>¿Qué es lo que pide la cocinera ante esta nueva situación?</li>
            <li>¿Por qué se toma la decisión de vaciar el cuarto de Gregorio Samsa?</li>
            <li>¿Qué objeto desea él conservar? ¿Cuál es la importancia de esto?</li>
            <li>¿Qué es lo que le pasa a la mamá de Gregorio cuando lo ve?</li>
            <li>¿Cómo reacciona el papá cuando se entera de lo que hizo Gregorio por defender su objeto?</li>
            <li>¿Cómo es herido Gregorio?</li>
            <li>¿Por qué Gregorio se siente apenado?</li>
            <li>Estando en la soledad absoluta, Gregorio recuerda su amor platónico, ¿de quién se trata?</li>
            <li>¿Por qué crees que él nunca se atrevió a confesar su amor?</li>
            <li>¿Qué sorpresa quería dar Gregorio a su hermana en navidad?</li>
            <li>¿Por qué crees que Gregorio deja de comer?</li>
            <li>Ante lo que le sucedió a Gregorio, toda su familia se ve obligada a trabajar, ¿qué es lo que hace cada uno?</li>
            <li>Aparte de sus trabajos, ¿qué hace la familia con la casa para obtener más dinero?</li>
            <li>En la última parte de la novela, ¿cómo quedó el cuarto de Gregorio?</li>
            <li>¿Cómo muere Gregorio?</li>
            <li>Por los últimos párrafos de la novela, ¿cuál supones que será el fin de la hermana de Gregorio?</li>
        </ol>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>El objetivo de este ejercicio es que reconozcas las tres funciones (apertura, realización y cierre) en cada una de las secuencias de <em>La metamorfosis</em>.</li>
        <li>Para que realices el ejercicio correctamente, te hemos señalado qué pasa en cada una de las cinco secuencias principales, y también las hemos &ldquo;titulado&rdquo;. </li>
        <li>Deberás completar el cuadro con tus propias palabras, utilizando oraciones que resuman las funciones de cada secuencia.</li>
        <li>Usa este modelo de formato y elabora tu propio archivo de texto en el que llenes las partes que se solicitan.</li>
        <li>Posteriormente guárdalo como documento de texto o PDF y súbelo a la plataforma para que tu asesor(a) lo revise y te brinde retroalimentación.</li>
        <li>Consulta la <a href="<?php echo PATH_DOCS . 'u4t1a2-rubrica-de-narrativa.pdf'; ?>" target="_blank">rúbrica</a> de la actividad. </li>
    </ol>

    <div class="overflow-x-auto my-6 border border-gray-300 rounded-lg">
        <table class="w-full border-collapse text-sm text-gray-700">
            <tbody>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Situación<br>Inicial
                    </td>
                    <td class="px-5 py-4 space-y-3">
                        <p class="font-semibold text-gray-800">Gregorio Samsa amanece transformado en insecto.</p>
                        <p><strong>Apertura:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Realización:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Cierre:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Perturbación
                    </td>
                    <td class="px-5 py-4 space-y-3">
                        <p class="font-semibold text-gray-800">Gregorio Samsa es rechazado por su familia.</p>
                        <p><strong>Apertura:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Realización:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Cierre:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Transformación
                    </td>
                    <td class="px-5 py-4 space-y-3">
                        <p class="font-semibold text-gray-800">Gregorio Samsa y su familia buscan acostumbrarse a la transformación.</p>
                        <p><strong>Apertura:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Realización:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Cierre:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                    </td>
                </tr>
                <tr class="border-b border-gray-300">
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Resolución
                    </td>
                    <td class="px-5 py-4 space-y-3">
                        <p class="font-semibold text-gray-800">Gregorio Samsa es despojado de su humanidad.</p>
                        <p><strong>Apertura:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Realización:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Cierre:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="bg-slate-700 text-white font-bold text-center align-middle w-36 px-3 py-4 border-r border-slate-500">
                        Situación<br>Final
                    </td>
                    <td class="px-5 py-4 space-y-3">
                        <p class="font-semibold text-gray-800">Gregorio Samsa muere.</p>
                        <p><strong>Apertura:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Realización:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                        <p><strong>Cierre:</strong> <span class="text-gray-400 italic">_______________________________________________</span></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4t1a3', "Funciones de las secuencias", $ActividadContent);
    ?>
    <h3>Bibliografía</h3>
    <ul class="space-y-2 text-sm text-gray-700">
        <li>Baricco, A. (2005). <em>Seda</em>. Barcelona: Anagrama.</li>
        <li>Caballero, J. (2002, 28 de noviembre). La poética de la fatalidad. <em>El país</em>. Recuperado de http://elpais.com/diario/2002/11/28/cultura/1038438009_850215.html (enero, 2012).</li>
        <li>Garrido, A. (1996). <em>El texto narrativo</em>. Madrid: Síntesis.</li>
        <li>Gracida, M. y Martínez G. (2007). <em>El quehacer de la escritura. Propuesta didáctica para la enseñanza de la redacción en el ámbito universitario</em>. México: UNAM.</li>
        <li>Martínez, J. (2001). <em>La intertextualidad literaria</em>. Madrid: Cátedra.</li>
    </ul>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
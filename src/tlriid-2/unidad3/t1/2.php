<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Presentación</h2>

    <p>En cuanto a la redacción, te proponemos utilizar operaciones textuales, como el <strong>resumen</strong>, la <strong>paráfrasis</strong> y la <strong>cita textual</strong>, las cuales se integrarán en un texto propio que dará como resultado un trabajo escolar.</p>

    <p>Para tal efecto, hemos diseñado un manual que te permitirá utilizar algunas herramientas del programa Microsoft Word, para que las utilices en la producción de diversos textos escolares. De este modo, el trabajo escolar se considera como una incipiente investigación, con inicio, desarrollo y cierre, que podría servir de base o ejercicio para investigaciones futuras. Es precisamente en esta unidad donde formalizarás los procesos de lectura, redacción y técnicas de investigación en un trabajo escolar, que presentarás en clase. Asimismo, para concluir esta sección, leeremos la novela <em>Metamorfosis</em> de Franz Kafka. Puedes obtener el texto a partir de la siguiente liga:</p>


    <div class="flex justify-center mt-6">
        <div class="w-2/3">
            <?php
            renderImage('tlriid2-u3t1p2img1.webp', 'Metamorfosis', 'https://buzos.com.mx/noticia/la-metamorfosis-un-retrato-social', 'Buzos de la noticia (febrero, 2023)');
            ?>
        </div>
    </div>

    <div class="flex justify-center my-6">
        <a href="https://www.cch.unam.mx/sites/default/files/La_metamorfosis.pdf" target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center gap-3 bg-sky-600 hover:bg-sky-700 text-white font-semibold px-6 py-3 rounded-lg shadow transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17v2a2 2 0 002 2h14a2 2 0 002-2v-2M16 6l-4-4-4 4" />
            </svg>
            La metamorfosis de Franz Kafka (PDF)
        </a>
    </div>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
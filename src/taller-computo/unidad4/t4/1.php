<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Publicación de archivos Multimedia</h3>
    <p>Es un gusto iniciar contigo esta nueva lección de aprendizaje <span class="text-pink-600 font-bold">"Difunde, publica o comparte archivos multimedia en Internet"</span>, en esta última lección, a través de diferentes Sitios de publicación como; Repositorios de imagen, de audio y de video, así como de un Blog y una Página web, comparten en común los archivos multimedia realizados durante la unidad, para ello efectuarán diferentes actividades.</p>
    <div class="max-w-3xl mx-auto my-8">
        <?php renderImage('u4_t4_vectorjuice.webp', 'Imagen de vectorjuice.', 'https://www.freepik.com/free-vector/radio-advertising-illustration_10780451.htm', 'Freepik.', 'justify-center') ?>
    </div>
    <p class="text-center"><em>Las actividades que realices sean las idóneas para tu formación.</em></p>
    <p>Para ello a continuación te presento la temática que utilizaremos para llevar a cabo tu aprendizaje.</p>
    <div class="max-w-2xl my-5 mx-auto border border-primary px-5 py-2">
        <h4 class="my-0">Temática:</h4>
        <ul class="ul-disc">
            <li>Sitios de publicación:</li>
            <ul class="circle">
                <li>Repositorio de imagen, audio y video.</li>
                <li>Blog.</li>
                <li>Página web.</li>
            </ul>
        </ul>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

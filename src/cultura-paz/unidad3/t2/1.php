<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Lectura indispensable</h2>
    <p>Para empezar, lee el siguiente texto.</p>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-3 col-start-2 p-4 bg-linear-to-bl from-violet-500 to-fuchsia-500">
            <?php
            renderImage('lectura4.webp');
            ?>
            <div class="text-center">
                <a href="<?php echo PATH_DOCS . 'unidad3-resolucion-pacifica-de-conflictos.pdf'; ?>" target="_blank" class="text-white text-lg">Resolución pacífica de conflictos: comprender para transformar.</a>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

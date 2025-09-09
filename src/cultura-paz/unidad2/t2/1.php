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
    <p>Te pedimos que leas el siguiente texto.</p>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-3 col-start-2 p-4 bg-linear-to-t from-sky-500 to-indigo-500">
            <?php
            renderImage('lectura3.webp');
            ?>
            <div class="text-center">
                <a href="<?php echo PATH_DOCS . 'unidad2-que-es-cultura-de-la-paz.pdf'; ?>" target="_blank" class="text-white text-lg">Cultura de paz: comprenderla para construirla.</a>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

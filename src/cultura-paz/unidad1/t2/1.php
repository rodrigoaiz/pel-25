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
    <p>A continuación, te pedimos que leas el siguiente texto, el cual incluye todos los conceptos que se revisarán en la unidad.</p>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-3 col-start-2 p-4 bg-linear-to-r from-cyan-500 to-blue-500">
            <?php
            renderImage('lectura2.webp');
            ?>
            <div class="text-center">
                <a href="<?php echo PATH_DOCS . 'unidad1-identidad-y-empatia.pdf'; ?>" target="_blank" class="text-white text-lg">Identidad y empatía: claves para el desarrollo personal y la convivencia.</a>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

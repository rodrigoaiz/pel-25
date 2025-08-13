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
    <p>A continuación se muestra una breve lectura, es muy importante que la revises con atención y tomes notas ya que más adelante te serán de mucha utilidad.</p>
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-3 col-start-2 p-2 bg-linear-65 from-purple-500 to-pink-500">
            <?php
            renderImage('lectura1.webp');
            ?>
            <div class="text-center">
                <a href="<?php echo PATH_DOCS . 'unidad4-derechos-humanos-justicia-e-inclusion.pdf'; ?>" target="_blank" class="text-white text-lg">Derechos humanos, justicia e inclusión</a>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
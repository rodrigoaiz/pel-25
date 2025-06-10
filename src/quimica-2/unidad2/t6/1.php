<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenida a la lección 6</h2>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('xyKg46_pgBk', 'Bienvenida a la lección 6.');
        ?>
    </div>
    <p class="mt-4">Hola, bienvenidos a la lección 6. En esta ocasión revisaremos las reacciones de oxidación en los alimentos y el aporte calórico que nos proveen al consumirlos. Esperamos que disfrutes esta lección y te deseamos mucho éxito en las actividades.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
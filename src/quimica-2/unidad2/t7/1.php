<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenida a la lección 7</h2>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('Mbu5oL7sZEM', 'Bienvenida a la lección 7.');
        ?>
    </div>
    <p class="mt-4">Hola, bienvenidos a esta nueva lección. En esta ocasión revisaremos algunos aspectos básicos sobre los medicamentos, para ello lo primero que haremos será abordar algunas definiciones con la finalidad de manejar adecuadamente algunos conceptos básicos que son muy comunes de confundir.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
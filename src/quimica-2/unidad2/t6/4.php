<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Cálculo de aporte calórico en alimentos</h2>
    <p>Ingresa a la Unidad de apoyo para el aprendizaje (UAPA) Contenido nutricional de los alimentos.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u2t6_banner_contenido_nutricional_alimentos.webp');
        ?>
    </div>
    <div class="max-w-2xl mx-auto m-10">
            <p class="text-center text-lg rounded-lg shadow-md p-2 bg-rose-600"><a class=" text-gray-50" href="https://uapas2.bunam.unam.mx/ciencias/contenido_nutricional_alimentos/" target="_blank">Contenido nutricional de los alimentos</a></p>
        </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Modelo de Bohr</h3>
    <p><span class="font-bold">Observa las siguientes imágenes y contesta: ¿son similares?</span></p>
</section>
<div class="grid grid-cols-2 md:grid-cols-1 xl:grid-cols-2 gap-5 px-5 my-3 bg-amarillocla">
    <article class="bg-gray-100 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1t3_sistema_solar.webp', 'Sistema Solar Imagen de Wikilmages,', 'https://pixabay.com/es/illustrations/sistema-solar-planetas-11111/', 'Pixabay');
                ?>
            </footer>
    </article>
    <article class="bg-gray-100 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1t3_modelo_bohr.webp', 'Modelo de Bohr Imagen de E_ScienceLearning de,', 'https://pixabay.com/es/illustrations/at%C3%B3mico-modelo-bohr-qu%C3%ADmica-4993662/', 'Pixabay');
                ?>
            </footer>
    </article>
</div>
<section>
    <p>Para complementar tus conocimientos acerca de la clasificación de los compuestos inorgánicos observa los siguientes videos que pueden ayudarte a ampliar la información.</p>
    <div class="lg:grid grid-cols-2 gap-5">
        <?php
        renderVideoIframe('ndSDbnkaaV8', 'Clasificación de los compuestos inorgánicos.');
        renderVideoIframe('WnVCaAKCLHo', 'Compuestos inorgánicos.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
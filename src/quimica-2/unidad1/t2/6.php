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
    <h3>Compuestos ternarios</h3>
    <p><span class="font-bold">Hidróxidos:</span> son compuestos resultantes de la unión de un elemento metálico
        con un grupo hidroxilo (OH–). Son comúnmente llamados “bases” o “álcalis”. Por ejemplo: hidróxido de
        sodio (NaOH), hidróxido de germanio (IV) (Ge(OH)4).</p>
    <p><span class="font-bold">Oxiácidos:</span> son compuestos ácidos que surgen de la reacción entre un
        anhídrido (óxido no metálico) y agua. Su fórmula siempre depende de un patrón HaAbOc, donde A es un
        metal de transición o un no metal, y a, b, y c son los subíndices que indican la cantidad de cada átomo.
        Por ejemplo: ácido sulfúrico (H2SO4), ácido carbónico (H2CO3).</p>
    <p><span class="font-bold">Sales ternarias:</span> son compuestos formados por conjuntos de átomos cargados
        eléctricamente, ya sean cationes (+) o aniones (-). Estas sales están compuestas por solo tres tipos de
        átomos. Por ejemplo: nitrato de litio (LiNO3) y sulfato de cobre (II) (CuSO4).</p>
</section>
<div class="grid grid-cols-3 md:grid-cols-1 xl:grid-cols-3 gap-4 px-5 my-3 bg-amarillocla">
    <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1_t2_acido_sulfurico.webp', 'Imagen de Pablo Aradura.', 'https://upload.wikimedia.org/wikipedia/commons/2/29/%C3%81cido_Sulf%C3%BArico.png', 'Wikimedia Commons');
                ?>
            </footer>
    </article>
    <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1_t2_schwefels.webp', 'Imagen de NEUROtiker.', 'https://upload.wikimedia.org/wikipedia/commons/e/e5/Schwefels%C3%A4ure3.svg', 'Wikimedia Commons');
                ?>
            </footer>
    </article>
    <article class="bg-gray-200 shadow-xl px-4 py-2 col-span-5 md:col-span-2 lg:col-span-1">
        <div class="flex flex-col justify-between min-h-full">
            <footer class="max-w-1/2 mt-5 mx-auto self-end">
                <?php
                renderImage('u1_t2_cuso45h2o.webp', 'Imagen de Superdvd.', 'https://commons.wikimedia.org/wiki/File:CuSO4.5H2O.jpg', 'Wikimedia Commons');
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
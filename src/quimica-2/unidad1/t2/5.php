<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Accordion.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Compuestos binarios</h3>
    <p><span class="font-bold">Óxidos:</span> son compuestos formados por la unión del oxígeno (O2) con algún
        elemento metálico, éstos son llamados óxidos básicos o por la unión del oxígeno con un elemento no
        metálico y éstos son llamados óxidos ácidos.Por ejemplo: óxido de hierro (II) u óxido ferroso (FeO), y
        óxido de cloro (II) (ClO).</p>
    <p><span class="font-bold">Sales binaria:</span> son compuestos formados por conjuntos de átomos cargados
        eléctricamente, ya sean cationes (+) o aniones (-). Estas sales están compuestas por solo dos tipos de
        átomos. Por ejemplo: cloruro de calcio (CaCl2), bromuro de hierro (III) o bromuro férrico (FeBr3).</p>
    <p><span class="font-bold">Hidrácidos o ácidos binarios:</span> son ácidos binarios compuestos por hidrógeno
        y un no metal diferente del oxígeno. Por ejemplo: ácido clorhídrico (HCl), ácido fluorhídrico (HF) o
        ácido selenhídrico (H2Se).</p>
    <div class="columns-2 gap-4">
        <?php
        renderImage('u1t2_clururo_sodio.webp', 'El cloruro de sodio NaCl (sal binaria)');
        ?>
        <?php
        renderImage('u1t2_estructura_atomica.webp', 'Estructura atómica del NaCl');
        ?>
    </div>
    <p>A continuación, observa este video en el que podrás entender más acerca de los compuestos binarios y
        ternarios.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('RS0BhWTbElo', 'Compuestos binarios y ternarios');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
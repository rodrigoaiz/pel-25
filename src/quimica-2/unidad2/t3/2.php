<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Fórmulas estructurales de macronutrimentos</h3>
    <p>Los macronutrimentos presentes en los alimentos son: carbohidratos, lípidos y proteínas. Estas últimas biomoléculas son polímeros naturales, por lo tanto, su análisis estructural debe realizarse desde la perspectiva de las unidades funcionales que las conforman, es decir, los aminoácidos, o bien, desde una fracción corta de la proteína, que nos permita diferenciar los átomos que la integran. Para el caso de carbohidratos y lípidos, si podemos apreciar por completo su análisis estructural.</
    <p>En la siguiente imagen observamos un ejemplo de la estructura química de los 3 macronutrimentos antes mencionados.</p>
    <div class="w-lg mx-auto">
        <?php
        renderImage('u2t3_img_macronutrientes.webp', 'Macronutrimentos.');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
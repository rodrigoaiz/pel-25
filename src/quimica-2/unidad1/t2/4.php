<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Clasificación de los compuestos inorgánicos en óxidos, ácidos, hidróxidos y sales</h3>
    <p>Como pudiste apreciar, en el suelo encontramos una gran variedad de compuestos químicos, lo cual nos da
        la oportunidad para ampliar nuestro aprendizaje sobre los compuestos químicos y cómo se nombran.</p>
    <p>A diferencia de los compuestos orgánicos, los compuestos inorgánicos son <strong>aquellos cuya
            composición no está basada principalmente en el carbono y el hidrógeno</strong>, sino que involucra
        diversos tipos de elementos, casi todos los conocidos de la tabla periódica.</p>
    <p>Los compuestos inorgánicos presentan gran variedad de estructuras, pero pueden ser clasificados de
        acuerdo al número de elementos que intervienen en la formación de cada compuesto, clasificando así en
        compuestos <strong>binarios y ternarios</strong>.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u1t2_img_adn_ciencia.webp', 'Imagen de Hirowumi.', 'https://pixabay.com/es/photos/ciencia-molecular-museo-neto-1480284/', 'Pixabay');
        ?>
    </div>
    <p><strong><em>Compuestos binarios:</em></strong> son aquellos que se componen únicamente de dos elementos
        químicos. Entre ellos podemos encontrar los óxidos, sales binarias y los ácidos binarios o hidrácidos.
    </p>
    <p><strong><em>Compuestos ternarios:</em></strong> son compuestos en los que se involucran tres elementos
        químicos. Entre ellos podemos mencionar a los hidróxidos, oxiácidos y sales ternarias.</p>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
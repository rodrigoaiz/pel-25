<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Un breve repaso de Nomenclatura sistemática</h3>
    <p>Consiste en la utilización de prefijos numerales griegos para indicar el nº de átomos de cada elemento
        presente en la fórmula, se nombra de derecha a izquierda.</p>
    <p>Los prefijos que se utilizan son: mono (1), di (2), tri (3), tetra (4), penta (5), hexa (6), hepta (7), …
        (El prefijo mono puede omitirse).</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u1_t2_nomenclatura_sistematica_inorg.webp', 'Imagen de Hirowumi.', 'https://pixabay.com/es/photos/ciencia-molecular-museo-neto-1480284/', 'Pixabay');
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
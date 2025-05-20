<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

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
    <div class="w-md mx-auto">
        <?php
        renderImage('u1_t2_tabla_prefijos.webp', 'Tabla de Prefijos');
        ?>
    </div>
    <div class="max-w-2xl mx-auto mt-10">
        <?php
        renderImage('u1_t2_nomenclatura_sistematica_inorg.webp', 'Ejemplos nomenclatura sistemática');
        ?>
    </div>
    <p>Revisa el siguiente video para aprender más sobre la nomenclatura sistemática de los compuestos inorgánicos:</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('qQuzUVfnJ1M', 'Nomenclatura sistemática de óxidos no metálicos');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
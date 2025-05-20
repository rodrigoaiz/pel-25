<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Bienvenida a la Lección 5</h3>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('Z_LLob5D3Gk', 'Bienvenida a la lección 5.');
        ?>
    </div>
    <p>Hola, bienvenidos a lección 5 de la Unidad 1, de título “Obtención de sales”; en esta lección se
        revisarán los temas de reacción química, enfocándose en las reacciones oxido reducción, aprenderás a
        identificar y asignar los números de oxidación en una reacción química y finalmente se revisarán las
        reacciones de síntesis, desplazamiento simple y doble desplazamiento.</p>
    
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
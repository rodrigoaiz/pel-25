<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Bienvenida a la Lección 3</h3>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('VnCwTNaaaCA', 'Bienvenida a la lección 3.');
        ?>
    </div>
    <p>En esta lección revisarás los aprendizajes relacionados con conceptos de estructura de la materia al estudiar el modelo atómico de Bohr y la representación de un átomo neutro, de cationes y aniones mediante el modelo de Bohr. Lo cual te servirá para comprender que la formación de un catión implica pérdida de electrones y la formación de un anión ganancia de electrones. Lo cual te servirá para entender la presencia de iones monoatómicos y poliatómicos en el suelo.</p>
</section>
    <?php
    $content = ob_get_clean();
    renderTemplatePage($menuAsignaturaPath, $content);
    ?>
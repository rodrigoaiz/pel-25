<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Bienvenida a la Lección 4</h3>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('9GbUZgKhc6s', 'Bienvenida a la lección 4.');
        ?>
    </div>
    <p>Bienvenidos a la lección 4 de la Unidad 1, “Enlace iónico”, donde revisarás contenido con el que aprenderás qué es el enlace iónico, además abordaremos los conceptos de ácido-base y las características de este tipo de compuestos. Esperamos que te sea de gran utilidad y obtengas un aprovechamiento muy fructuoso.</p>
</section>
    <?php
    $content = ob_get_clean();
    renderTemplatePage($menuAsignaturaPath, $content);
    ?>
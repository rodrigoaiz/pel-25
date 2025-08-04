<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Emociones</h2>
    <p>Las <strong>emociones</strong> son parte fundamental de la experiencia humana, influyendo en nuestras decisiones, relaciones y <strong>bienestar general.</strong> Desde la <strong>alegría y la tristeza</strong> hasta <strong>el miedo y la ira,</strong> cada emoción cumple un papel esencial en nuestra vida diaria. Este tema tiene como objetivo explorar la naturaleza de las emociones, su <strong>impacto en nuestro comportamiento</strong> y cómo podemos gestionarlas de <strong>manera efectiva.</strong> A través de una serie de actividades, buscaremos entender no solo las bases biológicas y psicológicas de las emociones, sino también su expresión cultural y social. Para ello revisa la siguiente infografía:
    </p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u1t2_infografia_emociones.webp');
        ?>
    </div>
    
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Protagonista o testigo</h2>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('tlriid2-u1t1p7img1.webp', 'Livro de artista, criado por Hugo Forte', 'https://commons.wikimedia.org/wiki/File:Fortes_Hugo_Manual_de_Voo.jpg', 'Wikimedia Commons');
        ?>
    </div>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lee con cuidado los siguientes relatos, identifica en ellos las marcas sean la voz narrativa. Estas marcas pueden ser pronombres, adjetivos posesivos y conjugaciones verbales. Luego da clic para ver el tipo de narrador, si se trata de un narrador en primera, segunda o tercera persona:</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u1t1a3', "Protagonista o testigo", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
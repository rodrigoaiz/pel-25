<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

    <h2>Pon a prueba tus conocimientos</h2>

    <?php
    renderImagePleca('u1_t2_neck_instrument.webp', 'Imagen de Cmdrjameson.', 'https://commons.wikimedia.org/wiki/File:Truss_rod_patent.png', 'Wikimedia Commons.');
    ?>

    <?php ob_start(); ?>
        <p>Resuelve el siguiente reto.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u1a7', "Trinomio y fórmula general", $ActividadContent);
        ?>

    <?php ob_start(); ?>
        <p>Finalmente te invitamos a realizar el examen de evaluación final del esta unidad.</p>
        <?php
        $ActividadContent = ob_get_clean();
        renderActividad('u1a8', "Cuestionario final unidad 1", $ActividadContent);
        ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
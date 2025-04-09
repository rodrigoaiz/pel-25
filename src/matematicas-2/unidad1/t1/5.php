<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>

    <h3>Pon a Prueba tus conocimientos</h3>
        <p>A lo largo de esta lección pudimos identificar que a partir de problemáticas distintas pueden generarse
                ecuaciones cuadráticas; así como algunas de sus soluciones en diferentes formas (\(x^2 =b\); \(ax^2 =b\);
                \(ax^2 +b=c\); \(ax^2 +b=0\) \(a(x+b)^2 +c=d\); \((x+b)(x+c)=0\)).</p>

    <?php ob_start(); ?>
    <p>Ahora es momento de que pongas a prueba estos conocimientos y resuelvas los siguientes ejercicios.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a4', "Ecuaciones cuadráticas básicas", $ActividadContent);
    ?>

<?php ob_start(); ?>
    <p>Finalmente: Resuelve los siguientes ejercicios. En todos los casos deberás desarrollar el proceso de solución y explicarlo, no se aceptará solamente la solución del problema. Una vez que lo tengas resuelto súbelo a la plataforma.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a5', "Resolución de problemas con ecuaciones cuadráticas", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
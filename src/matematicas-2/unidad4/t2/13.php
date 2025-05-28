<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
<h3>Recíproco del teorema de Pitágoras</h3>
            <p>De manera similar a lo que se comentó respecto al Teorema de Thales, se tiene el recíproco del Teorema de
                Pitágoras.</p>
            <p>Responde: ¿Cómo escribirías el recíproco de este Teorema?</p>
            <p>Tomamos la tesis y la reescribimos como hipótesis: Si la suma de los cuadrados de los dos lados más
                cortos de un triángulo es igual al cuadrado de la medida del tercero…</p>
            <p>Tomamos la hipótesis y la reescribimos como tesis: … entonces el triángulo es un triángulo rectángulo.
            </p>
            <p>De modo que el recíproco del Teorema de Pitágoras diría: </p>
            <p>Si la suma de los cuadrados de los dos lados más cortos de un triángulo es igual al cuadrado de la medida
                del tercero entonces el triángulo es un triángulo rectángulo.</p>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
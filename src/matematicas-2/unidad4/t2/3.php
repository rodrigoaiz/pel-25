<?php
include '../../../config.php';
$include_latex = true;
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
    <h2>Figuras semejantes</h2>
    <p>Ya que conoces el concepto de semejanza, realiza el siguiente ejercicio:</p>
    <p>*Con base en las medidas proporcionadas, comprueba que las figuras siguientes son semejantes y obtén el
                valor de la constante de proporcionalidad.</p>
        <?php
            renderImage('u4t2/u4t2_img_figuras_semejantes.webp', 'Figuras semejantes', '', '');
        ?>
            <p>Para comprobar que las dos figuras son semejantes, una de las cosas que hay que comprobar es la
                proporcionalidad de los segmentos correspondientes. Si recuerdas, el concepto de “razón” implica la
                comparación de cantidades mediante una división. Por ejemplo, la razón entre las alturas de la puerta
                sería \(\frac{3}{2}\)</p>
            <p>Obtenemos otra razón, esta vez, para la medida de las ventanas: \(\frac{2}{1.33}\)</p>
            <p>Y observa que ambas razones son iguales (ya sea simplificando la fracción u obteniendo su valor decimal).
                Como consecuencia de esto, se dice que hay proporción.</p>
            <p>Puertas: \(\frac{3}{2}=1.5\)</p>
            <p>Ventanas: \(\frac{2}{1.33}=1.5\)</p>
            <p>Observa que se compararon “segmentos correspondientes” y que se colocaron los datos de la casa más grande
                en el numerador, lo cual debe mantenerse para todas las razones.</p>
            <p>Puedes comprobar que todas las razones entre segmentos correspondientes resultan, en decimal, 1.5</p>
            <p>Como este valor es constante (siempre igual), significa que hay proporción y es la <strong>constante de
                    proporcionalidad</strong> (\(k\)).</p>

<?php ob_start(); ?>
    <p>Es tu turno de practicar realizando lo siguiente.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a12', "Semejanza", $ActividadContent);
?>

</section>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
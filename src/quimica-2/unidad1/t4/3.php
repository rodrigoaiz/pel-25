<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Enlace iónico</h3>
    <p>Un enlace iónico se forma cuando se transfiere uno o más electrones de valencia de un átomo a otro (del
        menos electronegativo al más electronegativo), creando así iones positivos y negativos llamados catión y
        anión. </p>
    <p>También podemos decir que existe un enlace iónico cuando la diferencia de electronegatividades entre los
        dos átomos participantes es mayor de 1.7</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u1t4_enlace_tabla.webp', 'Tipos de enlace');
        ?>
    </div>
    <p>Este tipo de enlace se forma entre átomos de elementos metálicos y no metálicos, es decir, el enlace se
        establece cuando átomos de elementos poco electronegativos se enlazan con átomos de elementos muy
        electronegativos, lo cual sucede con elementos de los extremos izquierdos de la tabla periódica (metales
        alcalinos y metales alcalino térreos), con elementos del lado derecho que pertenecen a los no metales
        (halógenos y oxígeno).</p>
    <p>El elemento menos electronegativo que corresponde a los metales cede sus electrones a los elementos más
        electronegativos que son los no metales.</p>
</section>
<?php
renderImagePleca('u1t4_tabla_periodica.webp', 'Tabla periódica');
?>
<section>
    <p>Observa el video que se presenta a continuación con el que ahondarás más acerca del enlace iónico.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('MtfUnu9upJA', 'Enlace iónico');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Estructuras químicas de macronutrimentos</h3>
    <p>Algunos macronutrimentos, como carbohidratos y lípidos, presentan estructuras químicas más simples que las estructuras de proteínas, las cuales están conformadas por largas cadenas de aminoácidos. Por lo general, la unión entre los átomos de macronutrimentos es un enlace covalente. Observa la siguiente estructura química:</p>
    <div class="w-md mx-auto">
        <?php
        renderImage('u2t1_img_glucosa.webp', 'Glucosa.');
        ?>
    </div>
    <p>En la imagen de la izquierda se presenta la estructura desarrollada de un macronutrimento: la glucosa. En ella se pueden observar átomos de carbono, hidrógeno y oxígeno, además de sus enlaces. En la imagen de la derecha se sombrean en amarillo los átomos de carbono y en verde los enlaces químicos. La glucosa tiene 6 átomos de carbono, 22 enlaces sencillos y un enlace doble. </p>
    <?php ob_start(); ?>
    <p>Esta información te será de utilidad para realizar la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2a6', "Estructura desarrollada", $ActividadContent);
    ?>
    <p class="font-bold">¿Cómo aplicamos los conceptos de elemento, compuesto y mezcla, para llegar a una comprensión del término alimento?</p>
    <p>Observa la siguiente imagen, vincula todo el contenido para construir una definición de alimento; de preferencia utiliza todos los conceptos, puedes ejemplificar para escribir una definición amplia.</p>
    <div class="w-md-2 mx-auto">
        <?php
        renderImage('u2t1_img_esquema_mezcla.webp', 'Esquema de mezcla.');
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
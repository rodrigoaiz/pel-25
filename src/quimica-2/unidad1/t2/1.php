<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ModalIndex.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Bienvenida a la Lección 2</h3>
    <p>Te invitamos a observar el siguiente video.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('bIc-IqSQIa8', 'Bienvenida a la lección 2.');
        ?>
    </div>
    <p>¡Hola! Bienvenidas y bienvenidos a lección 2 de la Unidad 1 “Propiedades generales de las sales”. En esta lección podrás aprender a clasificar a los compuestos inorgánicos en sus distintas familias, aprenderás mediante las reglas de nomenclatura a escribir y nombrar a los compuestos inorgánicos, así como las características fisicoquímicas de las sales y sus propiedades. </p>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
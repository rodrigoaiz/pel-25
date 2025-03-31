<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'GeniallyIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Conversión de audios a otros formatos</h3>
    <p>Los convertidores de audio son programas que se utilizan para cambiar entre diferentes formatos de archivo de audio o sus características del sonido. Estos convertidores pueden realizar varias funciones, que incluyen:</p>
    <?php renderGenially('6541cc24e4fd840012aa955c', 'Funciones de los convertidores') ?>
    <p>El software de conversión de audio son aplicaciones que se ejecutan en una computadora y son comunes para realizar tareas de conversión y edición de audio. Hay muchas opciones disponibles, desde software gratuito y de código abierto hasta aplicaciones comerciales.</p>
    <p>En resumen, un convertidor de audio es una herramienta versátil que permite manipular archivos de audio de varias maneras, lo que resulta útil en la gestión y edición de contenido de audio.</p>
    <?php ob_start(); ?>
    <p>Has concluido la lección y para reforzar los conceptos te invito a realizar el siguiente cuestionario de autoevaluación para que conozcas tu avance en el aprendizaje "explica las características de los formatos de audio y los aplica" ¡Éxito!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a12', "Tipos de formatos de audio", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
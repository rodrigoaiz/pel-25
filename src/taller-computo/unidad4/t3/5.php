<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Formatos de video</h3>
    <p>A continuación se abordará el aprendizaje: "Explica las características de los formatos de video y los aplica" de la unidad 4. Multimedia.</strong></p>
    <?php
    renderImagePleca('u4_t3_fotografia.webp', 'Imagen de wanico.', 'https://www.flaticon.es/icono-gratis/fotografia_2201603?term=video&page=1&position=15&origin=search&related_id=2201603', 'Flaticon.', 'justify-center');
    ?>
    <p>Los convertidores de video son programas que permiten cambiar el formato de un archivo de video de un tipo a otro. Estas herramientas son útiles para diversos propósitos, como la conversión de videos para que sean compatibles con diferentes dispositivos o aplicaciones, la compresión para reducir su tamaño de archivo, la edición y la adaptación de videos a distintos estándares de codificación.</p>
    <?php ob_start(); ?>
    <p>A continuación, se presentan algunas funciones y usos comunes de los convertidores de video.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a16', "Convertidores de Video", $ActividadContent);
    ?>
    <p>Recuerda que la elección de algún convertidor de video dependerá de las necesidades propias del usuario, la plataforma, la calidad deseada y los formatos de entrada y salida. Hay una variedad de convertidores de video disponibles, algunos gratuitos y otros de pago, que ofrecen diferentes características y capacidades de conversión.</p>
    <?php ob_start(); ?>
    <p>Has concluido la lección y para reforzar los conceptos te invito a realizar el siguiente cuestionario de autoevaluación para que conozcas tu avance en el aprendizaje "explica las características de los formatos de audio y los aplica" ¡Éxito!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a17', "Formatos de vídeo", $ActividadContent);
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

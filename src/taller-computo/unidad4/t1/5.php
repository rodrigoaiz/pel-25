<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p>Para realizar la conversión de imagen de un formato a otro disponemos de programas que se instalan en la computadora de escritorio, aplicaciones para los dispositivos móviles y las aplicaciones instaladas en internet.</p>
    <p>En el proceso de edición de fotografía, hay que trabajar con formatos que dispongan de la mayor información como TIFF, en el caso de dibujo sería SVG o EPS, para la imagen final (el producto) hay que considerar la calidad, las dimensiones de la imagen, la cantidad de color y el tamaño de archivo, que requiera el uso especifico.</p>
    <p>En nuestras actividades requerimos de imágenes, muchas veces las encontramos en formatos que dificultan su uso, en otras ocasiones adicionalmente tenemos que editarlas, para ajustar algunas de las características requeridas, en ambos casos al final debemos darles otro formato diferente.</p>
    <p>Los ajustes y cambio de formato se realizan con programas de edición de imagen o conversores de imagen, ya sea que estén instalados en nuestra máquina o dispositivos móviles o alojados en Internet.</p>
    <?php ob_start(); ?>
    <p>Veamos como el formato tiene impacto en la calidad y el tamaño del archivo, descarga el archivo de imagen, realiza la siguiente actividad. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a5', "Práctica: Conversión de imágenes a otros formatos", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
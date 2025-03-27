<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <p class="font-bold">Propósitos:</p>
    <p><em>Al finalizar la unidad el alumno:</em></p>
    <p>Modificará digitalmente imagen, audio y video, utilizando las aplicaciones de edición correspondientes para integrar elementos multimedia a sus actividades académicas y cotidianas.</p>
    <div class="my-5 mx-auto border border-primary px-5 py-2">
        <h4 class="my-0">Temática de la unidad:</h4>
        <ul class="ul-disc">
            <li>Software de edición de imagen:</li>
            <ul class="circle">
                <li>Entorno de trabajo.</li>
                <li>Edición de imagen (mover, copiar, recortar, escalar, rotar, insertar texto, color, tono, brillo, contraste, relleno, mezcla, lápiz, goma y clonar)</li>
            </ul>
            <li>Formatos gráficos:</li>
            <ul class="circle">
                <li>Características de los formatos de imagen.</li>
                <li>Conversión de imágenes a otros formatos (bmp, jpg, gif, png)</li>
            </ul>
            <li>Software de edición de audio:</li>
            <ul class="circle">
                <li>Entorno de trabajo.</li>
                <li>Guión de audio.</li>
                <li>Edición de audio (grabar, importar, cortar, pegar, copiar y eliminar ruido)</li>
            </ul>
            <li>Formatos de audio:</li>
            <ul class="circle">
                <li>Conversión de audio a otros formatos. (mp3, wav, ogg)</li>
            </ul>
            <li>Software de edición de video:</li>
            <ul class="circle">
                <li>Entorno de trabajo.</li>
                <li>Guión de audiovisual.</li>
                <li>Edición de video (capturar, importar clips, copiar, cortar, pegar, efectos, transiciones y títulos).</li>
            </ul>
            <li>Formatos de video digital.</li>
            <li><span class="text-pink-600 font-bold">Exporta video hacia distintos formatos.</span> (avi, wmv, flv, mpg2, mp4).</li>
            <li>Sitios de publicación:</li>
            <ul class=" circle">
                <li>Repositorio de imagen, audio y video.</li>
                <li>Blog.</li>
                <li>Página web.</li>
            </ul>
        </ul>
    </div>
    <h3 class="mt-3">Software de edición de imagen</h3>
    <p>Para llevar a cabo este primer aprendizaje de edición de imagen te sugerimos emplear la aplicación GIMP, ya que es una aplicación gratuita para dicho fin, a continuación te sugerimos ver el siguiente video para su instalación y configuración en el sistema operativo Windows.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('ZbLyASD_taU', 'Instalar y personalizar GIMP 2.10');
        ?>
    </div>
    <div class="my-2 text-center text-xl">
        <p>En el siguiente enlace también encontrarás la versión de <a href="http://www.gimp.org.es/descargar-gimp.html" target="_blank">GIMP para Mac y para Linux</a>.</p>
    </div>
    <?php ob_start(); ?>
    <p>Para reforzar tus conocimientos, realiza la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a2', "Entorno de GIMP", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Edición de Videos con <em>Icecream</em></h3>
    <p>En este material, se les enseñará acerca de <em>Pixabay.com</em>, un sitio web que ofrece un banco de elementos multimedia de libre acceso y sin derechos de autor, con el propósito de apoyar en el desarrollo de tu contenido audiovisual, en la cual se requieren las imágenes, clips de video y música de fondo. <strong>Revisar el siguiente video.</strong></p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('FONHMPLug18', 'Elementos multimedia para el desarrollo del material audiovisual.');
        ?>
    </div>
    <p>En este video, se explicará el procedimiento para descargar <em>Icecream Video Editor</em> y se detalla su instalación en el sistema operativo Windows, con el objetivo de facilitar el uso de esta herramienta en la creación de videos explicativos.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('3Xtv_iQ8iBM', 'Descarga del programa Icecream Video Editor.');
        ?>
    </div>
    <p>El contenido presentado tiene la finalidad de enriquecer tus videos con imágenes y transiciones, proporcionando elementos multimedia que contribuyan a la comprensión del tema que estás explicando en tu material audiovisual.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('0DJHEJWm0wM', 'Añade imágenes y transiciones en los videos.');
        ?>
    </div>
    <p>En este contenido se incorporarán fragmentos de video con el propósito de complementar y enriquecer el material audiovisual que se está desarrollando.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('JpafTM5XqF0', 'Añadir fragmentos de video.');
        ?>
    </div>
    <p>En este material, se incorporan narraciones proporcionadas por el estudiante junto con música de fondo al video, con la intención de mejorar y ampliar el contenido audiovisual a desarrollar.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('cIQpvxjV46o', 'Añadir narraciones y música de fondo.');
        ?>
    </div>
    <p>En este video, se guiará a través del proceso de exportación del video, resaltando sus principales características, de modo que se pueda ver en cualquier reproductor de video.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('csZk9IOQiUU', 'Exportar el video en MP4.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Es momento de poner en práctica todo lo aprendido con la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a15', "Video con Icecream", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
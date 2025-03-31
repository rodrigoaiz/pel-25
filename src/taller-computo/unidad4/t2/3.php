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
    <h3>Edición de audio</h3>
    <p>En este video, se aprenderá cómo descargar <em>Audacity</em>, para cualquier Sistema Operativo.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('sSn5-rlYrP0', 'Descarga del programa de Audacity.');
        ?>
    </div>
    <p>En este video, explicaremos los diferentes tipos de conexiones de audio y micrófonos que se encuentran en las computadoras, te indicaremos las características necesarias en los auriculares y realizaremos pruebas de grabación utilizando el programa.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('6ij71m6fLz8', 'Conexiones de Audio y Micrófonos, Tu Primera Grabación en Audacity…');
        ?>
    </div>
    <p>En este archivo de audio, explicaremos los componentes clave de un guion de audio, es fundamental escucharlo detenidamente para ayudarte en la creación de este tipo de materiales.</p>
    <div class="max-w-2xl mx-auto">
        <audio controls class="w-full max-w-md mx-auto mt-4">
            <source src="../../assets/audio/guion_primera_grabacion.m4a" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </div>
    <p>Ahora, te presentamos un documento que contiene un <a href="<?php echo PATH_DOCS . 'u4_t2_ejemplo_guion_audio.pdf'; ?>" target="_blank">Ejemplo de guion de audio</a>, puedes utilizarlo como referencia para desarrollar tu grabación.</p>
    <p>En este video, realizarás tu primera grabación con edición de sonido, aprenderás a eliminar sonidos no deseados, importar audio, agregar pistas y utilizar otras herramientas útiles.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('kzKF5NkfGy4', 'Tu Primera Grabación');
        ?>
    </div>
    <p>En este video, te guiaremos a través del proceso para guardar tus proyectos en Audacity, destacando sus características principales, luego, te mostraremos cómo exportar tus grabaciones en formato MP3 para que puedas reproducirlas en cualquier reproductor de música.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('kY5SXJdcXfk', 'Guardar y Exportar Audio en Audacity.');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Es momento de poner en práctica lo que has aprendido con la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a8', "Crear un audio en el programa Audacity", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
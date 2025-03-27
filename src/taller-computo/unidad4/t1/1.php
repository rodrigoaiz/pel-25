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
    <h2>Bienvenida a la Unidad 4</h2>
    <h3>Multimedia</h3>
    <p>Para que aprendas más acerca de lo que verás en esta unidad observa el siguiente video.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderVideoIframe('-IZdVEdcEqM', 'Presentación de la Unidad 4');
        ?>
    </div>
    <h3>Presentación a los alumnos</h3>
    <p>Bienvenidos a la unidad 4 titulada "Multimedia". A lo largo de esta unidad, explicaremos las herramientas y técnicas necesarias para modificar digitalmente imágenes, audio y video. Nuestro objetivo principal es equiparte con las habilidades esenciales para integrar elementos multimedia en tus actividades académicas y cotidianas.</p>
    <p>A medida que avanzamos en esta unidad, aprenderás a utilizar aplicaciones de edición específicas que te permitirán crear, transformar y mejorar contenido multimedia. Estas habilidades son cada vez más relevantes en el mundo actual, donde la comunicación digital juega un papel fundamental en nuestra sociedad.</p>
    <p>Al finalizar la unidad, podrás aplicar sus conocimientos para:</p>
    <ul>
        <li>Modificar y mejorar imágenes, permitiendo comunicar visualmente tus ideas de manera efectiva.</li>
        <li>Editar y crear archivos de audio, lo que te brindará la capacidad de compartir mensajes de audio personalizados o mejorar sus proyectos académicos.</li>
        <li>Editar videos para crear contenido atractivo y educativo, lo que puede ser invaluable en presentaciones y proyectos escolares.</li>
        <li>La multimedia es una herramienta poderosa en la educación y en la comunicación en general, y creemos que este curso te proporcionará una base sólida para utilizarla de manera efectiva en tu vida académica y más allá.</li>
    </ul>

    <?php ob_start(); ?>
    <p>¡Bienvenidas y bienvenidos!</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a1', "Cuestionario diagnóstico unidad 4", $ActividadContent);
    ?>
</section>
<?php renderModalIndex(); ?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
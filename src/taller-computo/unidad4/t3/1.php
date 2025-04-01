<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Edición de video</h3>
    <p>En este módulo curso de <span class="text-pink-600 font-bold">Edición de Video</span>, se proporciona una introducción a los fundamentos esenciales de la <span class="text-pink-600 font-bold">producción de video</span>, los estudiantes se enfocarán en la <span class="text-pink-600 font-bold">creación de contenidos visuales</span> atractivos utilizando <span class="text-pink-600 font-bold">imágenes y secuencias audiovisuales</span>, el software que se usará será <span class="text-pink-600 font-bold italic">Icecream Video Editor</span> se elige debido a su accesibilidad.</p>
    <p>Los temas clave que se abordarán son:</p>
    <ul class="ul-disc">
        <li><span class="text-pink-600 font-bold">Entorno de trabajo:</span> Aprenderá a navegar por la interfaz del software de manera efectiva.</li>
        <li><span class="text-pink-600 font-bold">Guión de audiovisual:</span> Descubrirá cómo planificar y organizar proyectos de video.</li>
        <li><span class="text-pink-600 font-bold">Edición de video:</span> Aprenderá a capturar, importar clips, copiar, cortar, pegar, aplicar efectos especiales, transiciones y agregar títulos en los videos.</li>
    </ul>
    <p>Este módulo tiene como objetivo proporcionar las habilidades necesarias para <span class="text-pink-600 font-bold">producir videos</span> y fomentar la creatividad, lo que puede abrir oportunidades en el mundo digital del video, al final, los estudiantes habrán adquirido el aprendizaje y las habilidades necesarias para la edición de video y la expresión de sus ideas de manera efectiva.</p>
    <p>Evaluar el nivel de conocimientos de los estudiantes en <span class="text-pink-600 font-bold">edición de video</span> implica dotarlos de las herramientas tecnológicas esenciales para llevar a cabo <span class="text-pink-600 font-bold">grabaciones audiovisuales</span> en el ámbito académico, esto les proporcionará una comprensión más profunda de los conceptos clave relacionados con la edición de video.</p>
    <?php ob_start(); ?>
    <p>En este sentido, invitamos a los estudiantes a participar en el próximo <strong>foro de discusión</strong>, que tiene como objetivo principal explorar sus intereses y evaluar sus conocimientos previos acerca del tema que será abordado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a13', "Edición de videos", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
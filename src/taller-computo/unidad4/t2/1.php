<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Introducción</h3>
    <p>En este módulo del curso de <span class="text-pink-600 font-bold">edición de audio con software libre</span>, se explorará el entorno digital de las <span class="text-pink-600 font-bold">herramientas de edición</span>, utilizando el <span class="text-pink-600 font-bold">programa</span> <span class="text-pink-600 font-bold italic">Audacity</span>, además se aprenderá a <span class="text-pink-600 font-bold">crear y seguir un guión de audio</span> mediante la grabación e importación de archivos, así como la ejecución de <span class="text-pink-600 font-bold">tareas de edición, como cortar, pegar, copiar y eliminar fragmentos no deseados.</span></p>
    <p>Se adquirirán habilidades esenciales para perfeccionar proyectos sonoros, este tema se centrará en aprovechar al máximo el potencial del <span class="text-pink-600 font-bold">software libre</span> <span class="text-pink-600 font-bold italic">Audacity</span> para mejorar la calidad de las grabaciones, ya sea en el ámbito académico o para la producción de podcasts.</p>
    <p>Evaluar el conocimiento de los estudiantes en la edición de <span class="text-pink-600 font-bold">sonido con software libre</span>, como es el caso del programa de <span class="text-pink-600 font-bold italic">Audacity</span>, implica proporcionarles las herramientas tecnológicas necesarias para realizar grabaciones de audio en actividades académicas, esto les permitirá conocer las <span class="text-pink-600 font-bold">características fundamentales de grabación y edición.</span> </p>

    <?php ob_start(); ?>
    <p>Por lo tanto, invitamos a los estudiantes a participar en el siguiente foro de discusión con el fin de conocer sus interés y conocimientos sobre el tema que se tratará.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a6', "Edición de sonido", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
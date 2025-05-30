<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Tabs.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenidas y bienvenidos a la asignatura de Igualdad de Género</h2>
    <p>Para saber tus propios conocimientos previos acerca de este tema, por favor responde este cuestionario: </p>
    <p>El propósito de este cuestionario es evaluar tus conocimientos previos sobre los temas y aprendizajes que adquirirás en la asignatura de Igualdad de Género. Los resultados permitirán a tu docente identificar y atender las necesidades específicas de tu grupo, además de contribuir al seguimiento que el Colegio realiza sobre la asignatura. Para procurar la precisión de los resultados, es importante que completes el examen sin asistencia externa y sin consultar fuentes digitales o impresas. El examen consta de 40 preguntas y su duración estimada es de 25 minutos.</p>
    <?php ob_start(); ?>
    <p>Elige la opción que consideres responde mejor a cada pregunta u oración. Este cuestionario es meramente informativo, responde con honestidad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a1', "Cuestionario diagnóstico de aprendizaje 1", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
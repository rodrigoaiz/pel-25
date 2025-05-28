<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Foro de nueva masculinidad</h2>
    <p>Las <strong>nuevas masculinidades</strong> representan un cambio fundamental en la forma en que entendemos y vivimos la masculinidad en la sociedad actual. Rompen con los estereotipos tradicionales que han limitado a los hombres a roles rígidos y muchas veces dañinos, promoviendo en su lugar la <strong>equidad</strong>, la <strong>sensibilidad</strong> y la <strong>responsabilidad afectiva</strong>. Pero, ¿qué significa realmente ser un "vato en deconstrucción" y cómo se navega este camino? Para profundizar en estas ideas, te invitamos a realizar la siguiente actividad.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reflexionar sobre el impacto de las conductas desiguales y proponer estrategias para su erradicación.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Realiza la lectura <a href="<?php echo PATH_DOCS . 'u2t10-lectura_NoTodosLosHombresComoHagoParaSerUnVatoEnDeconstruccion.pdf'; ?>" target="_blank">¡No todos los hombres! ¿Cómo hago para ser un vato en deconstrucción?</a></li>
        <li>Posteriormente, elabora un listado de conductas que identifiques en tu contexto educativo como masculinizadas y elabora una propuesta desde la nueva masculinidad para erradicarla.</li>
        <li>Una vez elaborado ese listado, participa en el foro donde coloques tu listado, asimismo elabora una reflexión sobre el impacto que tiene ese tipo de cambio en las conductas desde la nueva masculinidad, para generar una sana convivencia.</li>
        <li>Revisa y comenta la respuesta de al menos una o uno de tus compañeros.</li>
        <li>Consulta los criterios a evaluar en la <a href="<?php echo PATH_DOCS . 'U2T10-Rubrica_ForoDeDiscusionDeNuevaMasculinidad.pdf'; ?>" target="_blank">rúbrica de evaluación</a>.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t4a4', "Foro de nueva masculinidad", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
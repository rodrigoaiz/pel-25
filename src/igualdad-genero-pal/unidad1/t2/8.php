<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad Final: Cuestionario sobre la Perspectiva de Género</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>En esta actividad conocerás cómo la perspectiva de género y los feminismos impactan en la vida diaria, así como su relación y su intersección en ámbitos cotidianos.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Responde a las siguientes preguntas de manera argumentada, coherente y reflexiva.</li>
        <li>La respuesta a cada una de las preguntas debe ser de entre uno o dos párrafos, por lo que se espera que tu documento tenga una extensión de una cuartilla. Además, considera que es fundamental que expreses tus ideas con tus propias palabras.
            <ul>
                <li class="leading-none">¿Cuál es la relación entre los feminismos y la Perspectiva de Género (PeG)?</li>
                <li class="leading-none">¿De qué manera la PeG y los feminismos impactan en tu vida diaria?</li>
                <li class="leading-none">¿Qué aprendiste o qué cambió respecto a lo que sabías de los feminismos y la PeG?</li>
            </ul>
        <li>Sube tus preguntas con sus respuestas en formato <strong>.PDF</strong> nombrándolo de la siguiente manera: <em>Nombre_Apellido_CuestionarioFinal.</em></li>
    </ol>
    <div class="w-4/5 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
        <p class="text-white">Considera que contenga las siguientes características; Arial 12, interlineado 1.5, texto justificado y márgenes normales. Puedes consultar los materiales de las actividades previas, así como la <a href="<?php echo PATH_DOCS . 'u1t2-escala-estimativa-PerspectivaDeGenero.pdf'; ?>" target="_blank">Escala estimativa</a> para que sepas que otros aspectos se considerarán en la evaluación.</p>
    </div>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a7', "Cuestionario sobre la Perspectiva de Género.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
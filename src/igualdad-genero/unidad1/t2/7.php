<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad Final: Reflexión sobre la Perspectiva de Género</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>En esta actividad conocerás cómo la perspectiva de género y los feminismos impactan en la vida diaria, así como su relación y su intersección en ámbitos cotidianos.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Elabora una reflexión de una cuartilla.</li>
        <li>Guíate de las siguientes preguntas:
            <ul>
                <li class="leading-none">¿Cuál es la relación entre los feminismos y la perspectiva de género?</li>
                <li class="leading-none">¿De qué manera la perspectiva de género y los feminismos impactan positivamente en tu vida?</li>
                <li class="leading-none">¿Qué aprendiste o qué cambió respecto a lo que sabías de los feminismos y la perspectiva de género?</li>
</ul>
        <li>Sube tu reflexión en formato <strong>.PDF</strong> nombrándola de la siguiente manera: <em>Nombre_Apellido_ReflexionFinal.</em></li>
    </ol>
    <div class="w-4/5 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
            <p class="text-white">Considera que contenga las siguientes características; Arial 12, interlineado 1.5, texto justificado y márgenes normales. Puedes consultar los materiales de las actividades previas, así como la <a href="<?php echo PATH_DOCS . 'u1t2-rubrica-reflexionSobreLaPerspectivaDeGenero.pdf'; ?>" target="_blank">Escala estimativa</a> para que sepas que otros aspectos se considerarán en la evaluación.</p>
    </div>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a6', "Reflexión sobre la Perspectiva de Género.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

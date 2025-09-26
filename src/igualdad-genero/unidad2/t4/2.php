<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Reconociendo acciones</h2>
    <p>La convivencia escolar es un pilar fundamental para el desarrollo integral de nuestra comunidad en el CCH. Un entorno donde prevalece el <strong>respeto</strong>, la <strong>empatía</strong> y la <strong>colaboración</strong> no solo facilita el aprendizaje, sino que también nos prepara para ser ciudadanos responsables y comprometidos. En el siguiente foro, te invitamos a reflexionar sobre cómo, día a día, construimos juntos una sana convivencia y qué acciones e instancias en nuestra escuela contribuyen a fortalecerla.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('iga10-img02.webp');
        ?>
    </div>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar las acciones que promueven la sana convivencia del entorno escolar.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>En el siguiente foro, contesta las siguientes preguntas:
            <ul class="ul-disc ml-10">
                <li>¿Qué acciones identificas en tu escuela para fortalecer el respeto y la convivencia con los demás?</li>
                <li>¿Qué instancias institucionales identificas que participan en esta tarea?</li>
            </ul>
        </li>
        <li>Comenta, por lo menos, las respuestas de una o uno de tus pares.</li>
        <li>Revisa los criterios a evaluar en la <a href="<?php echo PATH_DOCS . 'u2t10-rubrica_ForoDeDiscusionReconociendoAcciones.pdf'; ?>" target="_blank">rúbrica</a> de evaluación.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a1', "Foro: Reconociendo acciones", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

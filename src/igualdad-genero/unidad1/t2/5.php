<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Video: ¿Qué es la perspectiva de género?</h2>
    <p>¿Alguna vez has escuchado hablar de la <em>"perspectiva de género"</em>? ¿Sabes a qué se refiere? La perspectiva de género es una herramienta fundamental para comprender y analizar las relaciones entre mujeres y hombres en nuestra sociedad. Nos permite ver cómo los roles de género, los estereotipos y las estructuras sociales influyen en nuestras vidas y crean desigualdades.</p>
    <p>A continuación, te invitamos a ver el siguiente video en el que se explica más sobre este concepto.</p>
    <p>Mientras ves el video identifica la siguiente información:</p>
    <ul class="ul-disc ml-20">
        <li>¿Cuál es el objetivo de la perspectiva de género?</li>
        <li>¿Cuáles son los tres pasos básicos para incorporar la perspectiva de género?</li>
        <li>Explica con tus propias palabras: ¿qué entiendes por perspectiva de género?</li>
    </ul>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('dmwrneT_jP4', 'Qué es la perspectiva de género');
        ?>
    </div>
    <p class="mt-8">Ahora te invitamos a realizar la siguiente actividad.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>En esta actividad conocerás el concepto de Perspectiva de Género, su contexto histórico en México, así como algunas propuestas para su implementación.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Organizados en equipos, según las indicaciones de tu profesor o profesora, responderán en un <em>Padlet</em> alguna de las tres preguntas anteriores.</li>

        <li>Posteriormente, las respuestas serán revisadas de forma grupal y recibirás retroalimentación de tu profesor o profesora. </li>
    </ol>
    <p class="mt-8">No olvides revisar la <a href="<?php echo PATH_DOCS . 'u1t2-lista-cotejo-que-es-la-perspectiva-de-genero.pdf'; ?>" target="_blank">lista de cotejo</a>, para que conozcas los criterios con los que se evaluará la actividad.</p>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a4', "Perspectiva de género", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
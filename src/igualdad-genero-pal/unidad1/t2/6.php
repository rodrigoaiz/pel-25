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
    <h2>¿Qué es la perspectiva de género?</h2>
    <p>¿Alguna vez has escuchado hablar de la <em>"perspectiva de género"</em>? ¿Sabes a qué se refiere? La perspectiva de género es una herramienta fundamental para comprender y analizar las relaciones entre mujeres y hombres en nuestra sociedad. Nos permite ver cómo los roles de género, los estereotipos y las estructuras sociales influyen en nuestras vidas y crean desigualdades.</p>
    <p><strong>Propósito</strong></p>
    <p>En esta actividad conocerás el concepto de Perspectiva de Género (PEG), su contexto histórico en México, así como algunas propuestas para su implementación.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number mb-8">
        <li>A continuación, te invitamos a revisar el video "Qué es la perspectiva de género", en el que se explica más sobre este concepto.</li>
        <li>Responde correctamente a las preguntas que se te presentan a continuación. Sólo tienes un intento para responder.</li>
    </ol>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('dmwrneT_jP4', 'Qué es la perspectiva de género');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a5', "Video - Qué es la perspectiva de género", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
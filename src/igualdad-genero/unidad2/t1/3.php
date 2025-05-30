<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Violencia de género y tipos </h2>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <p>En esta sección vamos a abordar lo qué es la violencia de género. Este término se refiere a cualquier acto dañino dirigido a una persona por su género, siendo las mujeres y niñas quienes sufren desproporcionadamente esta realidad, aunque la violencia de género también es ejercida hacia hombres y niños. Es fundamental entender que la violencia de género no es un problema aislado, sino una manifestación de desigualdades profundas que debemos reconocer y combatir.</p>
        </div>
        <div><?php
                renderImage('iga7-img02.webp');
                ?></div>
    </div>
    <p>A través del siguiente video, explorarás los distintos tipos de violencia que existen para poder identificarlos y trabajar juntos hacia una sociedad más justa y equitativa. A continuación, realiza lo que se te pide.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Conocer los tipos de violencia de género y sus características.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Observa con atención el siguiente video y toma notas en tu cuaderno.</li>
        <li>En la grabación aparecerán preguntas que tienen como finalidad ayudarte a verificar que comprendes los conceptos y aspectos principales de la información que se te presenta, así que responde con cuidado cada una de ellas.</li>
    </ol>
    
    <?php ob_start(); ?>
    <p>Una vez que concluyas con este apartado, continúa con la siguiente actividad.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a2', "Violencia de género y tipos", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
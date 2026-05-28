<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Violencia de género, tipos y modalidades</h2>
    <div class="w-xl mx-auto">
        <?php
        renderImage('iga7-img02.webp');
        ?>
    </div>
    <p>En esta sección vamos a abordar lo qué es la violencia de género. Este término se refiere a cualquier acto dañino dirigido a una persona por su género, siendo las mujeres y niñas quienes sufren desproporcionadamente esta realidad, aunque la violencia de género también es ejercida hacia hombres y niños. Es fundamental entender que la violencia de género no es un problema aislado, sino una manifestación de desigualdades profundas que debemos reconocer y combatir. A través del siguiente video, explorarás los distintos tipos de violencia que existen para poder identificarlos y trabajar juntos hacia una sociedad más justa y equitativa. A continuación, realiza lo que se te pide.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Conocer los tipos y modalidades de la violencia de género y sus características.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Observa con atención los siguientes videos y <strong>toma notas en tu cuaderno</strong>.</li>
        <li>Cuando veas los videos reflexiona acerca de las siguientes preguntas:
            <ul class="list-none">
                <li class="text-orange-600">¿Cómo la violencia de género reproduce y perpetúa los roles de género?</li>
                <li class="text-orange-600">¿En qué año se publicó la Ley de Acceso de las Mujeres a una Vida Libre de Violencia?</li>
                <li class="text-orange-600">¿Existe violencia física cuando alguien te toca alguna parte del cuerpo sin tu consentimiento?</li>
                <li class="text-orange-600">¿Por qué las burlas, humillaciones y ridiculizaciones son ejemplos de violencia psicológica?</li>
                <li class="text-orange-600">¿Cómo puede la violencia de género también afectar a los hombres, la comunidad LGBTIQ+ y otros grupos vulnerables?</li>
            </ul>
        </li>
        <li>Una vez que concluyas con este apartado, continúa con la siguiente actividad.</li>
    </ol>
</section>
<div class="grid grid-cols-6 gap-4 mb-10">
    <div class="col-span-2 col-start-2">
        <?php
        renderVideoIframe('Pt3FvQ9molY', '¿Qué es la violencia de género?');
        ?>
    </div>
    <div class="col-span-2">
        <?php
        renderVideoIframe('FFIv1Ida2eE', 'Tipos y modalidades de la violencia de género');
        ?>
    </div>
</div>


<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
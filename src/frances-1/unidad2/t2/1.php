<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Ma nationalité</h2>
    <h3>Mi nacionalidad</h3>
    <p>En esta lección, aprenderás a decir tu nacionalidad.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regardez la vidéo suivante du début à la seconde 00:24 / Ve el siguiente vidéo desde el inicio hasta el segundo 00:24.</li>
        <li>Répondez aux questions suivantes / Responde las siguientes preguntas:
        </li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t2a7', "Ma nationalité", $ActividadContent);
    ?>
    <p class="mt-10 font-bold">Conceptualización:</p>
    <p>Después de haber visto el video, deducimos que la pregunta "D'où venez-vous?" se plantea para saber el país de origen de la persona. No obstante, para saber cuál es la nacionalidad, la pregunta que emplearemos es: "Quelle est ta nationalité?"</p>
    <p>Y la oración que se emplea para expresar nuestra nacionalidad es "Je suis". Y cuando es el caso de los mexicanos, que son varias personas juntas las que contestan, es "nous sommes". Es decir, utilizamos el verbo "être" conjugado en presente.</p>
    <p>La sintaxis completa de la oración en singular queda así:</p>
    <div class="grid grid-cols-8 gap-2">
        <div class="col-start-2 text-xl text-center text-fuchsia-700">Sujet</div>
        <div class="text-5xl text-center text-fuchsia-700">+</div>
        <div class="text-xl text-center text-fuchsia-700">verbe (être)</div>
        <div class="text-5xl text-center text-fuchsia-700">+</div>
        <div class="text-xl text-center text-fuchsia-700 col-span-2">adjectif qualificatif (la nationalité)</div>
    </div>
    <div class="grid grid-cols-8 gap-2">
        <div class="col-start-2 font-bold text-center text-rose-700">Je</div>
        <div class="font-bold text-center text-fuchsia-900"> </div>
        <div class="font-bold text-center text-blue-700">suis</div>
        <div class="font-bold text-center text-fuchsia-900"> </div>
        <div class="font-bold text-center text-fuchsia-900 col-span-2">australien</div>
    </div>
    <p class="mt-4">Recuerda que en francés realizamos "l'accord de genre". Es decir, que se deben de adecuar los sustantivos o, en este caso, los adjetivos con el género del sujeto, o sea, de la persona que habla o a la que nos referimos. Ve el siguiente video y observa las reglas de formación del adjetivo de nacionalidad: </p>
    <div class="w-1/3 mx-auto bg-fuchsia-700/30 p-4 my-6">
        <?php
        renderVideoIframe('MU6X8_bnSx8', 'Dire sa nationalité en français');
        ?>
    </div>





    <div class="w-4/5 mx-auto mt-6 border-y-2 border-dashed border-purple-300 bg-purple-300/10">
        <span class="text-white">NOTA IMPORTANTE:</span>
        <ul>
            <li class="text-white">Pueden utilizar herramientas digitales gratuitas como <a class="text-purple-50" href="https://miro.com/es/" target="_blank">Miró</a>, <a class="text-purple-50" href="https://www.lucidchart.com/pages/es" target="_blank">Lucidchart</a> o <a class="text-purple-50" href="https://www.canva.com/es_mx/" target="_blank">Canva</a>.</li>
        </ul>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
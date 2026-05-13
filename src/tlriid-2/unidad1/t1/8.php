<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Punto de vista</h2>
    <p>El punto de vista es una perspectiva desde donde se miran los hechos. Así, cuando un autor elige un narrador en primera persona, escoge también un ángulo desde donde se narra. Esta manera de referir la información influirá en el efecto de sentido que el relato produzca en el lector.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('tlriid2-u1t1p8img1.webp', 'Ojo testigo', 'https://commons.wikimedia.org/wiki/File:Ojo_marr%C3%B3n_claro.jpg', 'Wikimedia Commons');
        ?>
    </div>
    <p>Cuando el narrador es un <strong>testigo</strong>, sólo sabemos lo que le han dicho; si el narrador es <strong>protagonista</strong> se puede decir que la información es de primera mano &ndash;aunque el punto de vista es fijo&ndash; porque participó en los acontecimientos directamente. Para ver de qué forma influye el tipo de narrador en el sentido del relato te invitamos a llevar a cabo las siguientes actividades:</p>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lee con cuidado el relato, después cambia la voz narrativa, de la tercera a la primera persona, para crear un narrador protagonista.</li>
        <li>Posteriormente, sube tu archivo a la plataforma para que sea revisado.</li>
    </ol>
    <div class="my-6 max-w-3xl mx-auto">
        <div class="border-l-4 border-sky-500 bg-sky-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
            <div class="bg-sky-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">Relato 1</p>
            </div>
            <div class="px-6 py-5">
                <blockquote class="font-serif text-gray-800 border-l-4 border-sky-300 pl-4 py-1 bg-white/60 rounded-r">
                    <p>La conoció en un bar y en el hotel le arrancó la blusa provocativa, la falda entallada, los zapatos de tacón alto, las medias de seda, los ligueros, las pulseras y los collares, el corsé, el maquillaje, y al quitarle los lentes negros se quedó completamente solo.</p>
                </blockquote>
            </div>
        </div>
        <div class="border-l-4 border-indigo-400 bg-indigo-50 rounded-r-lg px-6 py-4 mb-8">
            <p class="font-bold text-indigo-700 mb-1">Reescritura 1</p>
            <p class="font-serif text-gray-700 italic">La conocí en…</p>
        </div>
    </div>

    <p>Lee con cuidado el relato, después cambia la voz narrativa, de la tercera a la primera persona, para crear un narrador <strong>testigo</strong>. En este caso el personaje secundario que narre será otra rana.</p>

    <div class="my-6 max-w-3xl mx-auto">
        <div class="border-l-4 border-emerald-500 bg-emerald-500/10 rounded-r-lg shadow-md overflow-hidden mb-6">
            <div class="bg-emerald-500 px-5 py-2">
                <p class="font-bold text-white tracking-wide">La Rana que quería ser una Rana auténtica</p>
            </div>
            <div class="px-6 py-5">
                <blockquote class="font-serif text-gray-800 border-l-4 border-emerald-300 pl-4 py-1 bg-white/60 rounded-r">
                    <p class="mb-3">Había una vez una Rana que quería ser una Rana auténtica, y todos los días se esforzaba en ello.</p>
                    <p class="mb-3">Al principio se compró un espejo en el que se miraba largamente buscando su ansiada autenticidad.</p>
                    <p class="mb-3">Unas veces parecía encontrarla y otras no, según el humor de ese día o de la hora, hasta que se cansó de esto y guardó el espejo en un baúl.</p>
                    <p class="mb-3">Por fin pensó que la única forma de conocer su propio valor estaba en la opinión de la gente, y comenzó a peinarse y a vestirse y a desvestirse (cuando no le quedaba otro recurso) para saber si los demás la aprobaban y reconocían que era una Rana auténtica.</p>
                    <p class="mb-3">Un día observó que lo que más admiraban de ella era su cuerpo, especialmente sus piernas, de manera que se dedicó a hacer sentadillas y a saltar para tener unas ancas cada vez mejores, y sentía que todos la aplaudían.</p>
                    <p>Y así seguía haciendo esfuerzos hasta que, dispuesta a cualquier cosa para lograr que la consideraran una Rana auténtica, se dejaba arrancar las ancas, y los otros se las comían, y ella todavía alcanzaba a oír con amargura cuando decían que qué buena Rana, que parecía Pollo.</p>
                </blockquote>
            </div>
        </div>
        <div class="border-l-4 border-teal-400 bg-teal-50 rounded-r-lg px-6 py-4">
            <p class="font-bold text-teal-700 mb-1">Reescritura 2</p>
            <p class="font-serif text-gray-700 italic">Mi amiga, la rana Jacinta, me dijo que quería ser una rana auténtica y por eso todos los días se esforzaba en ello...</p>
        </div>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u1t1a4', "Cambio de voz narrativa", $ActividadContent);
    ?>
</section>
<?php ob_start(); ?>
<section>
    <p>Observa el cortometraje <em>Cuerdas</em> y relata en tu cuaderno lo que ocurre desde la perspectiva de uno de los niños. Si lo deseas, compártelo con tu asesor(a) para que revise si lo has hecho correctamente.</p>
    <div class="flex justify-center gap-6">
        <div class="w-2/3 md:full mb-2">
            <?php
            renderVideoIframe('4INwx_tmTKw', 'Cuerdas cortometraje oficial (2018). Cuerdas. [Youtube].');
            ?>
        </div>
    </div>

</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Para aprender más");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Quelle heure est-il?</h2>
    <h3>¿Qué hora es?</h3>
    <p>Cuando hablamos de nuestro horario del CCH necesitamos indicar a qué hora tenemos cada clase. Para pedir la hora podemos preguntar:</p>

    <div class="bg-blue-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-blue-800">Quelle heure est-il? <span class="text-gray-600">(¿Qué hora es?)</span></p>
        <p class="mt-2">o también, de una manera un poco más informal:</p>
        <p class="font-semibold text-blue-800">Il est quelle heure?</p>
    </div>

    <p>Para dar la respuesta tenemos que empezar por decir:</p>
    <p class="font-semibold text-center text-blue-800 my-2">Il est...</p>
    <p>y luego das la hora.</p>

    <p class="mt-4">Para preguntar a qué hora es algo o de qué a qué horas es algo, vas a decir:</p>
    <div class="bg-green-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-green-800">À quelle heure est … ?</p>
        <p class="font-semibold text-green-800">De quelle heure à quelle heure est …?</p>
    </div>

    <p>y respondes:</p>
    <p class="font-semibold text-center text-green-800 my-2">C'est à… o C'est de …. à …..</p>

    <p class="text-lg font-bold mt-6 mb-3 text-emerald-500">Cómo decir las horas:</p>
    <p>Las horas se dicen comenzando por el número de horas, después debes de decir la palabra "heures" y luego dices los minutos.</p>

    <div class="bg-yellow-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold mb-2">Ejemplos:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="font-semibold">13h</span> → <span class="italic">treize heures</span></li>
            <li><span class="font-semibold">13h05</span> → <span class="italic">treize heures cinq</span></li>
            <li><span class="font-semibold">13h50</span> → <span class="italic">treize heures cinquante</span></li>
        </ul>
    </div>

    <p class="text-lg font-bold mt-6 mb-3 text-emerald-500">A partir de la media hora:</p>
    <p>A partir de la media hora, puedes dar la hora como ya lo explicamos o puedes decir la hora siguiente, la palabra "heures", la palabra "moins" (menos) y luego los minutos que faltan para la siguiente hora:</p>

    <div class="bg-orange-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold mb-2">Ejemplo:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="font-semibold">13h35</span> → <span class="italic">quatorze heures moins vingt-cinq</span> <span class="text-gray-600">(catorce horas menos veinticinco)</span></li>
            <li><span class="font-semibold">13h55</span> → <span class="italic">quatorze heures moins cinq</span> <span class="text-gray-600">(catorce horas menos cinco)</span></li>
        </ul>
    </div>

    <p class="text-lg font-bold mt-6 mb-3 text-emerald-500">Formas especiales (15, 30 y 45 minutos):</p>
    <p>Cuando la hora es la hora y 15, 30 o 45 minutos, puedes darla diciendo los minutos tal cual, o usando una manera más informal:</p>

    <div class="bg-pink-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold mb-2">Ejemplos:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="font-semibold">13h15</span> → <span class="italic">treize heures quinze</span> / <span class="italic">treize heures et quart</span></li>
            <li><span class="font-semibold">13h30</span> → <span class="italic">treize heures trente</span> / <span class="italic">treize heures et demie</span></li>
            <li><span class="font-semibold">13h45</span> → <span class="italic">treize heures quarante-cinq</span> / <span class="italic">quatorze heures moins le quart</span></li>
        </ul>
    </div>
    <div class=" flex flex-row justify-center gap-14 mt-8">
        <div class="basis-1/2">
            <p class="text-lg font-bold mt-6 mb-3 text-emerald-500">Formato de 12 vs 24 horas:</p>
            <p>En Europa se usa el formato de 24 horas, sin embargo, en América las horas se dan en un formato de 12 horas. Puedes usar cualquiera de los dos, pero si usas el formato de 12 horas, tienes que indicar de qué momento del día se trata (mañana, tarde o noche):</p>
        </div>
        <div class="basis-1/2">
            <?php
            renderImage('fr1u2a2p3-img03.webp');
            ?>
        </div>
    </div>

    <div class="bg-teal-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold mb-2">Ejemplos:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="font-semibold">6h</span> → <span class="italic">six heures du matin</span></li>
            <li><span class="font-semibold">13h07</span> → <span class="italic">treize heures sept</span> / <span class="italic">une heure sept de l'après-midi</span></li>
            <li><span class="font-semibold">20h25</span> → <span class="italic">vingt heures vingt-cinq</span> / <span class="italic">huit heures vingt-cinq du soir</span></li>
        </ul>
    </div>

    <p class="text-lg font-bold mt-6 mb-3 text-emerald-500">Expresiones especiales para mediodía y medianoche:</p>
    <p>Para hablar de las 12h de la tarde podemos decir:</p>
    <p class="font-semibold text-center text-teal-800 my-2">douze heures</p>
    <p>pero es común que la gente diga:</p>
    <p class="font-semibold text-center text-teal-800 my-2">midi</p>

    <div class="bg-indigo-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold mb-2">Por ejemplo:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="font-semibold">12h10</span> → <span class="italic">douze heures dix</span> / <span class="italic">midi et dix</span></li>
            <li><span class="font-semibold">12h30</span> → <span class="italic">douze heures trente</span> / <span class="italic">midi et demie</span></li>
        </ul>
    </div>

    <p>Para hablar de las 24h, vamos a decir:</p>
    <p class="font-semibold text-center text-indigo-800 my-2">minuit</p>

    <div class="bg-violet-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold mb-2">Por ejemplo:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="font-semibold">23h55</span> → <span class="italic">minuit moins cinq</span></li>
            <li><span class="font-semibold">24h20</span> → <span class="italic">minuit et vingt</span></li>
        </ul>
    </div>

    <p>Para ayudarte con la pronunciación de las horas, puedes ver el siguiente video:</p>

    <div class="max-w-xl mx-auto bg-rose-700/40 p-4">
        <?php
        renderVideoIframe('Q9u6UaOvjMU', 'Dire/demander l\'heure');
        ?>
    </div>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Glisse l'heure sur la montre ou sur le réveil qui indique cette heure-là. / Arrastra la hora al reloj o al despertador que muestre esa hora.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t7a23', "L'heure sur la montre", $ActividadContent);
    ?>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>À quelle heure… ? Regarde la vidéo et écris l'heure à laquelle les événements se produisent. / ¿A qué hora…? Mira el video y escribe la hora en la que suceden las cosas.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t7a24', "À quelle heure…?", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
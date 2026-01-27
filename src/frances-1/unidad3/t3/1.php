<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Les préférences et les loisirs</h2>
    <h3>Los gustos y pasatiempos</h3>
    <p>Cuando te estás presentando, es normal hablar de las cosas que te gustan o te disgustan y también sobre lo que te gusta hacer en tu tiempo libre.</p>

    <div class="bg-sky-100/30 p-6 my-6 shadow-lg">
        <div class="text-xl mb-4">
            <p class="font-bold text-sky-800">Kerim</p>
        </div>
        <div class=" mb-4">
            <p><span class="text-sky-700 italic font-bold">J'aime</span>
                jouer aux jeux vidéo avec des amis, marcher dans la neige, les soirs d'été,
                le club de foot SCO d'Angers, le sport automobile, les voyages, les paysages
                français, la montagne, les animaux, rester au lit le matin, faire du karting,
                travailler lorsque je me rends utile, les potes, les livres, l'histoire, les films de SF (
                et les livres de SF aussi)</p>
        </div>
        <div>
            <p><span class="text-sky-700 italic font-bold">Je n'aime pas</span> les crevettes, les gens hypocrites, les émissions de télé réalité, la
                mer, le club du FC Lorient, les balances, les cornets, les musiques avec des
                paroles stupides, les olives, les pastèques, les moustiques, les chips au goût
                poulet, l'injustice, les orgueilleux, l'humidité de la Bretagne.</p>
        </div>
        <div>
            <p class="text-sky-700 italic text-sm text-right">Pris du blog "ados d'mots", de "Mi bibliothèque du Finistère III" J'aime, j'aime pas… <br>| Ados d'Mots (wordpress.com)</p>
        </div>
    </div>
    <?php ob_start(); ?>
    <p><strong>Instructions:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte ci-dessus et coche la réponse correcte / Lee el texto de arriba y marca la respuesta correcta.</li>
    </ol>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3-act-5', "Lire et comprendre un blog", $ActividadContent);
    ?>

    <p class="text-lg font-bold mt-6 mb-3 text-cyan-700">Expresar gustos y preferencias:</p>

    <p>Como pudiste observar, para indicar lo que te gusta, puedes usar el verbo:</p>

    <div class="bg-green-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-green-800"><span class="italic">Aimer</span> (que, en este contexto vamos a traducir como "gustar").</p>
    </div>

    <p>También puedes usar el verbo:</p>

    <div class="bg-blue-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-blue-800"><span class="italic">Adorer</span> (adorar)</p>
    </div>

    <p>Y puedes matizarlos si te ayudas con algunos adverbios como <span class="font-semibold italic">"beaucoup"</span> (mucho) o <span class="font-semibold italic">"bien"</span> (mucho).</p>

    <p class="font-semibold mt-4 mb-2">Por ejemplo, puedes decir:</p>
    <div class="bg-yellow-100/50 p-4 my-4 rounded-lg">
        <ul class="list-disc list-inside space-y-1">
            <li>Me gusta mucho bailar. → <span class="italic font-semibold">J'aime beaucoup danser.</span></li>
            <li>A él le gusta mucho cantar. → <span class="italic font-semibold">Il aime bien chanter.</span></li>
            <li>A ella le gusta comer. → <span class="italic font-semibold">Elle aime manger.</span></li>
        </ul>
    </div>

    <p class="text-lg font-bold mt-6 mb-3 text-cyan-700">Para expresar disgusto:</p>

    <p>Para decir que algo no te gusta, lo más normal es utilizar el verbo <span class="font-semibold italic">"aimer"</span> pero en su forma negativa ("no me gusta"):</p>

    <div class="bg-red-100/50 p-4 my-4 rounded-lg">
        <ul class="list-disc list-inside space-y-1">
            <li>No me gusta bailar. → <span class="italic font-semibold">Je n'aime pas danser.</span></li>
            <li>A él no le gustan los chocolates. → <span class="italic font-semibold">Il n'aime pas les chocolats.</span></li>
        </ul>
    </div>

    <p>También puedes usar el verbo <span class="font-semibold italic">"détester"</span>, pero ten en cuenta que es un poco más fuerte que solo usar la forma negativa de <span class="font-semibold italic">"aimer"</span>:</p>

    <div class="bg-orange-100/50 p-4 my-4 rounded-lg">
        <p class="italic font-semibold">Ella odia los insectos. → Elle déteste les insectes.</p>
    </div>

    <p class="text-lg font-bold mt-6 mb-3 text-cyan-700">Para expresar preferencias:</p>

    <p>Si quieres decir que hay varias cosas que te gustan, pero que prefieres alguna de ellas, puedes utilizar el verbo <span class="font-semibold italic">"préférer"</span>:</p>

    <div class="bg-purple-100/50 p-4 my-4 rounded-lg">
        <p class="italic font-semibold">A nosotros nos gustan los perros, pero preferimos los gatos. → Nous aimons les chiens, mais nous préférons les chats.</p>
    </div>

    <div class="bg-gray-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-gray-800">📝 Nota importante:</p>
        <p class="text-gray-700">Si te fijas bien, los verbos <span class="italic font-semibold">"aimer"</span>, <span class="italic font-semibold">"adorer"</span>, <span class="italic font-semibold">"préférer"</span> y <span class="italic font-semibold">"détester"</span> son, todos ellos, regulares.</p>
    </div>
    <div class="flex justify-center gap-4">
        <div class="w-1/4 md:w-1/5 bg-green-500/30 px-6 py-4">
            <p class="font-bold text-green-700 text-xl mb-2">Aimer</p>
            <ul class="list-none">
                <li class="text-green-700">J'aime</li>
                <li class="text-green-700">Tu aimes</li>
                <li class="text-green-700">Il, elle, on aime</li>
                <li class="text-green-700">Nous aimons</li>
                <li class="text-green-700">Vous aimez</li>
                <li class="text-green-700">Ils, elles aiment</li>
            </ul>
        </div>
        <div class="w-1/4 md:w-1/5 bg-blue-500/30 px-6 py-4">
            <p class="font-bold text-blue-800 text-xl mb-2">Adorer</p>
            <ul class="list-none">
                <li class="text-blue-800">J'adore</li>
                <li class="text-blue-800">Tu adores</li>
                <li class="text-blue-800">Il, elle, on adore</li>
                <li class="text-blue-800">Nous adorons</li>
                <li class="text-blue-800">Vous adorez</li>
                <li class="text-blue-800">Ils, elles adorent</li>
            </ul>
        </div>
        <div class="w-1/4 md:w-1/5 bg-purple-500/30 px-6 py-4">
            <p class="font-bold text-purple-700 text-xl mb-2">Préférer</p>
            <ul class="list-none">
                <li class="text-purple-700">Je préfère</li>
                <li class="text-purple-700">Tu préfères</li>
                <li class="text-purple-700">Il, elle, on préfère</li>
                <li class="text-purple-700">Nous préférons</li>
                <li class="text-purple-700">Vous préférez</li>
                <li class="text-purple-700">Ils, elles préfèrent</li>
            </ul>
        </div>
        <div class="w-1/4 md:w-1/5 bg-red-500/30 px-6 py-4">
            <p class="font-bold text-red-700 text-xl mb-2">Détester</p>
            <ul class="list-none">
                <li class="text-red-700">Je déteste</li>
                <li class="text-red-700">Tu détestes</li>
                <li class="text-red-700">Il, elle, on déteste</li>
                <li class="text-red-700">Nous détestons</li>
                <li class="text-red-700">Vous détestez</li>
                <li class="text-red-700">Ils, elles détestent</li>
            </ul>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

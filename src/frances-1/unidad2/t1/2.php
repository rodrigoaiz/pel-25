<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Mon âge et ma date de naissance</h2>
    <h3>Mi edad y mi fecha de nacimiento</h3>
    <p>En esta lección, aprenderás a decir tu edad y tu fecha de nacimiento. Realiza la siguiente actividad para practicar lo que acabamos de ver.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Lee la siguiente conversación y responde las preguntas.</li>
    </ol>
    <div class="flex flex-row justify-center gap-4">
        <div class="basis-1/2 sm:basis-2/3">
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-bl from-violet-500 to-fuchsia-500">Bonjour! Comment tu t'appelles?</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-t from-sky-500 to-indigo-500">Je m'appelle Max. Et toi?</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-bl from-violet-500 to-fuchsia-500">Je m'appelle Chloé.</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-t from-sky-500 to-indigo-500">Quel âge tu as?</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-bl from-violet-500 to-fuchsia-500">J'ai quinze ans. Et toi, quel est ton âge?</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-t from-sky-500 to-indigo-500">J'ai seize ans.</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-bl from-violet-500 to-fuchsia-500">C'est le 15 janvier 2007.</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-t from-sky-500 to-indigo-500">Super! Ma date de naissance est le 10 janvier 2008.</div>
            <div class="h-12 p-2 font-bold text-white-own mt-1 bg-linear-to-bl from-violet-500 to-fuchsia-500">Génial!</div>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>Choisis la bonne réponse / Selecciona la opción correcta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a2', "Mon âge et ma date de naissance", $ActividadContent);
    ?>
    <p class="text-xl font-bold text-teal-600 mt-8">Mon âge</p>
    <p>En francés, existen dos fórmulas principales para preguntar la edad uno con el verbo être (ser /estar) y otra con el verbo avoir (tener/haber):</p>
    <ol class="ol-number">
        <li>Quel est ton âge?</li>
        <li>Quel âge tu as? O también se puede invertir y hacer de la siguiente manera: Tu as quel âge?</li>
    </ol>
    <p>Y se responde de la siguiente manera, usando el verbo avoir:</p>
    <p class="italic text-fuchsia-900 text-center text-xl">J’ai quinze ans.</p>
    <p>Como podemos observar, el orden de la oración es la siguiente:</p>
    <div class="grid grid-cols-5 gap-2">
        <div class="text-xl text-center text-fuchsia-700">Sujeto</div>
        <div class="text-5xl text-center text-fuchsia-700">+</div>
        <div class="text-xl text-center text-fuchsia-700">el verbo avoir conjugado</div>
        <div class="text-5xl text-center text-fuchsia-700">+</div>
        <div class="text-xl text-center text-fuchsia-700">ans</div>
    </div>
    <div class="grid grid-cols-5 gap-2">
        <div class="font-bold text-center text-fuchsia-900">(je)</div>
        <div class="font-bold text-center text-fuchsia-900"> </div>
        <div class="font-bold text-center text-fuchsia-900">(ai)</div>
        <div class="font-bold text-center text-fuchsia-900"> </div>
        <div class="font-bold text-center text-fuchsia-900">(es decir,"años")</div>
    </div>
    <div class="border-y-2 border-dashed border-purple-300 bg-purple-300/10 p-2 text-center mt-8">
        * Recuerda que ponemos un apóstrofe en el pronombre personal <span class="italic font-bold text-fuchsia-900">je</span> cuando el verbo comienza con vocal.</div>
    <p>Repasa las conjugaciones en los siguientes cuadros:</p>
    <div class="flex justify-center gap-4">
        <div class="w-1/3 md:2/3 bg-rose-500/30 px-6 shadow-xl">
            <p class="font-bold text-rose-700 text-xl mb-2">Être</p>
            <ul class="list-none">
                <li class="text-rose-700">Je suis</li>
                <li class="text-rose-700">Tu es</li>
                <li class="text-rose-700">Il, elle, on est</li>
                <li class="text-rose-700">Nous sommes</li>
                <li class="text-rose-700">Vous êtes</li>
                <li class="text-rose-700">Ils, elles sont</li>
            </ul>
        </div>
        <div class="w-1/3 md:2/3 bg-indigo-500/30 px-6 shadow-xl">
            <p class="font-bold text-indigo-800 text-xl mb-2">Avoir</p>
            <ul class="list-none">
                <li class="text-indigo-800">J'ai</li>
                <li class="text-indigo-800">Tu as</li>
                <li class="text-indigo-800">Il, elle, on a</li>
                <li class="text-indigo-800">Nous avons</li>
                <li class="text-indigo-800">Vous avez</li>
                <li class="text-indigo-800">Ils, elles ont</li>
            </ul>
        </div>
    </div>
    <p>Para aprender a contar del uno al cien, puedes ver el siguiente video:</p>
    <?php
    renderVideoIframe('Ij3fpaHnWs0', 'French Lesson - NUMBERS 1-100 - Compter jusqu à 100');
    ?>

    <?php ob_start(); ?>
    <p>Regarde la vidéo et mets en ordre les dialogues suivants / Mira el vídeo y ordena los siguientes diálogos.</p>
    <?php
    renderVideoIframe('hm87-R0Y2dk', 'Unité 4 : Quel âge avez-vous?');
    ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a3', "Quel âge avez-vous?", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
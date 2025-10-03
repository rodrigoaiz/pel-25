<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Parle-moi sur ta famille</h2>
    <h3>Preguntar y responder preguntas sobre las actividades de la familia</h3>
    <p>Para hablar sobre tus hermanos, hermanas, padres y abuelos, primero vamos a ver cómo hacer algunas preguntas sobre tu familia y luego vamos a utilizar todo lo que hemos visto para poder dar información sobre ella y cada uno de sus miembros.</p>

    <p>La primera cosa que debemos tener en cuenta es que, cuando hablamos de los hermanos, en francés no hay una única palabra que junte a los hermanos y a las hermanas, así que siempre vamos a tener que estar mencionando a ambos. Así, para preguntar si tienes hermanos, en francés debes de preguntar si tienes hermanos y hermanas, y al contestar, debes indicar cuántos hermanos y cuántas hermanas tienes.</p>

    <div class="bg-blue-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-sky-800 mb-2">Preguntas sobre hermanos:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="italic font-semibold">Est-ce que tu as des frères et des sœurs?</span> (¿Tienes hermanos y hermanas?)</li>
            <li><span class="italic font-semibold">Combien de frères et sœurs tu as?</span> (¿Cuántos hermanos y hermanas tienes?)</li>
        </ul>
    </div>

    <p>También, para preguntar por tu familia puedes decir:</p>

    <div class="bg-green-100/50 p-4 my-4 rounded-lg">
        <p class="font-semibold text-green-800 mb-2">Preguntas sobre la familia:</p>
        <ul class="list-disc list-inside space-y-1">
            <li><span class="italic font-semibold">Est-ce que tu peux décrire ta famille?</span> (¿Puedes describir tu familia?)</li>
            <li><span class="italic font-semibold">Quels sont les membres de ta famille?</span> (¿Cuáles son los miembros de tu familia?)</li>
            <li><span class="italic font-semibold">Comment est composée ta famille?</span> (¿Cómo está compuesta tu familia?)</li>
            <li><span class="italic font-semibold">Qui sont les membres de ta famille?</span> (¿Quiénes son los miembros de tu familia?)</li>
        </ul>
    </div>

    <p>Para preguntar si tienes mascotas debemos decir: <strong>¿Tienes animales de compañía?</strong> (que es así como se dice "mascota" en francés):</p>

    <div class="bg-yellow-100/50 p-4 my-4 rounded-lg">
        <p class="italic font-semibold text-yellow-800">Est-ce que tu as des animaux de compagnie?</p>
    </div>

    <p>Además, todas las preguntas que hicimos al principio de la unidad 1 para presentarnos y para pedir información sobre una persona que acabamos de conocer pueden hacerse para conocer a los miembros de la familia de esa persona, solo tenemos que elegir bien al sujeto de nuestras frases y conjugar los verbos correctamente de acuerdo al sujeto.</p>
    <p>Además, para poder hablar de la familia, tanto de la tuya, como de la de otra persona, debes hacer uso de los <strong>adjetivos posesivos</strong> para indicar con quién existe el parentesco. Por ejemplo, si yo quiero preguntarte cómo se llama tu mamá debo decir:</p>

    <div class="bg-purple-100/50 p-4 my-4 rounded-lg">
        <p class="italic font-semibold text-purple-800">Comment s'appelle ta mère?</p>
    </div>

    <div class="bg-gray-100/50 p-4 my-4 rounded-lg">
        <p class="text-gray-700">El verbo es <span class="italic font-semibold">"s'appeler"</span> y debo conjugarlo para <span class="font-semibold">"elle"</span> (tu mamá = ella). Además, como estoy hablando de tu mamá, tú eres el poseedor y tu mamá es un sustantivo femenino singular, por lo que voy a decir <span class="italic font-semibold">"ta"</span> para indicar que la mamá es tuya.</p>
    </div>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte ci-dessus et coche la réponse correcte / Lee el texto de arriba y marca la respuesta correcta.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t3a6', "Lire et comprendre un blog", $ActividadContent);
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
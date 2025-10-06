<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';

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
        <li>Regarde la vidéo suivante pour te donner une idée de la façon dont tu peux poser et répondre à des questions sur ta famille / Ve el siguiente video para darte una idea de cómo puedes preguntar y responder cosas sobre tu familia.</li>
    </ol>
    <div class="max-w-xl mx-auto bg-yellow-200/80 p-4">
        <?php
        renderVideoIframe('ZySgo1BciIc', 'Français - Présenter sa famille');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t4a7', "Des choses sur la famille", $ActividadContent);
    ?>
    <p class="mt-10">Ahora vas a practicar cómo pedir información sobre la familia:</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Glisse la bonne question pour obtenir les réponses données. Fais attention aux adjectifs possessifs et aux sujets des réponses / ¡Arrastra la pregunta que corresponda para conseguir estas respuestas! Fíjate bien en los adjetivos posesivos y en quién realiza la acción.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t4a8', "Demander des informations", $ActividadContent);
    ?>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Lis le texte et complète avec l’activité qui correspond / Lee el texto y completa con la actividad que corresponde.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u3t4a9', "Lecture active", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
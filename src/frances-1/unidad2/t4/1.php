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
    <h2>M'inscrire à...</h2>
    <h3>Inscribirme a...</h3>
    <p>Para finalizar este aprendizaje, vamos a ver cómo te puedes inscribir a alguna actividad, como la biblioteca, a un centro deportivo o a algún curso., llenando un formulario. </p>
    <p class="mt-4">Ve el siguiente video: </p>
    <div class="w-2/3 mx-auto bg-fuchsia-700/30 p-4 my-6">
        <?php
        renderVideoIframe('C2upH0hcq2A', 'Faire une inscription à la bibliothèque');
        ?>
    </div>
    <p>Ahora realiza la siguiente actividad:</p>
    <?php ob_start(); ?>
    <p>Après avoir regardé la vidéo, répondez au questionnaire suivant / Despues de haber visto el video, responde el siguente cuestionario.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t4a13', "Questions de compréhension", $ActividadContent);
    ?>
    <p>Como habrás notado, así como en el español, en francés, cuando te diriges a alguien que no conoces, por ejemplo un recepcionista o una secretaria, se habla de Usted.</p>
    <p>Reiterando la diplomacia francesa, y que tenemos igualmente en el español, recordemos que en francés se habla de usted cuando nos referimos a la gente a quien le guardamos respeto debido a su edad (mayores que nosotros), al primer contacto con gente mayor que nosotros que apenas conocemos, y, en este caso, hacia personas que también nos ayudan a realizar trámites de índole burocrática. En este caso, en el trámite de inscripción a la biblioteca.</p>
    <p>Para terminar, aquí tienes un pequeño ejercicio de comprensión de lectura:</p>
    <div class="flex justify-center gap-4">
        <div class="w-2/3 md:full bg-indigo-500/30 px-6 shadow-xl">
            <p class="font-bold text-indigo-800 text-lg"> A Maëlys le gusta mucho el senderismo y quiere inscribirse a la Asociación “Genève Rando”.</p>
            <p class="text-indigo-800 text-lg mb-2">Voici sa carte d’identité et ses données personnelles:</p>
            <ul class="list-none">
                <li class="text-indigo-800">J'ai</li>
                <li class="text-indigo-800">Tu as</li>
                <li class="text-indigo-800">Il, elle, on a</li>
                <li class="text-indigo-800">Nous avons</li>
                <li class="text-indigo-800">Vous avez</li>
                <li class="text-indigo-800">Ils, elles ont</li>
            </ul>

            <p class="text-indigo-800 text-lg mt-2">Elle n’est pas en couple et son email est : mgm.martin@yahoo.fr. Son numéro de téléphone mobil est le 06 34 24 36 et son numéro de téléphone fixe est le 05 56 22 38 40.</p>
        </div>
    </div>








    <p class="mt-8">Ahora, en la siguiente lista verás las preguntas que se plantean para conocer <span class="italic font-bold text-purple-950">les coordonnées</span> de otra persona, de manera formal y también informal.</p>
    <table class="table-auto w-full">
        <thead class="bg-sky-900">
            <tr>
                <th class="p-2 border text-white text-center font-bold">Manière Formelle</th>
                <th class="p-2 border text-white text-center font-bold">Manière Informelle</th>
            </tr>
        </thead>
        <tbody class="bg-sky-100">
            <!-- NOM ET PRÉNOM -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NOM ET PRÉNOM</div>
                    <div class="text-sky-800">Comment tu t'appelles?</div>
                    <div class="text-sky-800 mt-4">Quel est ton prénom?</div>
                    <div class="text-sky-800">Quel est ton nom?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je m'appelle Sophie Legrand</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NOM ET PRÉNOM</div>
                    <div class="text-sky-800">Comment vous vous appelez?</div>
                    <div class="text-sky-800 mt-4">Quel est votre prénom?</div>
                    <div class="text-sky-800">Quel est votre nom?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je m'appelle Sophie Legrand</div>
                </td>
            </tr>

            <!-- DATE DE NAISSANCE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">DATE DE NAISSANCE</div>
                    <div class="text-sky-800">Quelle est ta date de naissance?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Le 20 mai 2007</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">DATE DE NAISSANCE</div>
                    <div class="text-sky-800">Quelle est votre date de naissance?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Le 20 mai 2007</div>
                </td>
            </tr>

            <!-- ÂGE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ÂGE</div>
                    <div class="text-sky-800">Quel est ton âge?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">J'ai 16 ans</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ÂGE</div>
                    <div class="text-sky-800">Quel âge avez-vous?</div>
                    <div class="text-sky-800">Quel est votre âge?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">J'ai 16 ans</div>
                </td>
            </tr>

            <!-- OCCUPATION -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">OCCUPATION</div>
                    <div class="text-sky-800">Qu'est-ce que tu fais dans la vie?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je suis étudiante</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">OCCUPATION</div>
                    <div class="text-sky-800">Vous êtes étudiant?</div>
                    <div class="italic text-rose-800 mt-4">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Oui</div>
                    <div class="text-sky-800 mt-8">Qu'est-ce que vous faites dans la vie?</div>
                    <div class="italic text-rose-800 mt-4">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je suis étudiante</div>
                </td>
            </tr>
            <!-- ADRESSE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ADRESE</div>
                    <div class="text-sky-800">Quelle est ton adresse?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">(Mon adresse est le) 25 Rue Jean Jaurès</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ADRESE</div>
                    <div class="text-sky-800">Quelle est votre adresse?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">(Mon adresse est le) 25 Rue Jean Jaurès.</div>
                </td>
            </tr>
            <!-- TELEPHONE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NUMÉRO DE TÉLÉPHONE</div>
                    <div class="text-sky-800">Quel est ton numéro de téléphone?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">C'est le 0638901923</div>
                    <div class="italic text-rose-800 mt-2">Mon numéro de téléphone est…</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NUMÉRO DE TÉLÉPHONE</div>
                    <div class="text-sky-800">Quel est votre numéro de téléphone?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">C'est le 0638901923</div>
                    <div class="italic text-rose-800 mt-2">Mon numéro de téléphone est…</div>
                </td>
            </tr>
            <!-- COURRIEL ELECTRONIQUE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">E-MAIL</div>
                    <div class="text-sky-800">Quel est ton courriel éléctronique?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Mon courriel est…</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">E-MAIL</div>
                    <div class="text-sky-800">Quel est votre courriel éléctronique?</div>
                    <div class="text-sky-800">Quel est votre âge?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Mon courriel est…</div>
                </td>
            </tr>
        </tbody>
    </table>
    <p>Por último, date cuenta de que a diferencia del español, en francés:</p>
    <p>- Al decir la dirección empezamos con el número y después el nombre de la calle, por ejemplo 25, Rue Jean Jaurès. Por ende, el orden queda de la siguiente manera: <span class="italic font-bold text-purple-950">Numéro, Nom de la Rue.</span></p>
    <p>- El orden de la fecha de nacimiento es como en español: <span class="italic font-bold text-purple-950">jour, mois, année.</span> La diferencia es que no ponemos la preposición <strong>"de"</strong>.
    </p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Realiza un vidéo donde te presentas y dices los siguientes datos:
            <ul class="list-disc ml-8">
                <li>Salutation formelle</li>
                <li>Nom et prénom</li>
                <li>Date de naissance</li>
                <li>Occupation</li>
                <li>Adresse</li>
                <li>Numéro de téléphone</li>
                <li>Courriel éléctronique</li>
            </ul>
        </li>
        <li>Revisa la <span class="bg-amber-500/30 text-amber-600 p-1">rúbrica de autoevaluación</span> que te proponemos que tu video contenga todos los aspectos mencionados.</li>
    </ol>

    <?php ob_start(); ?>
    <p>Comparte tu experiencia en el foro.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t3a12', "Vidéo de présentation", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
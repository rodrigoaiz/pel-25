<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Mon numéro de téléphone, mon courriel et mon adresse</h2>
    <h3>Mi número de teléfono, mi email y mi dirección</h3>
    <p>En esta lección, aprenderás a dar tu número de teléfono, tu correo electrónico y tu dirección y recordarás como dar tu fecha de nacimiento. Estos datos se conocen en francés como <span class="italic font-bold text-purple-950">les coordonnées</span> o <span class="italic font-bold text-purple-950">les informations personnelles</span>.</p>
    <p class="mt-4">Ve el siguiente video para que aprendas cómo preguntar y dar tus datos personales: </p>
    <div class="w-2/3 mx-auto bg-emerald-700/30 p-4 my-6">
        <?php
        renderVideoIframe('nJKjeLcFwSY', 'Donner et demander des informations personnelles en français');
        ?>
    </div>
    <p>Ahora realiza la siguiente actividad</p>
    <?php ob_start(); ?>
    <p>Après avoir regardé la vidéo, répondez au questionnaire suivant / Despues de haber visto el video, responde el siguiente cuestionario.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t3a11', "Les informations personnelles", $ActividadContent);
    ?>
    <p class="mt-8">Ahora, en la siguiente lista verás las preguntas que se plantean para conocer <span class="italic font-bold text-purple-950">les coordonnées</span> de otra persona, de manera formal y también informal.</p>
    <p class="mt-8 text-2xl text-center text-sky-800">Questions à poser pour demander les coordonnées</p>
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
                    <div class="text-sky-800">Comment vous vous appelez?</div>
                    <div class="text-sky-800 mt-4">Quel est votre prénom?</div>
                    <div class="text-sky-800">Quel est votre nom?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je m'appelle Sophie Legrand</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NOM ET PRÉNOM</div>
                    <div class="text-sky-800">Comment tu t'appelles?</div>
                    <div class="text-sky-800 mt-4">Quel est ton prénom?</div>
                    <div class="text-sky-800">Quel est ton nom?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je m'appelle Sophie Legrand</div>
                </td>
            </tr>

            <!-- DATE DE NAISSANCE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">DATE DE NAISSANCE</div>
                    <div class="text-sky-800">Quelle est votre date de naissance?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Le 20 mai 2007</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">DATE DE NAISSANCE</div>
                    <div class="text-sky-800">Quelle est ta date de naissance?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Le 20 mai 2007</div>
                </td>
            </tr>

            <!-- ÂGE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ÂGE</div>
                    <div class="text-sky-800">Quel âge avez-vous?</div>
                    <div class="text-sky-800">Quel est votre âge?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">J'ai 16 ans</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ÂGE</div>
                    <div class="text-sky-800">Quel est ton âge?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">J'ai 16 ans</div>
                </td>
            </tr>

            <!-- OCCUPATION -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">OCCUPATION</div>
                    <div class="text-sky-800">Vous êtes étudiant?</div>
                    <div class="italic text-rose-800 mt-4">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Oui</div>
                    <div class="text-sky-800 mt-8">Qu'est-ce que vous faites dans la vie?</div>
                    <div class="italic text-rose-800 mt-4">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je suis étudiante</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">OCCUPATION</div>
                    <div class="text-sky-800">Qu'est-ce que tu fais dans la vie?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Je suis étudiante</div>
                </td>
            </tr>
            <!-- ADRESSE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ADRESE</div>
                    <div class="text-sky-800">Quelle est votre adresse?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">(Mon adresse est le) 25 Rue Jean Jaurès.</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">ADRESE</div>
                    <div class="text-sky-800">Quelle est ton adresse?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">(Mon adresse est le) 25 Rue Jean Jaurès</div>
                </td>
            </tr>
            <!-- TELEPHONE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NUMÉRO DE TÉLÉPHONE</div>
                    <div class="text-sky-800">Quel est votre numéro de téléphone?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">C'est le 0638901923</div>
                    <div class="italic text-rose-800 mt-2">Mon numéro de téléphone est…</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">NUMÉRO DE TÉLÉPHONE</div>
                    <div class="text-sky-800">Quel est ton numéro de téléphone?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">C'est le 0638901923</div>
                    <div class="italic text-rose-800 mt-2">Mon numéro de téléphone est…</div>
                </td>
            </tr>
            <!-- COURRIEL ELECTRONIQUE -->
            <tr>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">E-MAIL</div>
                    <div class="text-sky-800">Quel est votre courriel éléctronique?</div>
                    <div class="text-sky-800">Quel est votre âge?</div>
                    <div class="italic text-rose-800 mt-8">Réponse:</div>
                    <div class="italic text-rose-800 mt-2">Mon courriel est…</div>
                </td>
                <td class="px-3 py-2 border text-sky-900">
                    <div class="font-bold">E-MAIL</div>
                    <div class="text-sky-800">Quel est ton courriel éléctronique?</div>
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
        <li>Realiza un video donde te presentas y dices los siguientes datos:
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
    <div class="flex justify-center">
        <div class="w-2/3">
            <table class="table-auto w-full">
                <thead class="bg-amber-300/50">
                    <tr>
                        <th colspan="5" class="p-2 border align-middle bg-amber-600 text-amber-50 font-bold text-center">Rubrica de evaluación</th>
                    </tr>
                    <tr>
                        <th class="p-2 border text-amber-700 font-bold text-center">Criterio</th>
                        <th class="p-2 border text-amber-700 font-bold text-center">Excelente</th>
                        <th class="p-2 border text-amber-700 font-bold text-center">Bueno</th>
                        <th class="p-2 border text-amber-700 font-bold text-center">Aceptable</th>
                        <th class="p-2 border text-amber-700 font-bold text-center">Necesita mejorar</th>
                    </tr>
                </thead>
                <tbody class="bg-amber-300/30">
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Salutación formal</td>
                        <td class="px-3 py-2 border text-stone-900">Utiliza una salutación formal adecuada al contexto (por ejemplo, "Buenos días", "Buenas tardes", "Hola profesionales").</td>
                        <td class="px-3 py-2 border text-stone-900">Utiliza una salutación formal, pero no es la más adecuada para el contexto.</td>
                        <td class="px-3 py-2 border text-stone-900">Utiliza una salutación informal o no utiliza ninguna salutación.</td>
                        <td class="px-3 py-2 border text-stone-900">No saluda.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Presentación del nombre y apellido</td>
                        <td class="px-3 py-2 border text-stone-900">Pronuncia su nombre y apellido de forma clara y concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Pronuncia su nombre y apellido de forma clara, pero no concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Pronuncia su nombre y apellido de forma poco clara o no los pronuncia todos.</td>
                        <td class="px-3 py-2 border text-stone-900">No menciona su nombre y apellido.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Fecha de nacimiento</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su fecha de nacimiento completa (día, mes, año) de forma clara y concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su fecha de nacimiento completa, pero no de forma clara o concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su fecha de nacimiento de forma incompleta o no la menciona.</td>
                        <td class="px-3 py-2 border text-stone-900">No menciona su fecha de nacimiento.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Ocupación</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su ocupación actual o área de estudio de forma clara y concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su ocupación o área de estudio, pero no de forma clara o concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su ocupación o área de estudio de forma poco clara o no la menciona.</td>
                        <td class="px-3 py-2 border text-stone-900">No menciona su ocupación o área de estudio.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Dirección</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su dirección completa (calle, número, colonia, código postal, ciudad, estado/país) de forma clara y concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su dirección completa, pero no de forma clara o concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su dirección de forma incompleta o no la menciona.</td>
                        <td class="px-3 py-2 border text-stone-900">No menciona su dirección.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Número de teléfono</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su número de teléfono completo (incluyendo código de área) de forma clara y concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su número de teléfono completo, pero no de forma clara o concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su número de teléfono de forma incompleta o no lo menciona.</td>
                        <td class="px-3 py-2 border text-stone-900">No menciona su número de teléfono.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Correo electrónico</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su correo electrónico de forma clara y concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su correo electrónico, pero no de forma clara o concisa.</td>
                        <td class="px-3 py-2 border text-stone-900">Menciona su correo electrónico de forma incompleta o no lo menciona.</td>
                        <td class="px-3 py-2 border text-stone-900">No menciona su correo electrónico.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Calidad del vídeo</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo tiene buena calidad de imagen y sonido.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo tiene calidad de imagen y sonido aceptable.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo tiene calidad de imagen y sonido baja.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es de mala calidad o no se puede ver ni escuchar.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Claridad y concisión</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es claro, conciso y fácil de entender.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es claro y conciso, pero no del todo fácil de entender.
                        </td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es poco claro o conciso, o no es fácil de entender.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es muy poco claro o conciso, y no se entiende.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Creatividad y originalidad</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es creativo y original.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es creativo o original, pero no ambas cosas.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo no es creativo ni original.</td>
                        <td class="px-3 py-2 border text-stone-900">El vídeo es una copia de otro vídeo o no tiene ninguna creatividad ni originalidad.</td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border text-amber-700 font-semibold">Presentación personal</td>
                        <td class="px-3 py-2 border text-stone-900">El presentador se muestra seguro, entusiasta y profesional.</td>
                        <td class="px-3 py-2 border text-stone-900">El presentador se muestra seguro y entusiasta, pero no del todo profesional.</td>
                        <td class="px-3 py-2 border text-stone-900">El presentador se muestra poco seguro o entusiasta, o no profesional.</td>
                        <td class="px-3 py-2 border text-stone-900">El presentador se muestra inseguro, apático y poco profesional.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
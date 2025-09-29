<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ParaSaber.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Ma matière préférée est...</h2>
    <h3>Mi materia preferida es...</h3>
    <p>Nuestro horario de clase incluye materias que nos gustan mucho, y otras que no tanto. Ve el siguiente vídeo y realiza las actividades siguientes.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Regarde la vidéo et trouve la réponse correcte. / Mira el video y encuentra la respuesta correcta.</li>
        <li>Fais glisser le mot à l'endroit correct dans la phrase / Arrastra la palabra al lugar correcto en la frase.</li>
    </ol>
    <div class="max-w-xl mx-auto bg-pink-700/30 p-4">
        <?php
        renderVideoIframe('7OMjzPFB1SQ', 'Les matieres scolaires');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t5a19', "Preferencias", $ActividadContent);
    ?>
    <p class="m-10">Para expresar lo que nos gusta y lo que no nos gusta necesitamos algunos verbos y expresiones. Observa el siguiente cuadro:</p>
    <table class="table-auto w-full">
        <thead class="bg-violet-300/50">
            <tr>
                <th class="p-2 border align-middle text-violet-700 text-center font-bold">ADORER (adorar)</th>
                <th class="p-2 border align-middle text-violet-700 text-center font-bold">AIMER (gustar)</th>
                <th class="p-2 border align-middle text-violet-700 text-center font-bold">PRÉFÉRER (preferir)</th>
                <th class="p-2 border align-middle text-violet-700 text-center font-bold">NE PAS AIMER (no gustar)</th>
                <th class="p-2 border align-middle text-violet-700 text-center font-bold">DÉTESTER (detestar)</th>
            </tr>
        </thead>
        <tbody class="bg-violet-300/30">
            <tr>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>J'adore</li>
                        <li>Tu adores</li>
                        <li>Il /Elle/On adore</li>
                        <li>Nous adorons</li>
                        <li>Vous adorez</li>
                        <li>Ils/Elles adorent</li>
                        <li>J'adore les maths</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>J'aime</li>
                        <li>Tu aimes</li>
                        <li>Il /Elle/On aime</li>
                        <li>Nous aimons</li>
                        <li>Vous aimez</li>
                        <li>Ils/Elles aiment</li>
                        <li>Tu aimes le sport</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>Je préfère</li>
                        <li>Tu préfères</li>
                        <li>Il /Elle/On préfère</li>
                        <li>Nous préférons</li>
                        <li>Vous préférez</li>
                        <li>Ils/Elles préfèrent</li>
                        <li>Nous préférons l'histoire</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>Je n'aime pas</li>
                        <li>Tu n'aimes pas</li>
                        <li>Il /Elle/On n'aime pas</li>
                        <li>Nous n'aimons pas</li>
                        <li>Vous n'aimez pas</li>
                        <li>Ils/Elles n'aiment pas</li>
                        <li>Elle n'aime pas l'anglais</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>Je déteste</li>
                        <li>Tu détestes</li>
                        <li>Il /Elle/On déteste</li>
                        <li>Nous détestons</li>
                        <li>Vous détestez</li>
                        <li>Ils/Elles détestent</li>
                        <li>Je déteste la physique</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>En te basant sur les informations de ce tableau, réponds à l'activité suivante. / Con base en la información de este cuadro, responde la siguiente actividad.</li>
        <li>Observe ces phrases et fais l'activité suivante. Attention à l'emploi de minuscules, mayuscules et signes de ponctuation. / Observa estas frases y realiza la siguiente actividad. Ten cuidado con el uso de minúsculas, mayúsculas y signos de puntuación.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t6a20', "Ma matière préférée est...", $ActividadContent);
    ?>
    <p class="my-10">La expresión *parce que* nos permite explicar las razones por las que algo nos gusta o no. Observa la frase 4. Usamos *parce qu'* cuando el sujeto que sigue empieza con vocal o con h.</p>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Écris la conjugaison correcte des verbes entre parenthèses. Attention aux accents et aux apostrophes. / Escribe la conjugación correcta de los verbos entre paréntesis. Ten cuidado con los acentos y las comillas (apóstrofes).</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t6a21', "Conjugaison correcte", $ActividadContent);
    ?>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Relie chaque phrase avec la matière correcte. / Une cada frase con la asignatura correcta.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t6a22', "Matière correcte", $ActividadContent);
    ?>
</section>
<?php ob_start(); ?>
<section>
    <p>En los países francófonos, las materias de Historia y de Geografía se dan juntas (las da un mismo profesor) y la materia se llama Histoire-Géographie (y le dicen Histoire-géo). Lo mismo pasa con las materias de Física y Química y el curso se llama Physique-Chimie. También tienen la materia de Sciences de la Vie et de la Terre (le dicen SVT) que sería el equivalente de Ciencias Naturales y Biología.</p>
    <p>La Educación Física es obligatoria y se llama Éducation Physique et Sportive y todos le dicen EPS.</p>
    <p>Además, los horarios de las clases son totalmente diferentes a los nuestros. En Francia, los cursos de primaria y de secundaria comienzan a las 8h30-8h45 y terminan entre las 16h y las 17h30 y no hay clases los miércoles.</p>
</section>
<?php
$SaberContent = ob_get_clean();
renderSaberContent($SaberContent, "Sais-tu que... ?");
?>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
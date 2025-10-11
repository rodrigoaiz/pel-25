<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Production orale</h2>
    <h3>Producción oral</h3>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32 mb-8">
        <li>Graba un breve audio en el que hables de tu rutina escolar. Presenta brevemente lo siguiente:
            <ol class="ol-lower-alpha md:ml-32">
                <li>Tu horario de clases en CCH.</li>
                <li>Tus materias favoritas y las que no te gustan.</li>
                <li>Tus actividades habituales en casa: desayunar, comer, bañarse, hacer la tarea.</li>
            </ol>
        </li>
        <li>Revisa la rúbrica para verificar que estás incluyendo todos los elementos necesarios y para autoevaluar tu trabajo.</li>
        <li>Sube tu audio a la plataforma.</li>
    </ol>
    <div class="flex justify-center">
        <div class="w-2/3">
            <table class="table-auto w-full">
                <thead class="bg-amber-300/50">
                    <tr>
                        <th colspan="3" class="p-2 border align-middle bg-amber-600 text-amber-50 font-bold text-center">Rubrica de evaluación</th>
                    </tr>
                    <tr>
                        <th class="p-2 border align-middle text-amber-700 font-bold">Criterio</th>
                        <th class="p-2 border align-middle text-amber-700 font-bold">😄</th>
                        <th class="p-2 border align-middle text-amber-700 font-bold">😢</th>
                    </tr>
                </thead>
                <tbody class="bg-amber-300/30">
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">1. Mi audio incluye los tres aspectos señalados en las instrucciones.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">2. Mi audio incluye los horarios en los que realizo las actividades.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">3. Mis frases están completas: sujeto + verbo conjugado + complemento.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">4. Revisé la pronunciación.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">5. Practiqué mi presentación antes de grabarla.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>Téléverse ton fichier audio ici / Sube aquí tu archivo de audio.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t9a25', "Français I Unité 2", $ActividadContent);
    ?>

    <?php ob_start(); ?>
    <p>Réponds au questionnaire et sélectionne la bonne réponse / Responde el cuestionario, selecciona la respuesta correcta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t9a26', "Évaluation finale de l'unité", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
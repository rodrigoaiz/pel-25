<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

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
                        <li>J'adore les maths.</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>J'adore</li>
                        <li>Tu adores</li>
                        <li>Il /Elle/On adore</li>
                        <li>Nous adorons</li>
                        <li>Vous adorez</li>
                        <li>Ils/Elles adorent</li>
                        <li>J'adore les maths.</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>J'adore</li>
                        <li>Tu adores</li>
                        <li>Il /Elle/On adore</li>
                        <li>Nous adorons</li>
                        <li>Vous adorez</li>
                        <li>Ils/Elles adorent</li>
                        <li>J'adore les maths.</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>J'adore</li>
                        <li>Tu adores</li>
                        <li>Il /Elle/On adore</li>
                        <li>Nous adorons</li>
                        <li>Vous adorez</li>
                        <li>Ils/Elles adorent</li>
                        <li>J'adore les maths.</li>
                    </ul>
                </td>
                <td class="px-3 py-2 border align-middle text-violet-700">
                    <ul class="list-none">
                        <li>J'adore</li>
                        <li>Tu adores</li>
                        <li>Il /Elle/On adore</li>
                        <li>Nous adorons</li>
                        <li>Vous adorez</li>
                        <li>Ils/Elles adorent</li>
                        <li>J'adore les maths.</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>


</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
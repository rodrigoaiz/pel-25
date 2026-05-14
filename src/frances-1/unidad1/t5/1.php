<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Production orale</h2>
    <h3>Producción oral</h3>
    <p>Para autoevaluar tu aprendizaje a lo largo de esta unidad, te proponemos la siguiente actividad: presentarse en un contexto formal e informal.</p>
    <p><strong>Instrucciones:</strong></p>
    <div class="flex justify-center gap-4">
        <div class="w-2/3 sm:full">
            <ol class="ol-number">
                <li>El <span class="bg-orange-500/30 text-orange-600 p-1">primer día de clase, le preguntas a tu profesor /profesora de francés</span> cómo se llama. El/ella te responde con un saludo y su nombre. Prepara el diálogo.</li>
                <li>Un compañero de clase te pregunta cómo te llamas, responde con un saludo, tu nombre, tu apellido. Prepara el diálogo.</li>
                <li>Revisa la <span class="bg-amber-500/30 text-amber-600 p-1">rúbrica de autoevaluación</span> que te proponemos para verificar que tus diálogos están completos.</li>
                <li>Grábalos en esta aplicación: <a href="https://vocaroo.com/" target="_blank">https://vocaroo.com/</a> y súbelos en la pestaña indicada.</li>
            </ol>
        </div>
        <div class="w-1/3 sm:full pt-8">
            <?php
            renderImage('fr1u1a1p4-img18.webp');
            ?>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-2/3">
            <table class="table-auto w-full">
                <thead class="bg-amber-300/50">
                    <tr>
                        <th colspan="3" class="p-2 border align-middle bg-amber-600 text-amber-50 font-bold text-center">Rubrica de evaluación</th>
                    </tr>
                    <tr>
                        <th class="p-2 border align-middle text-amber-700 font-bold">Los diálogos del alumno</th>
                        <th class="p-2 border align-middle text-amber-700 font-bold">😄</th>
                        <th class="p-2 border align-middle text-amber-700 font-bold">😢</th>
                    </tr>
                </thead>
                <tbody class="bg-amber-300/30">
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">1. Respetan el contexto propuesto (formal o informal)</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">2. Empiezan con una pregunta.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">3. Incluyen un saludo.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">4. Mencionó nombre y apellido.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">5. Puso atención a la entonación de las preguntas y los saludos. </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">6. Puso atención a la pronunciación (alfabeto, vocabulario).</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                    <tr>
                        <td class="px-3 py-2 border align-middle text-amber-700 font-semibold">7. Se percibe que practicó sus diálogos antes de grabarlos.</td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                        <td class="px-3 py-2 border align-middle text-amber-700"> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1a2', "Producción oral", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

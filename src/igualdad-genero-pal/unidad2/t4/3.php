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
    <h2>Propuesta de la sana convivencia</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Generar propuestas de una sana convivencia en su contexto educativo.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Con base en la información del <a href="<?php echo PATH_DOCS . 'u2t10-EticaDG.pdf'; ?>" target="_blank">Código de Ética y Equidad de Género para Estudiantes del Colegio (CCH,2025)</a> , identifica 3 elementos de la sana convivencia y sus características.</li>
        <li>Diseña una infografía (una sola página o recuadro) que incluya:
            <ul class="ul-disc ml-10">
                <li>Elementos de una sana convivencia (mínimo 3)</li>
                <li>Características de cada elemento</li>
                <li>Importancia de fortalecer actitudes y valores de responsabilidad, respeto y convivencia con los demás.</li>
            </ul>
            Puedes usar herramientas gratuitas como <a href="https://www.canva.com/es_mx/" target="_blank">Canva</a> o <a href="https://auth.genially.com/es/login?backTo=https%3A%2F%2Fapp.genially.com%2F" target="_blank">Genially</a>, o hacer un recuadro en Word/Google Docs.
        </li>
        <li>A partir de los aprendizajes desarrollados a lo largo del curso, redacta tu propuesta incluyendo los siguientes apartados:
            <div class="overflow-x-auto my-4">
                <table class="w-full border-collapse border border-gray-400 text-sm">
                    <thead>
                        <tr class="bg-fuchsia-900 text-white">
                            <th class="border border-gray-400 p-2 text-center text-white" colspan="2">PROPUESTA DE SANA CONVIVENCIA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 p-2 font-bold w-1/3">Nombre de la Campaña:</td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2 font-bold">Objetivo:</td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 font-bold">Acción Central:</td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2 font-bold">Vínculo con el Curso:</td>
                            <td class="border border-gray-400 p-2">Sororidad [ ] &nbsp;&nbsp; Nueva Masculinidad [ ] &nbsp;&nbsp; Inclusión LGBTIQ+ [ ]<br>Porque: ___________________________________________</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 font-bold">Obstáculo Previsible:</td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2 font-bold">Idea para superarlo:</td>
                            <td class="border border-gray-400 p-2"></td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 font-bold">INFOGRAFÍA:</td>
                            <td class="border border-gray-400 p-2">Integra la infografía en tu propuesta.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>
        <li>Responde <strong>HONESTAMENTE</strong>. Tu sinceridad es más valiosa que una "respuesta perfecta".
            <div class="overflow-x-auto my-4">
                <table class="w-full border-collapse border border-gray-400 text-sm">
                    <thead>
                        <tr class="bg-fuchsia-900">
                            <th class="border border-gray-400 text-white p-2 text-left">CRITERIO</th>
                            <th class="border border-gray-400 text-white p-2 text-center">PUNTUACIÓN (1–5)</th>
                            <th class="border border-gray-400 text-white p-2 text-left">EVIDENCIA O JUSTIFICACIÓN BREVE (1 línea)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 p-2">Infografía completa (elementos, características, importancia)</td>
                            <td class="border border-gray-400 p-2 text-center">Selecciona: 1–5</td>
                            <td class="border border-gray-400 p-2">¿Incluiste los 3 elementos, sus características y la importancia?</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2">Propuesta coherente (acción realista y vinculada al objetivo)</td>
                            <td class="border border-gray-400 p-2 text-center">Selecciona: 1–5</td>
                            <td class="border border-gray-400 p-2">¿Tu acción central es realista y logra el objetivo?</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 p-2 font-bold">PUNTUACIÓN TOTAL</td>
                            <td class="border border-gray-400 p-2 text-center font-bold">/10</td>
                            <td class="border border-gray-400 p-2">Suma tus dos puntuaciones</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border border-gray-400 p-2 font-bold">COMENTARIO FINAL</td>
                            <td class="border border-gray-400 p-2" colspan="2">¿Qué concepto del curso entendiste mejor al hacer esta actividad? (1 línea)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </li>
        <li>Sube tu propuesta en un solo archivo <strong>.PDF</strong> que incluya:
            <ul class="ul-disc ml-10">
                <li>La propuesta completa (Nombre, Objetivo, Acción Central, Vínculo, Obstáculo, infografía).</li>
                <li>La autoevaluación integrada (tabla de 10 puntos).</li>
            </ul>
            Nombra el archivo: <strong>Nombre_Apellido_propuesta.pdf</strong> y entrega a la tarea designada en la plataforma.
        </li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a3', "Propuesta de la sana convivencia", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>¿Qué entendemos por Igualdad de Género?</h2>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('iga1-img02.webp');
        ?>
    </div>
    <p>Para explorar y contrastar con respeto las distintas opiniones sobre la igualdad de género, llevarás a cabo entrevistas breves. Esta actividad te permitirá analizar los fundamentos de dichas opiniones, fomentando un intercambio de ideas de forma respetuosa y tolerante.</p>
    <p class="font-bold text-orange-500">Propósitos:</p>
    <ul class="ul-disc ml-32">
        <li>Fomentar la escucha activa y el análisis crítico de diversas opiniones sobre conceptos relacionados con la igualdad de género.</li>
        <li>Examinar cómo las perspectivas sobre estos conceptos pueden variar entre diferentes generaciones.</li>
    </ul>
    <p class="font-bold text-orange-500">Instrucciones:</p>
    <ol class="ol-number ml-32">
        <li>Formación de Equipos
            <ul class="ul-disc">
                <li>Organícense en equipos para llevar a cabo entrevistas breves.</li>
            </ul>
        </li>
        <li>Escucha Respetuosa
            <ul class="ul-disc">
                <li>Escuchen atentamente las opiniones de las personas entrevistadas, provenientes de diferentes generaciones.</li>
                <li>Analicen cómo perciben o cómo han cambiado ciertos conceptos a lo largo del tiempo.</li>
            </ul>
            <div class=" w-5/6 bg-amber-600 p-4 text-sm text-amber-50 leading-none">
                <span class="text-white">IMPORTANTE:</span>
                <ul>
                    <li class="text-white">Realicen preguntas con claridad y escuchen con atención y respeto.</li>
                    <li class="text-white">Eviten juicios, estereotipos y confrontaciones.</li>
                </ul>
            </div>
        </li>
        <li>Selección de Conceptos
            <ul class="ul-disc">
                <li>De la lista " Conceptos básicos", elijan tres conceptos que consideren relevantes para sus entrevistas.</li>
            </ul>
            <table class="table-auto w-3/4 mx-auto text-neutral-200 bg-fuchsia-950 p-1 mt-2 rounded-lg text-sm">
                <thead>
                    <tr>
                        <th colspan="2" class="text-center text-xl text-yellow-100 pt-5">Conceptos básicos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-8">Perspectiva de género</td>
                        <td class="pr-4">Sexismo</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Igualdad y equidad de género</td>
                        <td class="pr-4">Techo de cristal y piso resbaloso</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Derechos Humanos</td>
                        <td class="pr-4">Machismo</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Igualdad sustantiva</td>
                        <td class="pr-4">Patriarcado</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Sistema sexo-género</td>
                        <td class="pr-4">Acoso</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Riesgo o códigos identitarios</td>
                        <td class="pr-4">Hostigamiento</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Expresión de género y orientación sexo-afectiva</td>
                        <td class="pr-4">Consentimiento</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Estereotipos y roles de género</td>
                        <td class="pr-4">Violencia</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Diversidades y disidencias sexo-genéricas</td>
                        <td class="pr-4">Violencia por cuestiones de género</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Lenguaje incluyente y no sexista</td>
                        <td class="pr-4">Violencia feminicida</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Interseccionalidad</td>
                        <td class="pr-4">Responsabilidad afectiva</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Redes de apoyo</td>
                        <td class="pr-4">Cultura de la paz</td>
                    </tr>
                    <tr>
                        <td class="pl-8">Discriminación</td>
                    </tr>
                </tbody>
            </table>
        </li>
        <li>Desarrollo de las Entrevistas
            <ul class="ul-disc">
                <li>Entrevisten a tres personas:
                    <ul>
                        <li class="leading-none">Una persona de su mismo rango de edad.</li>
                        <li class="leading-none">Una persona de entre 18 y 25 años.</li>
                        <li class="leading-none">Una persona mayor de 50 años.</li>
                    </ul>
                </li>
                <li>Soliciten a cada persona que explique los tres conceptos elegidos con sus propias palabras.</li>
                <li>Graben las respuestas en formato de audio.</li>
            </ul>
        </li>
        <li>Análisis y Elaboración de Nota de Voz:
            <ul class="ul-disc">
                <li>Analicen las respuestas obtenidas.</li>
                <li>Elaboren una nota de voz (audio) que responda a las siguientes preguntas:
                    <ul>
                        <li class="leading-none">¿Existen coincidencias o contrastes en las opiniones?</li>
                        <li class="leading-none">¿A qué las atribuyen?</li>
                        <li class="leading-none">¿Qué factores creen que influyen en las respuestas recabadas (edad, género, otros)?</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Entrega del audio:
            <ul class="ul-disc">
                <li>Analicen las respuestas obtenidas.
                    <ul>
                        <li>Suban la nota de voz o el archivo de audio.</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ol>
    <div class="w-lg mx-auto bg-orange-600 pl-4 pt-1 pb-2 text-sm leading-none">
        <p class="font-bold text-lg text-orange-50">Especificaciones del Audio:</p>
        <ul class="ul-disc ml-8">
            <li class=" text-orange-50">Máximo 5 minutos de duración.</li>
            <li class=" text-orange-50">Aseguren la coherencia y organización de la información.</li>
            <li class=" text-orange-50">Cuiden la calidad auditiva del audio.</li>
            <li class=" text-orange-50">Eviten errores de dicción en la conclusión.</li>
            <li class=" text-orange-50">Protejan la identidad de las personas entrevistadas.</li>
        </ul>
    </div>

    <div class="w-2/3 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-sm">
        <span class="text-white">NOTA IMPORTANTE:</span>
        <ul>
            <li class="text-white">Este material tiene fines didácticos y no debe ser compartido públicamente.</li>
        </ul>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
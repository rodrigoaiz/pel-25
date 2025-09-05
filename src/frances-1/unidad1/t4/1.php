<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Prononciation et diptongues</h2>
    <h3>Pronunciación y diptongos</h3>
    <p>La pronunciación en francés es un poco diferente a lo que estás acostumbrado del español. Debes de saber que el francés no se lee de forma fonética, es decir que hay varias maneras de escribir el mismo sonido y hay combinaciones de letras que se van a pronunciar con la emisión de un solo sonido, como si toda la combinación de letras fuera una sola. También hay letras que, aunque estén escritas, no las vas a pronunciar. En seguida tienes una tabla con algunas de las reglas de pronunciación:</p>

    <table class="table-auto w-full">
        <thead class="bg-purple-300/50">
            <tr>
                <th colspan="4" class="p-1 border">
                    <div class="text-center text-xl font-bold text-pink-950">PRONUNCIACIÓN</div>
                </th>
            </tr>
            <tr>
                <th class="px-2 py-2 border align-middle text-pink-700 text-center leading-none">Escritura en francés</th>
                <th class="px-2 py-2 border align-middle text-pink-700 text-center leading-none">Equivalencia del sonido en español</th>
                <th class="px-2 py-2 border align-middle text-pink-700 text-center leading-none">Escritura en francés</th>
                <th class="px-2 py-2 border align-middle text-pink-700 text-center leading-none">Equivalencia del sonido en español</th>
            </tr>
            <tr>
                <th colspan="2" class="px-2 py-1 border align-middle text-pink-800 text-center bg-purple-300/50 font-bold">Vocales</th>
                <th colspan="2" class="px-2 py-1 border align-middle text-pink-800 text-center bg-purple-300/50 font-bold">Consonantes</th>
            </tr>
        </thead>
        <tbody class="bg-purple-300/30">
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">a</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">a</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">b</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">b (labial)</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ai è ê</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">é</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">p</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">p</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">é</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">e</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">t</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">t</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">e</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">e cerrada</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ga gue gui go gu</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ga gue gui go gu</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">i y</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">i</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ca que qui co cu</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ca que qui co cu</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">u</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">Boca de u sonido de i</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">f ph</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">f</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ô</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ó</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">v</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">v (labiodental)</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">o</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">o</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ss ç ce ci s (principio) t (terminación -tion)</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">s</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ou</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">u</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">z s (entre vocales)</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">z</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">eu œu</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">Boca de o sonido de e</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ch</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">sh</td>
            </tr>
            <tr>
                <th colspan="2" class="px-2 py-1 border align-middle text-pink-800 text-center bg-purple-300/50 font-bold">Vocales nasales</th>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">j ge gi</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">y</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">am an<br>um un</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">a abierta y en la nariz</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">m (entre vocales o al principio)</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">m</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">em en<br>im in</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">a cerrada y en la nariz</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">n (entre vocales o al principio)</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">n</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">om on</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">o en la nariz</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">gn</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">ñ</td>
            </tr>
            <tr>
                <th colspan="2" class="px-2 py-1 border align-middle text-pink-800 text-center bg-purple-300/50 font-bold">Semi-consonantes</th>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">l</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">l</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">il ill</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">y</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">r rr</td>
                <td class="px-2 py-1 border align-middle text-purple-700 leading-none">r gutural (en la garganta)</td>
            </tr>
            <tr>
                <td class="px-2 py-1 border align-top text-purple-700 leading-none"><br><br> oi <br><br><br><br><br><br> ui</td>
                <td class="px-2 py-1 border align-top text-purple-700 leading-none"><br><br> ua <br><br><br><br><br><br> ui</td>
                <td colspan="2" class="px-2 border align-top text-purple-700 leading-none">
                    <div class="text-sm">
                        <p class="font-bold text-purple-900">Reglas importantes:</p>
                        <ul class="list-disc">
                            <li class="text-purple-900">No se pronuncia la consonante final, a excepción de la f, la l, la k, la c y la q. La r final se pronuncia si antes hay alguna vocal diferente que e si acento.</li>
                            <li class="text-purple-900">Jamás se pronuncia la e final sin acento. Las otras vocales y las e con acento, al final de palabra, se pronuncian.</li>
                            <li class="text-purple-900">Una s final hace la letra que está antes de la s se comporte como si fuera una letra final.</li>
                            <li class="text-purple-900">Todas las palabras en francés se acentúan en la última sílaba pronunciada.</li>
                            <li class="text-purple-900">La y se lee como si fuera una doble i.</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <p>Como podrás notar, en francés, existen los diptongos y triptongos, que son combinaciones de vocales que deben pronunciarse de forma especial. Conocerlos y ponerlos en práctica te ayudará a desarrollar una pronunciación correcta del francés.</p>
    <p>Observa esta tabla.</p>
    <table class="table-auto w-full">
        <thead class="bg-emerald-300/50">
            <tr>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">Diptongo/Triptongo</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">Sonido aproximado</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">Ejemplos</th>
            </tr>
        </thead>
        <tbody class="bg-emerald-300/30">
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">-ai</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">E abierta</td>
                <td class="px-3 py-2 border align-middle text-emerald-700">
                    <span class="italic font-medium">J'ai</span> /
                    <span class="italic font-medium">Maison</span> /
                    <span class="italic font-medium">j'aime</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">-au</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">O</td>
                <td class="px-3 py-2 border align-middle text-emerald-700">
                    <span class="italic font-medium">Restaurant</span> /
                    <span class="italic font-medium">faux</span> /
                    <span class="italic font-medium">australien</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">-eau</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">O</td>
                <td class="px-3 py-2 border align-middle text-emerald-700">
                    <span class="italic font-medium">Beaucoup</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">-oi</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">UÁ</td>
                <td class="px-3 py-2 border align-middle text-emerald-700">
                    <span class="italic font-medium">Moi</span> /
                    <span class="italic font-medium">histoire</span> /
                    <span class="italic font-medium">chinois</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">-ou</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">U</td>
                <td class="px-3 py-2 border align-middle text-emerald-700">
                    <span class="italic font-medium">Écoute</span> /
                    <span class="italic font-medium">bonjour</span> /
                    <span class="italic font-medium">douze</span>
                </td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">-eu</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">E cerrada</td>
                <td class="px-3 py-2 border align-middle text-emerald-700">
                    <span class="italic font-medium">Deux</span> /
                    <span class="italic font-medium">peu</span>
                </td>
            </tr>
        </tbody>
    </table>
    <?php ob_start(); ?>
    <p>¿En cuáles palabras encuentras cada sonido? Arrastra las palabras que contengan el sonido o, e abierta, e cerrada u o ua a la columna correspondiente.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a8', "Sonidos o | e abierta | e cerrada | u | ua", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Escucha las palabras y escribe "ai" si escuchas una é abierta; "eau o au" si escuchas una "o", "ou" si escuchas u, "eu o oeu" si escuchas una e cerrada o "oi" si escuchas el sonido "ua". Escribe tus respuestas tal y como aparecen en las instrucciones, pero sin comillas.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a9', "Escuchar sonidos o | e abierta | e cerrada | u | ua", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Aqui tienes unas diez palabras con diptongos y triptongos. Escucha la pronunciación y repítela para entrenarte. En la parte de atrás de la tarjeta vas a encontrar una aproximación de como escribirías la palabra si la escribieras en español.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t4a10', "Diptongos y triptongos", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
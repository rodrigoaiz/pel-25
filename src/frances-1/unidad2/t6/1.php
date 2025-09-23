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

    <table class="table-auto border-collapse border-3 border-gray-600">
        <!-- Encabezados -->
        <thead>
            <tr>
                <th colspan="6" class="border-3 border-gray-600 bg-gray-600 p-2 text-center text-2xl text-white-own">L'emploi du temps de Julien.</th>
            </tr>
            <tr>
                <th class="border-3 border-gray-600 p-2 text-center align-top bg-gray-200 font-bold">Hora</th>
                <th class="border-3 border-gray-600 p-2 text-center align-top bg-gray-200 font-bold">lun. 25 jan.</th>
                <th class="border-3 border-gray-600 p-2 text-center align-top bg-gray-200 font-bold">mar. 26 jan.</th>
                <th class="border-3 border-gray-600 p-2 text-center align-top bg-gray-200 font-bold">mer. 27 jan.</th>
                <th class="border-3 border-gray-600 p-2 text-center align-top bg-gray-200 font-bold">jeu. 28 jan.</th>
                <th class="border-3 border-gray-600 p-2 text-center align-top bg-gray-200 font-bold">ven. 29 jan.</th>
            </tr>
        </thead>
        <tbody>
            <!-- 08:00 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">08h00</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"></td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-violet-800 text-white text-sm align-middle">SCIENCES VIE & TERRE<br>LECOQ D.<br>308 TP Phys</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-pink-600 text-white text-sm align-middle">ACCOMPAGNEMT PERSO.<br>BEUNAICHE E.<br>LAVERGNE S.<br>209 Anglais<br>CDI (Salle info)</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-violet-800 text-white text-sm align-middle">PHYSIQUE-CHIMIE<br>OLLIVER S.<br>310</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-yellow-400 text-white text-sm align-middle">CREAT.INNOV.TECHNO.<br>NOËL F.<br>[2GTGR2]<br>E17 (ITEC)</td>
            </tr>
            <!-- 09:00 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">09h00</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-lime-600 text-white text-sm align-middle">SC. ECONO & SOCIALES<br>MAHIER B.<br>310</td>
            </tr>

            <!-- 10:00 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">10h00</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-cyan-700 text-white text-sm align-middle">ED. PHYSIQUE & SPORT<br>DEGIVE S.<br>Gymnase</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-blue-700 text-white text-sm align-middle">MATHEMATIQUES<br>BEUNAICHE E.<br>103</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-blue-700 text-white text-sm align-middle">MATHEMATIQUES<br>BEUNAICHE E.<br>103</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-orange-500 text-white text-sm align-middle">FRANCAIS<br>BODIOU A.<br>105</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-yellow-400 text-white text-sm align-middle">SCIENCES INGENIEUR<br>GARCONNET G.<br>[2GTGR2]<br>E16 SI-CIT</td>
            </tr>

            <!-- 11:00 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">11h00</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-gray-500 text-white text-sm align-middle">ETUDE SURVEILLEE<br>[2LVESP]</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-yellow-400 text-white text-sm align-middle">HISTOIRE-GEOGRAPHIE<br>SAUSSAIS F.<br>102</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-yellow-400 text-white text-sm align-middle">HISTOIRE-GEOGRAPHIE<br>SAUSSAIS F.<br>102</td>
            </tr>

            <!-- 12:00 -->
            <tr class="h-24">
                <td class="border-3 border-gray-600 p-2 text-center align-middle">12h00</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle striped"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
            </tr>
            <!-- 13:00 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">13h00</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"></td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"></td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle striped"></td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"></td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"></td>
            </tr>

            <!-- 13:30 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">13h30</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-emerald-400 text-white text-sm align-middle">ANGLAIS LV1<br>LAVERGNE S.<br>S. réunion</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-yellow-400 text-white text-sm align-middle">HISTOIRE-GEOGRAPHIE<br>SAUSSAIS F.<br>107</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle striped"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center bg-blue-700 text-white text-sm align-middle">MATHEMATIQUES<br>BEUNAICHE E.<br>103</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-emerald-400 text-white text-sm align-middle">ANGLAIS LV1<br>LAVERGNE S.<br>204 Argéas</td>
            </tr>

            <!-- 14:30 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">14h30</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-orange-500 text-white text-sm align-middle">FRANCAIS<br>BODIOU A.<br>105</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle striped"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center bg-pink-600 text-white text-sm align-middle">ACCOMPAGNEMT PERSO.<br>NOËL F.<br>GARCONNET G.<br>@COURS 2 [D13]</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
            </tr>

            <!-- 15:30 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">15h30</td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-orange-500 text-white text-sm align-middle">FRANCAIS<br>BODIOU A.<br>105</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle striped"> ---------- </td>
                <td rowspan="2" class="border-3 border-gray-600 p-2 text-center bg-purple-950 text-white text-sm align-middle">ESPAGNOL LV2<br>CORRE P.<br>[2LVESP]<br>203 VSP</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
            </tr>
            <!-- 17:30 -->
            <tr>
                <td class="border-3 border-gray-600 p-2 text-center align-middle">17h30</td>
                <td class="border-3 border-gray-600 p-2 text-center bg-violet-800 text-white text-sm align-middle">PHYSIQUE-CHIMIE<br>OLLIVER S.<br>[2GTGR2]<br>304 TP Phys inf</td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle striped"> ---------- </td>
                <td class="border-3 border-gray-600 p-2 text-center align-middle"> ---------- </td>
            </tr>
        </tbody>
    </table>
    <p class="mt-10">Con base en lo observado realiza el siguiente ejercicio:</p>
    <?php ob_start(); ?>
    <p>Après avoir regardé la vidéo, répondez au questionnaire suivant / Selecciona "Verdadero" si la afirmación es cierta o "Falso" si es incorrecta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t5a15', "Horarios de Julien 1", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>À partir de l'emploi de temps de Jullien, réponds aux questions (fais attention aux majuscules, minuscules, à l'orthographe et aux accents et écris les nombres en chiffres) / A partir del horario de Jullien, responde a las preguntas (ten cuidado con las mayúsculas, minúsculas, la ortografía, los acentos y escribe los números en cifras)</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t5a16', "Horarios de Julien 2", $ActividadContent);
    ?>

    <p class="mt-10">Cuando nosotros queremos indicar que materias tenemos, podemos decirlo de dos formas: usando el verbo FAIRE o usando el verbo AVOIR + COURS DE + la materia.</p>
    <div class="flex justify-center gap-4">
        <div class="w-1/2 sm:full bg-indigo-500/30 px-6 shadow-xl">
            <p class="font-bold text-indigo-800 text-lg">FAIRE</p>
            <ul class="list-none ext-indigo-800 text-lg">
                <li>Je fais <strong>de l</strong>'anglais.</li>
                <li>Tu fais <strong>du</strong> francais.</li>
                <li>Elle fait <strong>des</strong> maths.</li>
                <li>Nous faisons <strong>de la</strong> chimie.</li>
                <li>Vous faites <strong>de l'</strong>histoire.</li>
                <li>Ils font <strong>de l'</strong>éducation musicale.</li>
        </div>
        <div class="w-1/2 sm:full bg-fuchsia-500/30 px-6 shadow-xl">
            <p class="font-bold text-fuchsia-800 text-lg">AVOIR COURS DE</p>
            <ul class="list-none ext-fuchsia-800 text-lg">
                <li>J'ai cours <strong>d'</strong>anglais.</li>
                <li>Tu as cours <strong>de</strong>francais.</li>
                <li>Elle a cours <strong>de</strong>maths.</li>
                <li>Nous avons cours <strong>de</strong>chimie.</li>
                <li>Vous avez cours <strong>d'histoire</strong>.</li>
                <li>Ils ont cours <strong>d'éducation</strong> musicale.</li>
        </div>
    </div>
    <p class="mt-10">Como puedes observar, cuando usamos el verbo faire, debemos acompañar el nombre de la materia con DU (masculino), DE L' (la palabra empieza con vocal o H), DE LA (femenino) o DES (plural). Cuando usamos AVOIR COURS DE o D', sólo debemos poner atención al inicio de la palabra (si empieza con vocal o con h se usa D'). </p>
    <div class="max-w-xl mx-auto bg-blue-700/30 p-4">
        <?php
        renderVideoIframe('TVDJxYJpcMg', 'Le dialogue sur L emploi du Temps • FLE • A1');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Regarde la vidéo et réponds aux questions (écris les nombres en chiffres et les mots en minuscules et fais attention à l'orthographe et aux accents) / Mira el video y responde a las preguntas (escribe los números en cifras, las palabras en minúsculas y ten cuidado con la ortografía y los acentos)</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t5a17', "Diálogo sobre el empleo de los tiempos", $ActividadContent);
    ?>

    <table class="table-auto w-full">
        <thead class="bg-emerald-300/50">
            <tr>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold"></th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">lundi</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">mardi</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">mercredi</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">jeudi</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">vendredi</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">samedi</th>
                <th class="p-2 border align-middle text-emerald-700 text-center font-bold">dimanche</th>
            </tr>
        </thead>
        <tbody class="bg-emerald-300/30">
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">8h - 10h</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">maths</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">anglais</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">anglais</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">histoire</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">français</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">10h - 12h</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">français</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">histoire</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">maths</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">chimie</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">anglais</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">12h - 13h</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">maths</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">13h - 15h</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">football</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">dessin</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">français</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
            </tr>
            <tr>
                <td class="px-3 py-2 border align-middle text-emerald-700 font-semibold text-center">15h - 17h</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">tennis</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">natation</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center">tennis</td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
                <td class="px-3 py-2 border align-middle text-emerald-700 text-center"></td>
            </tr>
        </tbody>
    </table>
    <?php ob_start(); ?>
    <p>Regarde l'emploi de temps de Pauline et réponds aux questions (écris tout en minuscules et fais attention à l'orthographe et aux accents) / Mira el horario de Pauline y responde a las preguntas (escribe todo en minúsculas y ten cuidado con la ortografía y los acentos)</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t5a18', "Horarios de Pauline", $ActividadContent);
    ?>

</section>

<style>
    .striped {
        background-image: linear-gradient(45deg, #ccc 25%, transparent 25%, transparent 50%, #ccc 50%, #ccc 75%, transparent 75%, transparent);
        background-size: 10px 10px;
    }
</style>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
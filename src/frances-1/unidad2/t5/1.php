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
    <h2>Mon emploi du temps</h2>
    <h3>Mi horario</h3>
    <p>En esta lección conocerás el horario de un liceo francés, aprenderás el vocabulario de las materias y podrás indicar a qué hora tienes clase.</p>
    <p class="mt-4">Observa el siguiente horario escolar y realiza las actividades a partir de la información que ahí encontrarás.</p>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Colores según asignatura */
        .green {
            background-color: #2e8b57;
            color: white;
        }

        .blue {
            background-color: #4169e1;
            color: white;
        }

        .red {
            background-color: #dc143c;
            color: white;
        }

        .orange {
            background-color: #ffa500;
            color: black;
        }

        .yellow {
            background-color: #ffff00;
            color: black;
        }

        .cyan {
            background-color: #00ffff;
            color: black;
        }

        .gray {
            background-color: #d3d3d3;
            color: black;
        }

        .purple {
            background-color: #8a2be2;
            color: white;
        }

        .striped {
            background-image: linear-gradient(45deg, #ccc 25%, transparent 25%, transparent 50%, #ccc 50%, #ccc 75%, transparent 75%, transparent);
            background-size: 10px 10px;
        }
    </style>


    <h3 class="text-center">L'emploi du temps de Julien.</h3>

    <table>
        <!-- Encabezados -->
        <thead>
            <tr>
                <th>Hora</th>
                <th>lun. 25 jan.</th>
                <th>mar. 26 jan.</th>
                <th>mer. 27 jan.</th>
                <th>jeu. 28 jan.</th>
                <th>ven. 29 jan.</th>
            </tr>
        </thead>
        <tbody>
            <!-- 08:00 -->
            <tr>
                <td>08h00</td>
                <td rowspan="2" class="blue">SCIENCES VIE & TERRE<br>LECOQ D.<br>308 TP Phys</td>
                <td rowspan="2" class="red">ACCOMPAGNEMT PERSO.<br>BEUNAICHE E.<br>LAVERGNE S.<br>209 Anglais<br>CDI (Salle info)</td>
                <td rowspan="2" class="orange">PHYSIQUE-CHIMIE<br>OLLIVER S.<br>310</td>
                <td rowspan="2" class="yellow">CREAT.INNOV.TECHNO.<br>NOËL F.<br>[2GTGR2]<br>E17 (ITEC)</td>
            </tr>
            <!-- 09:00 -->
            <tr>
                <td>09h00</td>
                <td class="green">SC. ECONO & SOCIALES<br>MAHIER B.<br>310</td>
            </tr>

            <!-- 10:00 -->
            <tr>
                <td>10h00</td>
                <td class="cyan">ED. PHYSIQUE & SPORT<br>DEGIVE S.<br>Gymnase</td>
                <td class="blue">MATHEMATIQUES<br>BEUNAICHE E.<br>103</td>
                <td class="blue">MATHEMATIQUES<br>BEUNAICHE E.<br>103</td>
                <td class="orange">FRANCAIS<br>BODIOU A.<br>105</td>
                <td class="yellow">SCIENCES INGENIEUR<br>GARCONNET G.<br>[2GTGR2]<br>E16 SI-CIT</td>
            </tr>

            <!-- 11:00 -->
            <tr>
                <td>11h00</td>
                <td></td>
                <td></td>
                <td class="gray">ETUDE SURVEILLEE<br>[2LVESP]</td>
                <td class="yellow">HISTOIRE-GEOGRAPHIE<br>SAUSSAIS F.<br>102</td>
                <td class="yellow">HISTOIRE-GEOGRAPHIE<br>SAUSSAIS F.<br>102</td>
            </tr>

            <!-- 12:00 -->
            <tr>
                <td>12h00</td>
                <td></td>
                <td></td>
                <td class="striped"></td>
                <td></td>
                <td></td>
            </tr>

            <!-- 13:30 -->
            <tr>
                <td>13h30</td>
                <td class="cyan">ANGLAIS LV1<br>LAVERGNE S.<br>S. réunion</td>
                <td class="yellow">HISTOIRE-GEOGRAPHIE<br>SAUSSAIS F.<br>107</td>
                <td class="striped"></td>
                <td class="blue">MATHEMATIQUES<br>BEUNAICHE E.<br>103</td>
                <td class="cyan">ANGLAIS LV1<br>LAVERGNE S.<br>204 Argéas</td>
            </tr>

            <!-- 14:30 -->
            <tr>
                <td>14h30</td>
                <td></td>
                <td class="orange">FRANCAIS<br>BODIOU A.<br>105</td>
                <td class="striped"></td>
                <td class="red">ACCOMPAGNEMT PERSO.<br>NOËL F.<br>GARCONNET G.<br>@COURS 2 [D13]</td>
                <td></td>
            </tr>

            <!-- 15:30 -->
            <tr>
                <td>15h30</td>
                <td class="orange">FRANCAIS<br>BODIOU A.<br>105</td>
                <td class="purple">PHYSIQUE-CHIMIE<br>OLLIVER S.<br>[2GTGR2]<br>304 TP Phys inf</td>
                <td class="striped"></td>
                <td class="purple">ESPAGNOL LV2<br>CORRE P.<br>[2LVESP]<br>203 VSP</td>
                <td></td>
            </tr>

            <!-- 17:30 -->
            <tr>
                <td>17h30</td>
                <td></td>
                <td></td>
                <td class="striped"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>














    <p>Con base en lo observado realiza el siguiente ejercicio:</p>
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
            <?php
            renderImage('f1u2t4p1img1.webp');
            ?>

            <p class="text-indigo-800 text-lg mt-2">Elle n’est pas en couple et son email est : mgm.martin@yahoo.fr. Son numéro de téléphone mobil est le 06 34 24 36 et son numéro de téléphone fixe est le 05 56 22 38 40.</p>
        </div>
    </div>
    <?php ob_start(); ?>
    <p>À partir des informations de la pièce d'identité, fais glisser les données demandées dans le formulaire d'inscription / Usa la información de la credencial de identidad y arrastra los datos solicitados al formulario de inscripción.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t4a14', "Formulaire d’inscription", $ActividadContent);
    ?>

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
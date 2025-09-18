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
    <h2>M'inscrire à...</h2>
    <h3>Inscribirme a...</h3>
    <p>Para finalizar este aprendizaje, vamos a ver cómo te puedes inscribir a alguna actividad, como la biblioteca, a un centro deportivo o a algún curso., llenando un formulario. </p>
    <p class="mt-4">Ve el siguiente video: </p>
    <div class="w-2/3 mx-auto bg-fuchsia-700/30 p-4 my-6">
        <?php
        renderVideoIframe('C2upH0hcq2A', 'Faire une inscription à la bibliothèque');
        ?>
    </div>
    <p>Ahora realiza la siguiente actividad:</p>
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
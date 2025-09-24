<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Ma date de naissance</h2>
    <h3>Mi fecha de nacimiento</h3>
    <p>La forma para plantear la pregunta de fecha de nacimiento es la siguiente:</p>
    <p class="italic text-fuchsia-900 text-center text-xl">Quel est ta date de naissance?</p>
    <p>Existen tres formas para responder.</p>
    <ul class="list-disc">
        <li>Se puede utilizar la fórmula <span class="italic text-fuchsia-900 font-bold">"Ma date de naissance est..."</span>, como lo hace Chloé.</li>
        <li>También se puede decir como lo hace Max que utiliza la contracción <span class="italic text-fuchsia-900 font-bold">c'est.</span></li>
        <li>La otra forma es contestar: <span class="italic text-fuchsia-900 font-bold">je suis né...</span> (genero másculino) o <span class="italic text-fuchsia-900 font-bold">je suis née...</span> (género femenino). Esta respuesta quiere decir: "yo nací...".</li>
    </ul>
    <p class="mt-8">Después, utilizamos el artículo definido "le" y decimos la fecha en el siguiente orden: día <span class="italic text-fuchsia-900 font-bold">(jour)</span>, mes <span class="italic text-fuchsia-900 font-bold">(moi)</span>, año <span class="italic text-fuchsia-900 font-bold">(année)</span>.</p>
    <div class="border-y-2 border-dashed border-purple-300 bg-purple-300/10 p-2 text-center mt-8">
        ¡Importante! Démonos cuenta que el orden para decir la fecha de nacimiento es el mismo que en español (dia, mes y año de nacimiento). La única diferencia es que en francés no se pone la preposición "de" entre los datos de la fecha. </div>
    <p>Para practicar la pronunciación de los meses del año, puedes ver el siguiente video:</p>
    <?php
    renderVideoIframe('2SJcXH28qGg', 'Apprendre les mois de l année en français (Los meses del año en francés)');
    ?>
    <?php ob_start(); ?>
    <p>Regardez la vidéo suivante puis, à l'aide des tableaux, déterminez votre date de naissance / Revisa el siguiente vídeo y luego con la ayuda de las tablas, di cuál es tu fecha de nacimiento.</p>
    <p class="italic text-fuchsia-900 text-center mt-4">- Quelle est ta date de naissance?</p>
    <p class="italic text-fuchsia-900 text-center">Ma date de naissance est le________________________.
    </p>
    <div class="max-w-xl mx-auto bg-cyan-700/30 p-4 my-6">
        <?php
        renderVideoIframe('Vla6aB-L1XA', 'Date de naissance');
        ?>
    </div>
</section>
<div class="flex justify-center gap-6">
    <div class="w-1/4 md:2/3 bg-rose-500/30 text-rose-700 p-6 shadow-xl">
        <?php
        renderImage('f1u2t1p3img1.webp');
        ?>
    </div>
    <div class="w-1/4 md:2/3 bg-indigo-500/30 text-indigo-800 p-6 shadow-xl">
        <?php
        renderImage('f1u2t1p3img2.webp');
        ?>
    </div>
</div>
<section>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t2a4', "Foro | Ma date de naissance...", $ActividadContent);
    ?>
    <p class="mt-10"><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>
            <p>Regarde la vidéo et choisis la bonne réponse / Mira el vídeo y elige la respuesta correcta.</p>
        </li>
    </ol>

    <div class="max-w-xl mx-auto bg-purple-700/30 p-4 my-6">
        <?php
        renderVideoIframe('nJsx6IIB2LU', 'La date de naissance');
        ?>
    </div>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t2a5', "La date de naissance", $ActividadContent);
    ?>
    <p class="mt-10"><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Regarde les dates de naissance de ces 5 chanteurs francophones / Descubre las fechas de nacimiento de estos 5 cantantes francófonos.</li>
        <li>Glisse les dates pour compléter le texte / Arrastra las fechas para completar el texto
            <ul class="list-disc">
                <li><span class="font-bold">Louane -</span> 26/11/ 1996</li>
                <li><span class="font-bold">Louis Albi -</span> 3/05/2002</li>
                <li><span class="font-bold">Stromae -</span> 12/03/1985</li>
                <li><span class="font-bold">Vianney -</span> 13 /02/ 1991</li>
                <li><span class="font-bold">Adèle Castillon -</span> 24/10/2001</li>
            </ul>
        </li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividadH5P('u2t2a6', "Les dates de naissance", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
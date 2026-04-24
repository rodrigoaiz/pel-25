<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ActividadH5P.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>El comentario</h2>

    <p>Es tiempo de leer algún texto sobre el cual haremos un <strong>comentario</strong> que tendrá un inicio, un desarrollo y un cierre. Para llevar a cabo esta actividad necesitamos hacer, por lo menos, tres fichas de trabajo, como se muestra a continuación:</p>

    <div class="my-8 max-w-3xl mx-auto">
        <div class="bg-slate-700 text-white text-center py-3 rounded-t-lg font-bold tracking-wide text-lg">Comentario sobre un texto</div>
        <div class="grid grid-cols-2 border border-t-0 border-gray-300 rounded-b-lg overflow-hidden">

            <div class="bg-sky-500/10 border-b border-r border-gray-300 px-5 py-4">
                <p class="font-bold text-sky-700">Primer párrafo</p>
                <p class="text-gray-600 text-sm">Inicio</p>
            </div>
            <div class="bg-sky-500/10 border-b border-gray-300 px-5 py-4">
                <p class="font-bold text-sky-700">Ficha 1</p>
                <p class="text-gray-700 text-sm">Vida y obra del autor</p>
            </div>

            <div class="bg-violet-500/10 border-b border-r border-gray-300 px-5 py-4">
                <p class="font-bold text-violet-700">Segundo párrafo</p>
                <p class="text-gray-600 text-sm">Desarrollo</p>
            </div>
            <div class="bg-violet-500/10 border-b border-gray-300 px-5 py-4">
                <p class="font-bold text-violet-700">Ficha 2</p>
                <p class="text-gray-700 text-sm">Resumen de la historia</p>
            </div>

            <div class="bg-amber-500/10 border-r border-gray-300 px-5 py-4">
                <p class="font-bold text-amber-700">Tercer párrafo</p>
                <p class="text-gray-600 text-sm">Cierre</p>
            </div>
            <div class="bg-amber-500/10 px-5 py-4">
                <p class="font-bold text-amber-700">Ficha 3</p>
                <p class="text-gray-700 text-sm">Valoración personal del texto</p>
            </div>

        </div>
    </div>

    <p>La información sobre la <strong>primera ficha</strong> puedes encontrarla en alguna enciclopedia de autores o en la red; la <strong>segunda</strong> es el producto de tu lectura del texto y la <strong>tercera</strong> tendrás que hacerla a partir de todos los elementos que te hayan parecido interesantes de la obra; en esta parte podrás decir si la obra te gustó o no y por qué.</p>

    <p>Luego que hayas terminado tus fichas, deberás escribir el borrador de tu comentario en una cuartilla, mismo que entregarás en su versión final al profesor(a).</p>

    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Deberás elegir un texto; puede ser un texto corto o un capítulo de libro, de preferencia cuento o novela.</li>
        <li>Posteriormente, elabora tus fichas y, finalmente, elabora tu comentario y súbelo a la plataforma.</li>
        <li>Envía la actividad para su evaluación. No olvides incluir tus datos personales.</li>
        <li>Consulta la <a href="<?php echo PATH_DOCS . 'u2t2a5-rubrica-comentario.pdf'; ?>" target="_blank">rúbrica</a> con el que se evaluará tu actividad. </li>
    </ol>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t2a5', "Comentario sobre un texto", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
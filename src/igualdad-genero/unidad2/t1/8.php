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
    <h2>Actividad: La violencia de género es un tema de salud pública</h2>
    <div class="grid grid-cols-3 gap-4">
        <div><?php
                renderImage('iga7-img05.webp');
                ?></div>
        <div class="col-span-2">
            <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
            <p>Reconocer las consecuencias de la violencia de género como un problema de salud pública, y su impacto en el bienestar de las mujeres y niñas.</p>
            <p><strong>Instrucciones:</strong></p>
            <p>Identifica en algún portal de noticias un caso en violencia de género que haya ocurrido en México y con base en él, elabora una infografía que contesta las siguientes preguntas:</p>
        </div>
    </div>
    <ol class="ol-number md:ml-32">
        <li>Explica brevemente la noticia.</li>
        <li>¿Qué tipo de violencia identificas? Explica tu respuesta.</li>
        <li>¿Qué modalidad de violencia identificas? Explica tu respuesta.</li>
        <li>Explica por qué el caso que identificaste es un problema de salud pública, qué afectaciones se originan en la víctima y en su contexto social.</li>
        <li>Elabora una propuesta para que ya no ocurran casos como el que ejemplificaste.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Adjunta tu archivo en este apartado. Nombra el archivo de la siguiente manera: Nombre_Apellido_Infografia_SaludPublica</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t7a7', "La violencia de género es un tema de salud pública", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

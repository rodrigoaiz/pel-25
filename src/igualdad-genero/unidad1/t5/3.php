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
    <h2>Definición de la cultura de la igualdad</h2>
    <div class="grid grid-cols-3 gap-4">
        <div><?php
                renderImage('iga5-img2.webp');
                ?></div>
        <div class="col-span-2">
            <p>En esta sección exploraremos un concepto fundamental para construir sociedades justas e inclusivas: <strong>la cultura de la igualdad.</strong> Para ello es importante que sepas que la cultura no se limita a la declaración de que todas las personas somos iguales ante la ley. Más bien una auténtica igualdad se cimenta en la aspiración real de que así sea.</p>
        </div>
    </div>
    <p>Esto implica reconocer que, para que la igualdad sea una realidad tangible en la vida de cada persona, es necesario superar las desigualdades preexistentes y garantizar que todos y todas tengamos las mismas oportunidades para desarrollarnos plenamente. En la infografía que presentamos a continuación conocerás estos conceptos clave y su vital importancia en el camino hacia una verdadera igualdad de género.</p>
    <div class="w-xl mx-auto">
        <?php
        renderImage('u1t5-infografia-cultura-de-la-igualdad-junio.webp');
        ?>
    </div>
    <p>Ahora que has revisado un poco más sobre el concepto de cultura de la igualdad, te invitamos a realizar la siguiente actividad.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>A partir de la interpretación de la infografía fortalecerás conocimientos previos acerca de la cultura de la igualdad.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>A partir de la información que revisaste en la infografía, escribe en un párrafo tu propia definición de la cultura de la igualdad.</li>
        <li>Ya que tu definición esté completa, tómale una foto y sube el archivo en la sección que te indique tu profesora o profesor.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t5a2', "Definición de la cultura de la igualdad", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
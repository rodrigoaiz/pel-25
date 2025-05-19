<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h3>Formatos de audio</h3>
    <p>En esta sección explicaremos las características de los formatos de audio, para posteriormente aplicarlos. </p>
    <?php
    renderImagePleca('u4_t2_multimedia.webp', 'Audio. Imagen de Eucalyp.', 'https://www.flaticon.es/icono-gratis/multimedia_1644133?term=audio&page=1&position=23&origin=search&related_id=1644133', 'Flaticon.', 'justify-center');
    ?>
    </div>
    <p>La señal sonora que el oído percibe es analógica y se denomina audio. Por lo que, el audio es un sistema de señal analógica que se emplea para amplificar en las bocinas o escuchar música en auriculares. (Ferrer, 2015). Es decir, el audio se deriva del sonido que puede ser grabado, editado y reproducido.</p>
    <div class="max-w-2xl mx-auto border-y-8 border-indigo-600"><span class="text-pink-600 font-bold italic">Atencion:</span> Sabías que el oído humano tolera 55 dB, ruidos mayores a 60 dB pueden provocar malestares (OMS)</div>
    <p>Los archivos de audio pueden tener diferente formatos y tamaños, donde los usuarios están familiarizados sólo con el formato MP3, aun cuando existen otros formatos de audio con mejor calidad.</p>
    <div class="mx-auto max-w-xl">
        <?php renderImage('u4_t2_escritorio.webp', 'Audio. Imagen de freepik.', 'https://www.freepik.es/vector-gratis/fondo-espacio-trabajo-diseno-grafico-escritorio-herramientas_2047446.htm#query=computadora%20tableta%20audifonos&position=14&from_view=search&track=ais&uuid=10c1b7f0-9fb6-4876-a8ae-8fe705eb4494', 'Freepik.'); ?>
    </div>
    <?php ob_start(); ?>
    <p>Antes de comenzar, responde a la siguiente pregunta.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a9', "Tipos de grabación", $ActividadContent);
    ?>
    <div class="mx-auto max-w-xl">
        <?php renderImage('u4_t2_como_conocer_calidad_archivo_audio.webp'); ?>
    </div>
    <?php ob_start(); ?>
    <p>Ahora, revisa las siguientes tarjetas para aprender más sobre los formatos de audio. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a10', "Formatos de audio y sus características", $ActividadContent);
    ?>
    <?php ob_start(); ?>
    <p>Realiza la siguiente actividad para reforzar tus conocimientos. </p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4a11', "Formatos de audio", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

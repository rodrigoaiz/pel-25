<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Bienvenida a la unidad 4</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 items-center">
      <div class="order-1 md:order-0">
          <?php
          renderImage('u4t1p01_inclusion.webp');
          ?>
      </div>
      <div class="col-span-2">
        <p>Hola, a lo largo de esta unidad hablaremos sobre los <strong>Derechos Humanos,</strong> la <strong>Justicia</strong> y la <strong>Inclusión</strong> con la finalidad de que tu como ceceacher@ promuevas el <strong>respeto</strong>, la <strong>equidad</strong> y la <strong>dignidad</strong> de todas las personas, reflexionando sobre los valores fundamentales que nos permiten construir una sociedad más justa, solidaria y <strong>libre de discriminación, violencia y exclusión.</strong></p>
      </div>
    </div>
    <p class="mt-8">Para comenzar observa el siguiente video <strong>(hasta el minuto 4:04)</strong></p>
    <div class="max-w-xl mx-auto mt-10">
        <?php
        renderVideoIframe('1xi3P5jr7eo', '¿Qué son los derechos humanos? [Características y clasificación]');
        ?>
    </div>

    <p class="mt-10">Después de haber visto el video sobre los derechos humanos participa en el foro de discusión: “Lo que conozco sobre los derechos humanos”.</p>
    <?php ob_start(); ?>
    <p>Participa aquí en el foro.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 content-center mt-4">
        <div class="col-span-2">
            <p><strong>Instrucciones:</strong></p>
            <ol class="ol-number md:ml-16">
                <li>Ingresa al foro y comparte tu respuesta a lo siguiente: <strong>Menciona un derecho humano y da un ejemplo de cuándo se respeta y cuándo se viola.</strong></li>
                <li>Además de participar revisa y comenta al menos dos respuestas de tus compañeras y compañeros.</li>
            </ol>
        </div>
        <div>
            <?php
            renderImage('u4t1p01_diversidad.webp');
            ?>
        </div>
    </div>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4t1a1', "Lo que conozco sobre los Derechos Humanos", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

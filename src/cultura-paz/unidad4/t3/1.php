<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ActividadIframe.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Actividad de cierre</h2>
    <p>Ahora es momento de ver qué tanto aprendiste sobre los derechos humanos, justicia e inclusión.</p>
    <p>Como actividad final de esta unidad realizarás un cartel en donde promuevas la concientización sobre la <strong>NO</strong> violencia escolar, se lo más creativo posible. Puedes utilizar diferentes herramientas digitales o incluso realizarlo en una cartulina y tomarle foto ya que lo subiras como imagen.</p>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('u4t3p01_cartel-no-violencia.webp');
        ?>
    </div>
    <p>Para realizar el cartel revisa el siguiente paso a paso de lo que debes hacer:</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Revisar el contenido y definir el tema específico de tu cartel en torno a la violencia escolar.</li>
        <li>Definir un estilo gráfico y tipo de imágenes a incluir.</li>
        <li>Redacta una frase contundente que lleve el mensaje de concientización a la <strong>NO violencia escolar</strong>.</li>
        <li>Integra los elementos gráficos y texto.</li>
        <li>Una vez terminado tu cartel, súbelo a la plataforma.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo de imagen.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u4t3a2', "Cartel: Alto a la violencia escolar", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
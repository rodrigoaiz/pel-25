<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Elaboración de un WordArt</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Reflexionar sobre las experiencias personales de situaciones en las que se haya experimentado discriminación, exclusión o violencia, y expresar las emociones de manera creativa a través de un WordArt.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Piensa en una situación en la que hayas experimentado discriminación, exclusión, violencia o algo similar. Tómate un momento para reflexionar sobre cómo te hicieron sentir esas experiencias y las emociones que surgieron en ti.</li>
        <li>Elige palabras que describan tus emociones y sentimientos en relación con la experiencia que has elegido (tristeza, enojo, miedo, esperanza, etc.)</li>
        <li>Utiliza la página de diseño gráfico para crear tu <a href="https://wordart.com/create." target="_blank">WordArt</a>. Da clic en el botón "Crear".
            <div class="w-xl mx-auto mt-4">
                <?php
                renderImage('u1t5-wordart.webp');
                ?>
            </div>

            <p><strong>Nota:</strong> Para saber cómo utilizar la página, revisa el siguiente tutorial:</p>
            <div class="max-w-xl mx-auto">
                <?php
                renderVideoIframe('aGpcj7zYrmI', 'Cómo usar Wordart');
                ?>
            </div>
        </li>
        <li>Descarga el archivo de tu WordArt y súbelo a la plataforma. Nombra tu archivo de la siguiente manera: Nombre_Apellido_WordArtCultura</li>
        <li>Comparte tu WordArt con tus compañeros (as) en un entorno seguro y de apoyo. Escucha las experiencias y reflexiones de tus compañeros (as) y sé respetuoso (a) con sus emociones.</li>
    </ol>
    <div class="w-4/5 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
        <ul>
            <li class="text-white">Revisa la <a class="text-white" href="<?php echo PATH_DOCS . 'u1t5-rubrica_ElaboracionDeUnWordArt.pdf'; ?>" target="_blank">rúbrica</a> de evaluación diagnóstica.</li>
        </ul>
    </div>
    <?php ob_start(); ?>
    <p>Sube aquí tu archivo.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t5a3', "WordArt", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
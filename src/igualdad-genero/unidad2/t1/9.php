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
    <h2>Legislación para proteger los Derechos Humanos y erradicar la violencia de género</h2>
    <div class="grid grid-cols-3 gap-4 items-end">
        <div><?php
                renderImage('iga7-img06.webp');
                ?></div>
        <div class="col-span-2">
            <p>En importante conocer el <strong>marco jurídico de México</strong> diseñado específicamente para proteger los derechos de las personas y para prevenir y erradicar la <strong>violencia de género.</strong> Es fundamental que conozcamos las leyes e instrumentos legales que existen en nuestro país para defendernos y construir una sociedad donde todas las personas, sin importar su género, puedan vivir libres de violencia. El siguiente video nos mostrará cómo está estructurada esta legislación en México y cuáles son sus alcances. Presta mucha atención para entender cómo estas herramientas nos protegen y cómo podemos utilizarlas.</p>
        </div>
    </div>
    <p class="font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Conocer el marco jurídico que busca proteger los derechos de las mujeres, prevenir y erradicar la violencia de género. </p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Observa con atención el siguiente video , toma notas en tu cuaderno de los principales conceptos y responde las preguntas de reflexión que aparecen en el mismo.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t1a8', "Legislación Nacional e Internacional | Igualdad de género", $ActividadContent);
    ?>
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
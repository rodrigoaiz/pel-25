<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Production orale</h2>
    <h3>Producción oral</h3>
    <p>Para autoevaluar tu aprendizaje a lo largo de esta unidad, te proponemos la siguiente actividad: presentarse en un contexto formal e informal.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>El <span class="bg-orange-500/30 text-orange-600 p-1">primer día de clase, le preguntas a tu profesor /profesora de francés</span> cómo se llama. El/ella te responde con un saludo y su nombre. Prepara el diálogo.</li>
        <li>Un compañero de clase te pregunta cómo te llamas, responde con un saludo, tu nombre, tu apellido. Prepara el diálogo.</li>
        <li>Revisa <a href="<?php echo PATH_DOCS . 'u1t2-rubrica-OlasDelFeminismoYFeminismoEnMexico.pdf'; ?>" target="_blank">la rúbrica de autoevaluación</a> que te proponemos para verificar que tus diálogos están completos.</li>
        <li>Grábalos en esta aplicación: <a href="https://vocaroo.com/" target="_blank">https://vocaroo.com/</a> y súbelos en la pestaña indicada.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t5a11', "Producción oral", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
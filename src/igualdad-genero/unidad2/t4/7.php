<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Propuesta de la sana convivencia</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Generar propuestas de una sana convivencia en su contexto educativo.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class=" ol-number ml-32">
        <li>A partir de los aprendizajes desarrollados a lo largo del curso, elabora una propuesta o línea de acción, para generar una sana convivencia con integrantes de tu comunidad educativa, explica brevemente en qué consiste. Ésta debe incluir los siguientes apartados:
            <ul class="ul-disc ml-10">
                <li>Objetivo</li>
                <li>Población a quien va dirigido</li>
                <li>Descripción de las actividades</li>
                <li>Relación de tu propuesta con sororidad, masculinidad o comunidad LGBTIQ+</li>
                <li>Alcances o limitantes que puede tener tu propuesta para generar una sana convivencia.</li>
            </ul>
        </li>
        <li>Antes de enviar tu actividad, revisa la <a href="<?php echo PATH_DOCS . 'u2t10-listaDeCotejo_PropuestaParaLaSanaConvivencia.pdf'; ?>" target="_blank">lista de cotejo</a> con la que se evaluará tu propuesta.</li>
        <li>Sube tu propuesta en formato .PDF, nombrado de la siguiente manera: <em>Nombre_Apellido_propuesta</em>.</li>
        <li>Además, participa en un Padlet donde intercambies tu propuesta o línea de acción que elaboraste y revisa las propuestas de tus pares. </li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t4a6', "Foro: Cartilla LGBTIQ+", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
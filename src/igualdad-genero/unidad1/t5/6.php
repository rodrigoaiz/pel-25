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
    <h2>Evaluación final: Redacción de una carta compromiso.</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Contribuir a la construcción de una comunidad escolar más inclusiva, solidaria y respetuosa.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Decide a quién dirigirás tu carta compromiso (profesorado, autoridades del plantel, comunidad estudiantil, otro).</li>
        <li>Piensa en acciones específicas que puedas llevar a cabo para promover la igualdad en tu entorno: promover la diversidad, denunciar situaciones de discriminación, participar en actividades de sensibilización, entre otras.</li>
        <li>Utiliza ejemplos concretos de acciones que planeas llevar a cabo y reflexiona sobre tu papel como agente de cambio en la promoción de la igualdad.</li>
        <li>Revisa tu carta y verifica la ortografía, la gramática y la coherencia del texto.</li>
        <li>Guarda el archivo de tu carta en PDF y súbela a la plataforma. Nombra tu archivo de la siguiente manera: Nombre_Apellido_CartaCompromiso</li>
        <li>Comparte tu carta con la comunidad escolar o en plataformas en línea para aumentar su impacto y conciencia sobre la importancia de promover la igualdad.</li>
        <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t5-rubrica_RedaccionDeUnaCartaCompromiso.pdf'; ?>" target="_blank">rúbrica</a> para conocer los criterios con los que se evaluará tu carta.</li>
    </ol>
    <p><strong>Nota:</strong> Revisa el siguiente ejemplo de carta compromiso:</p>
    <div class="w-xl-2 mx-auto mt-4">
        <?php
        renderImage('u1t5-ejemplo-de-carta-compromiso.webp');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Sube aquí tu carta compromiso.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t5a5', "Carta compromiso", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
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
    <h2>Mapa conceptual "Sororidad"</h2>
    <div class="max-w-2xl mx-auto">
        <?php
        renderImage('iga10-img03.webp');
        ?>
    </div>
    <p>La <strong>sororidad</strong> es un concepto que ha cobrado gran relevancia en los últimos años, refiriéndose a la solidaridad, el apoyo mutuo y la construcción de alianzas entre mujeres. Más allá de una simple amistad, la sororidad implica reconocer la opresión compartida y trabajar juntas para erradicar las desigualdades. Pero, ¿cómo se conecta esto con la <strong>sana convivencia</strong>? Te invitamos a realizar la siguiente actividad para explorar esta relación y cómo la sororidad puede enriquecer nuestras interacciones diarias.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Enfatizar el conocimiento de la sororidad como alternativa a una sana convivencia con los demás.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Realiza la lectura de <a href="<?php echo PATH_DOCS . 'u2t10-lectura_SororidadQueEsEso.pdf'; ?>" target="_blank">Sororidad ¿qué es eso?</a>. </li>
        <li>Subraya las palabras clave que te permitan dar seguimiento a la lectura.</li>
        <li>Realiza un mapa conceptual sobre el impacto que tiene la sororidad en la sana convivencia, puedes utilizar herramientas digitales gratuitas como <a href="https://miro.com/es/" target="_blank">Miró</a>, <a href="https://www.lucidchart.com/pages/es" target="_blank">Lucidchart</a> o <a href="https://www.canva.com/es_mx/" target="_blank">Canva</a>.</li>
        <li>Antes de enviar tu actividad, revisa la <a href="<?php echo PATH_DOCS . 'u2t10-listaDeCotejo_MapaConceptualSororidad.pdf'; ?>" target="_blank">lista de cotejo</a> con el que se evaluará tu mapa conceptual.</li>
        <li>Sube tu mapa en formato .PDF, nombrado de la siguiente manera: Nombre_Apellido_MapaMentalSororidad.</li>
    </ol>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t10a3', "Mapa Mental: Sororidad.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
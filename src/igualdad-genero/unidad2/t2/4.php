<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Transformando los mitos del amor romántico</h2>
    <p>¿Alguna vez han escuchado frases como “el amor verdadero lo puede todo” o “si te cela es porque te quiere”? Estas ideas sobre cómo debe de ser el amor son muy comunes en nuestra sociedad, en las películas, canciones y hasta en las redes sociales. Sin embargo, muchas de estas creencias, que llamamos “mitos del amor romántico”, pueden llevarnos a relaciones poco saludables e incluso dañinas. Para comprender mejor de dónde vienen estas ideas y cómo nos afectan, realiza lo que se te pide a continuación para reflexionar sobre este tema.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Proponer alternativas a las prácticas sociales del amor romántico.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Lee el texto <a href="<?php echo PATH_DOCS . 'u2t8-lectura_RomperElParadigmaDelAmorRomantico.pdf'; ?>" target="_blank">"Romper el paradigma del amor romántico"</a> y con base en la lectura anota en tu libreta cómo evitar relaciones destructivas y promover la responsabilidad afectiva.</li>
        <li>Para reforzar tu lectura te recomendamos el siguiente video.
            <div class="max-w-xl mx-auto">
                <?php
                renderVideoIframe('cABO2lG2WaA', 'Este es el problema con el amor romántico');
                ?></div>
        </li>
        <li>Para interiorizar el conocimiento del texto y el video elabora una infografía sobre el tema. Sube tu archivo de la infografía en PDF y nómbralo de la siguiente forma: Nombre_Apellido_Infografía_MitosAmorRomantico y envía tu archivo.</li>
        <li>Recuerda revisar la <a href="<?php echo PATH_DOCS . 'u2t8-rubricaInfografiaRomperElParadigmaDelAmorRomantico.pdf'; ?>" target="_blank">rúbrica</a> con los criterios con los que se evaluará tu infografía</li>
        <li>Al final participa en un <span class="font-bold italic">Padlet</span> que generará tu profesora o profesor, respondiendo a las preguntas: ¿qué tipos de amor estás dispuesta/dispuesto a dar y recibir?, ¿es posible experimentar el enamoramiento y el amor evitando la violencia en el noviazgo?, ¿qué otras relaciones afectivas también pueden ser importantes de fomentar?
        <strong>No olvides registrarte con tu nombre completo comenzando por apellidos.</strong></li>
    </ol>

    <?php ob_start(); ?>
    <p>Sube aquí el archivo de tu infografía.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t8a3', "Mitos del amor romántico", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
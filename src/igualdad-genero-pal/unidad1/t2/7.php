<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Perspectiva de género como herramienta metodológica </h2>
    <p>Revisa la presentación sobre la Perspectiva de Género (PEG), toma nota en tu libreta sobre los conceptos clave o la información que consideres relevante y responde a las siguientes preguntas a partir de lo que has leído. </p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>En esta actividad identificarás a la perspectiva de género como herramienta metodológica y su impacto social.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number">
        <li>Realiza la lectura <a href="<?php echo PATH_DOCS . 'u1t2-lectura-la-perspectiva-de-genero.pdf'; ?>" target="_blank">La perspectiva de género</a>, <strong>páginas 5-10</strong> (Puntos: 4. ¿Qué es la perspectiva de género?, 5. El aprendizaje del género, 6. Género, democracia y ciudadanía), de la autora Marta Lamas. </li>
        <li>Subraya las palabras clave que les permitan dar seguimiento a la lectura.</li>
        <li>De forma individual, siguiendo las instrucciones de tu profesora o profesor, elige la mejor respuesta a las siguientes preguntas.</li>
    </ol>
    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a6', "Perspectiva de Género.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
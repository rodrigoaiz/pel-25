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
    <h2>Mapa Mental: Perspectiva de género</h2>
    <p>A partir de lo que has revisado sobre el concepto de perspectiva de género se propone que realices una actividad con tus compañeros para profundizar en el tema.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>En esta actividad identificarás a la perspectiva de género como herramienta metodológica y su impacto social.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Realiza la lectura <a href="<?php echo PATH_DOCS . 'u1t2-lectura-la-perspectiva-de-genero.pdf'; ?>" target="_blank">La perspectiva de género</a>, <strong>páginas 5-10</strong> (Puntos: 4. ¿Qué es la perspectiva de género?, 5. El aprendizaje del género, 6. Género, democracia y ciudadanía), de la autora Marta Lamas. </li>
        <li>Subraya las palabras clave que les permitan dar seguimiento a la lectura.</li>
        <li>Organizados en equipos de acuerdo con lo indicado por tu profesor o profesora, realicen un mapa mental sobre la Perspectiva de género, tomando como referencia la lectura indicada.
            El mapa deberá contener:
            <ul>
                <li class="leading-none">Idea central</li>
                <li class="leading-none">Ideas secundarias</li>
                <li class="leading-none">Imágenes</li>
        </li>
        <li>Suban su mapa en formato <strong>.PDF</strong>, nombrado de la siguiente manera: <em>Nombre_Apellido_MapaMental</em>.</li>
        <li>Revisen que su mapa cumpla con los elementos especificados en la <a href="<?php echo PATH_DOCS . 'u1t2-lista-cotejo-mapa-mental-perspectiva-de-genero.pdf'; ?>" target="_blank">lista de cotejo</a>.</li>
    </ol>
    <div class="w-4/5 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA IMPORTANTE:</span>
        <ul>
            <li class="text-white">Pueden utilizar herramientas digitales gratuitas como <a class="text-purple-50" href="https://miro.com/es/" target="_blank">Miró</a>, <a class="text-purple-50" href="https://www.lucidchart.com/pages/es" target="_blank">Lucidchart</a> o <a class="text-purple-50" href="https://www.canva.com/es_mx/" target="_blank">Canva</a>.</li>
        </ul>
    </div>
    <p>Puedes revisar el siguiente video para realizar tu mapa.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('L5LLjFnjXco', 'MAPA MENTAL ¿Qué es? ¿Para qué sirve? ¿Cómo se hace?');
        ?>
    </div>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t2a4', "Mapa Mental: Perspectiva de Género.", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
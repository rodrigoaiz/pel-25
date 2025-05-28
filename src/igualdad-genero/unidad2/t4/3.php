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
    <h2>Infografía "Elementos de la sana convivencia"</h2>
    <p>En nuestra vida diaria, interactuamos constantemente con otras personas, ya sea en la escuela, en casa o en cualquier otro lugar. Pero, ¿alguna vez nos hemos detenido a pensar en qué hace que esas interacciones sean positivas y enriquecedoras? La sana convivencia no surge de la casualidad, sino de la práctica de ciertos elementos fundamentales que nos permiten construir relaciones armoniosas y respetuosas. Para conocer más acerca de este tema, te invitamos a realizar la siguiente actividad. </p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar los elementos de la sana convivencia.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Observa con atención el siguiente video e identifica los elementos de la sana convivencia.
            <div class="max-w-xl mx-auto mt-4">
                <?php
                renderVideoIframe('ZFXlOxS6jOI', 'Convivencia, una tarea de todos | Silvina Francezón | TEDxLagunaSetúbal');
                ?></div>
        </li>
        <li>Con estos contenidos elabora una infografía que contenga las siguientes secciones:
            <ul>
                <li>Elementos de una sana convivencia</li>
                <li>Características de estos elementos</li>
                <li>Importancia de fortalecer actitudes y valores de responsabilidad, respeto y convivencia con los demás, para propiciar una sana convivencia.</li>
            </ul>
        </li>
        <li>Recuerda que puedes utilizar herramientas digitales gratuitas como <a href="https://www.canva.com/es_mx/" target="_blank">Canva</a> o <a href="https://auth.genially.com/es/login?backTo=https%3A%2F%2Fapp.genially.com%2F" target="_blank">Genially</a>.</li>
        <li>Antes de enviar tu actividad revisa la <a href="<?php echo PATH_DOCS . 'u2t10-listaDeCotejo_InfografiaElementosDeLaSanaConvivencia.pdf'; ?>" target="_blank">lista de cotejo</a> con la que se te evaluará tu trabajo.</li>
        <li>Sube tu infografía en formato PDF y nómbralo de la siguiente manera: Nombre_Apellido_InfografíaElementos</li>
    </ol>

    <?php ob_start(); ?>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t4a2', "Infografía elementos de la sana convivencia", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
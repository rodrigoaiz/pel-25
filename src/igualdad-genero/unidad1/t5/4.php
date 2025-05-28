<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ImagenPie.php';


$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Detección de necesidades de la cultura de la igualdad</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Detectar en la narración del cuento Balón y astillas, las necesidades de la cultura de la igualdad, para desarrollar un gráfico. </p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>Leerás el cuento <a href="<?php echo PATH_DOCS . 'u1t5-lectura_balonyAstillas.pdf'; ?>" target="_blank">Balón y astillas</a>, de la autora Queta Navagómez, e identificarás las necesidades de la cultura de la igualdad (desigualdades) que enfrenta Cayetano (protagonista de la historia).</li>
        <li>En una hoja en blanco diseñarás un guion gráfico, que manifieste las desigualdades que identificaste en Balón y astillas.</li>
        <li>Nombrarás cada imagen con un título alusivo a cada situación de desigualdad.</li>
        <li>En sesión virtual en Microsoft Teams, presentarás tu guion gráfico describiendo cada imagen.</li>
    </ol>
    <div class="w-4/5 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
        <ul>
            <li class="text-white">Puedes guiarte con la imagen del ejemplo para diseñar el guion. Revisa la <a class="text-white" href="<?php echo PATH_DOCS . 'u1t5-listaDeCotejo_DeteccionDeNecesidadesDeLaCulturaDeLaIgualdad.pdf'; ?>" target="_blank">lista de cotejo</a> con los criterios de evaluación diagnóstica.</li>
        </ul>
    </div>
    <div class="w-xl mx-auto mt-10">
        <?php
        renderImage('u1t5-redes.webp', 'Guion gráfico de desigualdades');
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
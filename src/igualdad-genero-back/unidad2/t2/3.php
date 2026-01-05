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
    <h2>¿Qué es el amor romántico? – Glosario de términos</h2>
    <p>El amor romántico, idealizado a través de mitos y representaciones culturales, a menudo se presenta como la cúspide de las relaciones humanas y fuente de felicidad plena. Sin embargo, esta construcción social puede generar expectativas irreales, normalizar desigualdades de poder y propiciar conductas dañinas en las relaciones de pareja. Comprender las problemáticas inherentes al amor romántico es fundamental para construir vínculos más sanos, equitativos y respetuosos. Para profundizar en el tema te invitamos a realizar lo que se te pide a continuación.</p>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Obtener un conocimiento general acerca de lo que es el amor romántico y sus implicaciones desde el punto de vista histórico hasta arribar a la vida cotidiana.</p>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number md:ml-32">
        <li>Lee el siguiente texto <a href="<?php echo PATH_DOCS . 'u2t8-lectura_QueEsElAmorYElProblemaDelAmorRomantico.pdf'; ?>" target="_blank">"Qué es el amor y el problema del amor romántico"</a> y con base en la lectura anota en tu libreta los conceptos más representativos sobre el tema. Para reforzar tu lectura complementa con los dos videos que te ponemos a continuación.
            <div class="max-w-xl mx-auto">
                <?php
                renderVideoIframe('9rxsyBds37Q', 'El MITO del AMOR ROMÁNTICO que hemos aprendido del cine');
                ?></div>
            <div class="max-w-xl mx-auto">
                <?php
                renderVideoIframe('IpPFgsEDxEY', 'Marina Marroquí: Mitos del amor romántico');
                ?> </div>
        </li>
        <li>Al término, realiza un glosario de términos ilustrado, puedes usar <em>Power Point, Canva</em> u otra aplicación digital.
            Los conceptos o ideas que deberás ilustrar, dotar de significado y sentido son los siguientes:
            <ul>
                <li>Enamoramiento</li>
                <li>Amor romántico</li>
                <li>Violencia en el amor</li>
                <li>Mitos del amor</li>
                <li>Noviazgo</li>
            </ul>
        </li>
        <li>Recuerda que los conceptos que agregues en tu glosario deberás ilustrarlos con imágenes, fotografías o dibujos.</li>
        <li>Revisa la <a href="<?php echo PATH_DOCS . 'u1t8-rubrica_GlosarioDeTerminosIlustrado.pdf'; ?>" target="_blank">rúbrica</a> para verificar qué elementos se tomarán en cuenta para evaluar tu trabajo.</li>
        <li>Sube tu archivo del glosario en PDF y nómbralo de la siguiente forma: Nombre_Apellido_Glosario _AmorRomantico</li>
    </ol>
    <div class="w-4/5 mx-auto mt-6 bg-fuchsia-900 p-2 leading-none text-md">
        <span class="text-white">NOTA:</span>
        <p class="text-white">Puedes compartir en clase tu glosario de términos ilustrado y observa con atención el trabajo de tus compañeras y compañeros.</p>
    </div>

    <?php ob_start(); ?>
    <p>Sube aquí tu glosario.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u2t8a2', "Glosario Amor romántico", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

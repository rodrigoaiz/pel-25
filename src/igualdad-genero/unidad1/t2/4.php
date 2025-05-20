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
    <h2>Infografía sobre las Olas del feminismo y el feminismo en México</h2>
    <p class=" font-bold text-fuchsia-900"><strong>Propósito</strong></p>
    <p>Identificar las características de las distintas olas del feminismo (demandas y logros) y a sus principales representantes.</p>
    <div class="max-w-xl mx-auto">
        <?php
        renderVideoIframe('ERsVprw030k', '¿Qué es una infografía?');
        ?>
    </div>
    <p><strong>Instrucciones:</strong></p>
    <ol class="ol-number ml-32">
        <li>En equipos, de acuerdo con lo indicado por tu profesora o profesor, elabora una infografía de alguna de las Olas del feminismo, o bien del Feminismo en México. Revisa el video <span class="font-bold text-fuchsia-900">¿Qué es una infografía?</span> para conocer en qué consiste y cómo se hace una infografía. La infografía debe incluir:
            <ul>
                <li class="leading-none">Título</li>
                <li class="leading-none">Periodo de tiempo que abarca la Ola</li>
                <li class="leading-none">Demandas solicitadas</li>
                <li class="leading-none">Logros alcanzados</li>
                <li class="leading-none">Principales representantes.</li>
        </li>
        </ul>
        </li>
        <li>Para el desarrollo del trabajo, apóyate en uno o varios de los siguientes materiales, según el subtema asignado:
            <ul>
                <li class="leading-none"><a href="<?php echo PATH_DOCS . 'u1t2-feminismo-para-principiantes.pdf'; ?>" target="_blank">Feminismo para principiantes</a> de Nuria Varela y Antonia Santolaya.</li>

                <li class="leading-none"><a href="<?php echo PATH_DOCS . 'u1t2-lectura-UnaBreveHistoriaDelFeminismoLasFechasyLosNombresClave.pdf'; ?>" target="_blank">Una breve historia del feminismo</a> las fechas y nombres clave de Aitana Palomar.</li>

                <li class="leading-none"><a href="<?php echo PATH_DOCS . 'u1t2-lectura-LaCuartaOlaDelFeminismo.pdf'; ?>" target="_blank">La cuarta ola del feminismo</a> de Patricia Galeana.</li>

                <li class="leading-6"><a href="<?php echo PATH_DOCS . 'u1t2-lectura-ElMovimientoFeministaEnMexico.pdf'; ?>" target="_blank">El movimiento feminista en México, una lucha permanente contra la violencia de género</a> de Alma Rosa Sánchez, Diana Hernández y Mariana Bucio.</li>
            </ul>
        </li>
        <li>Revisa muy bien el instrumento <a href="<?php echo PATH_DOCS . 'u1t2-rubrica-OlasDelFeminismoYFeminismoEnMexico.pdf'; ?>" target="_blank">escala estimativa</a>, con el que se evaluará tu producto. </li>
        <li>Posteriormente presentarán al grupo su infografía o la compartirán a través de alguna herramienta digital colaborativa.</li>
        <li>Reflexionen en grupo:
            <ul>
                <li class="leading-none">¿Qué importancia tiene el feminismo en la historia de la humanidad?</li>
                <li class="leading-none">¿Cómo ha impactado el feminismo la vida de las mujeres?</li>
            </ul>
        </li>
    </ol>
    <?php ob_start(); ?>
    <p>Aquí sube el trabajo realizado.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u1t1a6', "Olas del feminismo y el feminismo en México", $ActividadContent);
    ?>
</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
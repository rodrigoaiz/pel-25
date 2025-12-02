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
    <h2>La descolonización en el marco de la Guerra Fría</h2>

    <?php
       renderImage('hu2-u3-maostalin.webp', 'Mao Zedong y Stalin en 1949. Imagen de Arilang1234.', 'https://es.wikipedia.org/wiki/Revoluci%C3%B3n_china_de_1949#/media/Archivo:1949_Mao_and_Stalin.jpg', 'Wikimedia Commons.');
    ?>

    <p>A partir de 1945, el proceso de descolonización contribuyó a un distanciamiento mayor ¿Qué camino tomarían las naciones recién liberadas? Asia, en particular, “fue la zona en que las dos superpotencias siguieron compitiendo en busca de apoyo e influencia durante toda la guerra fría”.</p>

    <p>De acuerdo con el mismo autor, la rivalidad se vio alimentada por un componente ideológico puesto en marcha desde que se conformó la Unión Soviética: había que desconfiar del comunismo, pues era una amenaza permanente para la sociedad capitalista.</p>

    <h3>La formación de bloques; alianzas a ambos lados del “Telón de Hierro”</h3>

    <p>La Unión Soviética ejercía su influencia sobre la zona de Europa del Este que fue ocupada por el Ejército Rojo al combatir contra las fuerzas alemanas, sin intentar extenderse más allá por la fuerza de las armas. En tanto, los Estados Unidos “controlaban y dominaban el resto del mundo capitalista, además del hemisferio occidental y los océanos, asumiendo los restos de la vieja hegemonía imperial de las antiguas potencias coloniales”.</p>

    <p>De manera tajante, los norteamericanos establecieron la ocupación militar de Japón (determinando su reestructuración política y económica) excluyendo tanto a la URSS como a sus aliados capitalistas, pero no hubo ningún cuestionamiento por causa de ello. Asimismo, ocuparon la sección occidental de Alemania (junto con tropas de Francia y Gran Bretaña) no sólo para dirigir la recuperación, sino para trazar límites a una temida expansión soviética sobre la Europa capitalista, haciendo de la Alemania Occidental un “Estado- tapón”. En la Doctrina Monroe, habían asumido públicamente, desde tiempo atrás, que el continente americano era un área reservada a su influencia.</p>

    <?php
       renderImage('hu2-u3-berlin.webp', 'El muro de Berlín separaba literalmente al mundo capitalista del comunista en una misma ciudad. Imagen de Noir.', 'https://es.wikipedia.org/wiki/Muro_de_Berl%C3%ADn#/media/Archivo:Berlinermauer.jpg', 'Wikimedia Commons.');
    ?>
    <p>Ante ese panorama, el gobierno norteamericano anunció su intención por apoyar a toda las naciones libres para defenderse ante la amenaza del comunismo; con este propósito, se implementaron una serie de medidas conocidas como la Doctrina Truman. La primera intervención bajo los términos de dicha propuesta fue en Grecia, en 1947, una vez que Inglaterra (debilitada económicamente) se declaró incapaz de sostener la ayuda al bando anticomunista en una guerra civil.</p>

    <p>El complemento de la Doctrina Truman fue el Plan Marshall para la recuperación de Europa; permitiría que los países devastados tuviesen acceso a préstamos a bajo interés, subvenciones directas, y asistencia tecnológica. El Plan preveía también el establecimiento de un “contexto institucional multilateral para la estabilidad internacional”. De acuerdo con Gaddis los Estados Unidos no temían tanto una intervención militar soviética sobre Europa Occidental; el principal riesgo era que “el hambre, la pobreza y la desesperación pudieran hacer que Europa votara para dar cargos a sus propios comunistas”.</p>

    <?php
       renderImage('hu2-u3-propagandaMarshall.webp', 'Cartel propagandístico del Plan Marshall. Imagen de Zkidwiki.', 'https://es.wikipedia.org/wiki/Plan_Marshall#/media/Archivo:Marshall_Plan_poster.JPG', 'Wikimedia Commons.');
    ?>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

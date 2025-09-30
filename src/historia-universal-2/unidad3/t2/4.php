<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
    <h2>Los principales conflictos entre bloques</h2>

    <p>La confrontación entre el mundo capitalista y el comunismo determinó los rasgos de las relaciones internacionales durante prácticamente toda la segunda mitad del siglo XX. Abarcó diversos frentes, como ya hemos mencionado: militar, ideológico, político y propagandístico. Es posible realizar una periodización, tomando en cuenta los sucesivos lapsos de confrontación y distensión dentro de la Guerra Fría. De acuerdo con Hobsbawm, hay una primera fase de confrontación, entre marzo de 1947 y abril de 1951 (desde la ruptura de la alianza antifascista, al proclamarse la Doctrina Truman, y hasta la muerte de Stalin) en que se temió incluso el estallido de un conflicto bélico de proporciones mayores.</p>

    <p>La tensión se vio agudizada por el surgimiento de un régimen comunista en China bajo la conducción de Mao, en 1949, y la Guerra de Corea, que estalló al año siguiente. En esta última, el ejército norteamericano participó con el envío de combatientes y asistencia militar a Corea del Sur, que resistía las pretensiones de su homólogo del Norte por unificar la península bajo un régimen comunista; China intervino también militarmente. Luego de un intento de Mac Arthur por escalar el conflicto en contra de China, el gobierno de los Estados Unidos optó por un armisticio, dando fin a la guerra en 1953. En este mismo lapso ( y de ahí el temor a un conflicto de mayores proporciones) la Unión Soviética logró desarrollar la bomba atómica.</p>
    <?php
       renderImage('hu2-u3-china.webp', 'Bandera de la República Popular de China, establecida en 1949. Imagen de Wheatley2.', 'https://commons.wikimedia.org/w/index.php?search=+Wheatley2&title=Special%3AMediaSearch&type=image&continue=40', 'Wikimedia Commons.');
    ?>

   <p>Entre 1953 y 1956 se observó un lapso de coexistencia pacífica, interrumpido por la intervención soviética en Hungría para sofocar una revuelta e imponer un régimen satélite. Posteriormente, los momentos de confrontación más importantes fueron a raíz de la Revolución Cubana (la crisis de los misiles, en 1962) y posteriormente en Indochina, cuando el gobierno de los Estados Unidos intervino para impedir la implementación de un régimen comunista a instancias de Vietnam del Norte (respaldado por los soviéticos). La Guerra de Vietnam se prolongó por casi diez años y ocasionó estragos a la reputación del bando derrotado: los Estados Unidos.</p>

    

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

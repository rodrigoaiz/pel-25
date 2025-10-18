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
    
    <p>Podemos ubicar el inicio de la Guerra Fría hacia 1947, con la ruptura definitiva de la coalición aliada a raíz de la instauración de regímenes satélites de la URSS en naciones como Polonia y Checoslovaquia y la promulgación de la Doctrina Truman por los Estados Unidos; el conflicto finalizó con la desintegración de la Unión Soviética en 1991. Dentro de este lapso podemos identificar períodos de tensión y distensión en las relaciones entre ambas potencias, que en diversas ocasiones amenazaban con detonar un conflicto bélico a gran escala.</p>

    <h3>La desconfianza hacia la URSS</h3>

    <p>Aunque durante la Segunda Guerra Mundial Estados Unidos e Inglaterra habían luchado junto a la URSS para derrotar a Hitler, ya desde principios de 1945 comenzaba a surgir la desconfianza entre los líderes de las potencias capitalistas y Stalin, cabeza de la Unión Soviética. Esto se manifestó en la Conferencia de Yalta, en la cual los líderes del bloque aliado se reunieron para definir las condiciones en que se pactaría la paz (pues Italia ya se había rendido y la derrota de Alemania y Japón era cuestión de tiempo). Se propuso organizar elecciones en los países recién liberados, pero la URSS no mostraba mucha iniciativa para ello. Más adelante, ya terminada la Segunda Guerra Mundial y como consecuencia del control que Rusia empezó a ejercer sobre Europa Oriental, Winston Churchill, Primer Ministro británico, expresaba en 1946 que un “telón de acero” había caído sobre Europa. La Unión Soviética era considerada por los líderes de las principales democracias occidentales como un gigante que amenazaba con “devorar” al mundo.</p>
    <?php
       renderImage('hu2-u3-winston.webp', 'Sir Winston Churchill, primer ministro de Inglaterra hacia el final de la segunda guerra mundial. Imagen de Neveselbert (mobile).', 'https://commons.wikimedia.org/wiki/File:Winston_Churchill_C3519635.jpg', 'Wikimedia Commons.');
    ?>
    <p>¿Por qué desconfiaban de Stalin? Veíamos que entre los partidarios del capitalismo y los partidarios del comunismo hay diferencias ideológicas irreconciliables. Pues el capitalismo se basa en la propiedad privada, mientras que los comunistas defienden la propiedad colectiva. El capitalismo se basa en el trabajo asalariado, y los comunistas afirman que la fuerza de trabajo no debiera ser una mercancía, y que la ganancia de los dueños del capital se basa en la explotación del trabajador. Los comunistas pretendían transformar radicalmente a la sociedad mediante una revolución, que llevara al poder a los trabajadores e imponer la dictadura del proletariado, una fase transitoria hacia una sociedad perfecta, sin explotación: la sociedad comunista.</p>
    <?php
       renderImage('hu2-u3-1961.webp', 'Carlos Marx, Federico Engels y Lenin, fueron los principales pensadores del comunismo, si bien los dos primeros jamás pensaron que Rusia fuera un candidato para liderar este movimiento. Imagen de Matsievsky.', 'https://commons.wikimedia.org/wiki/File:The_Soviet_Union_1961_CPA_2619_stamp_(22nd_Congress_of_the_Communist_Party_of_the_Soviet_Union._Lenin,_Marx,_Engels_and_marchers).jpg', 'Wikimedia Commons.');
    ?>

    <p>En la práctica, la URSS estaba lejos de ser una sociedad perfecta. Y las democracias capitalistas no eran tan democráticas como decían serlo. Veamos esto más de cerca.</p>

    <?php ob_start(); ?>
    <p>Antes de continuar reafirmemos algunos conceptos importantes de los vistos hasta aquí, resolviendo el siguiente reto.</p>
    <?php
    $ActividadContent = ob_get_clean();
    renderActividad('u3t1a2', "La guerra fría", $ActividadContent);
    ?>

     
</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

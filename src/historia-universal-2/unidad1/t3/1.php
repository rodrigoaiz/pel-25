<?php
include '../../config.php';// Ajustar esto según tu estructura
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>

<section>
  <h2>Introducción a la Primera Guerra Mundial</h2>
  
  <p>Con la Primera Guerra Mundial dio inicio la época de la Guerra Total. Esto consiste, según el historiador Erik Hobsbawm, en un conflicto que involucró de un modo u otro a toda la población de los países implicados; toda la actividad productiva, la tecnología y la investigación científica fueron orientadas al esfuerzo de guerra.</p>
  
  <?php
  renderImage('fæ1.jpg', 'Imagen de Fæ', 'https://commons.wikimedia.org/wiki/File:THE_ARMS_PRODUCTION_IN_BRITAIN_IN_THE_FIRST_WORLD_WAR_Q27866.jpg', 'Wikimedia Commons');
  ?>

  <p>Participaron en ella -directa o indirectamente- todas las naciones europeas, junto con los ejércitos de sus colonias o de sus áreas de influencia, pero también se sumaron prácticamente todos los estados independientes del mundo. Nunca antes de 1914 se había gestado un conflicto de tales dimensiones. En esta sección, abordaremos los factores que incidieron en el estallamiento de la Guerra, su desarrollo y principales consecuencias. Recordemos siempre que la rivalidad provocada por el imperialismo enmarca esta época.</p>

  <h3>Antecedentes y factores desencadenantes</h3>
  <h4>La competencia imperialista</h4>

  <?php
  renderImage('fæ3.jpg', 'Imagen de Fæ', 'https://commons.wikimedia.org/wiki/File:Industry_during_the_First_World_War_Q33541.jpg', 'Wikimedia Commons');
  ?>

  <p>Ya desde inicios del siglo XX, para muchos resultaba claro que el mundo se encaminaba hacia la guerra; en las últimas décadas, la vía militar había sido el principal medio para obtener recursos naturales y mercados, indispensables para “alimentar” el desarrollo industrial de unas pocas naciones. Hemos visto cómo el territorio (y los recursos naturales) se encontraba “repartido” entre las principales potencias industriales - con Inglaterra y Francia a la cabeza- lo cual cerraba el paso a la expansión imperialista de nuevos estados que se integraban recientemente a la competencia; entre ellos destacaba Alemania, que se unificó como Estado nación hasta finales del siglo XIX pero que desarrolló muy rápidamente su capacidad industrial, opacando inclusive a Inglaterra como “taller del mundo”. Ambas naciones desarrollaron una fuerte rivalidad pues chocaban sus intereses y prioridades; Inglaterra pretendía frenar cualquier posibilidad de expansión de Alemania, pues esto le convertiría en un competidor cada vez más poderoso. En tanto, para los alemanes era urgente abrirse paso en un mundo repartido mayormente entre Inglaterra, Francia y Rusia.</p>
  
<h4>Los imperios débiles y la cuestión nacional</h4>
  <p>Dos imperios se encontraban en situación de debilidad: el imperio turco y el austrohúngaro. Ambos estaban constituidos por múltiples grupos étnicos, algunos con reivindicaciones nacionalistas; esto es, exigían el derecho a la autodeterminación o inclusive a formar un estado independiente.</p>

   <?php
  renderImage('justificación-de-regateux1.jpg', 'Imagen de Justificación de Regateux', 'https://commons.wikimedia.org/wiki/File:Sekban-%C4%B1_Cedid.png', 'Wikimedia Commons');
  ?>

  <p>Veamos primero el caso del imperio turco. Este se había formado siglos antes -en 1453- y por razones distintas al imperialismo capitalista; podríamos decir que era anacrónico, pues se había extendido con base en necesidades propias del pasado y mantenía una estructura política autoritaria que ya no correspondía con las tendencias liberales de principios del siglo XX.</p>
  <p>El imperio turco estaba en proceso de desintegración. Ya desde 1830 había perdido Grecia y, en otras regiones bajo su control, se desarrollaban movimientos nacionalistas que reivindicaban su derecho a ser independientes. En 1878, Turquía cedió y reconoció la independencia de Serbia, Rumania y Montenegro, pero mantuvo el control sobre Macedonia. Las nuevas naciones ahora tenían aspiraciones expansionistas pero, a fin de cuentas, eran también territorios liberados que en cualquier momento podrían quedar bajo el control de otro imperio. Vemos entonces que la decadencia del imperio turco era también una fuente de discordia. Observa el mapa. ¿Qué imperios se encontraban más cerca de los Balcanes? ¿qué ventajas representaría apropiarse de esa región?</p>

  <?php
  renderImage('rowanwindwhistler1.jpg', 'Imagen de Rowanwindwhistler', 'https://commons.wikimedia.org/wiki/File:GuerrasBalc%C3%A1nicasSituaci%C3%B3nPreb%C3%A9lica1912.svg', 'Wikimedia Commons');
  ?>
  
  <p>El imperio austrohúngaro atravesaba por una situación similar, en el sentido de que estaba integrado por múltiples nacionalidades que aspiraban a una mayor libertad. Aunado a ello, se encontraba en desventaja frente a imperios que concentraban una gran extensión territorial. La región de los Balcanes, recién liberada del yugo otomano, parecería un área natural hacia donde podría expandirse. Esto se veía ya desde 1908, cuando Austria invadió Bosnia (que estaba aún bajo dominio turco) y las aspiraciones territoriales del imperio austrohúngaro se reforzaron a partir de la Primera Guerra Balcánica, en la cual Bosnia y Serbia lograron su independencia. Eran ya territorios “libres”... y cercanos (en términos de distancia) al imperio austrohúngaro.</p>

    <?php
  renderImage('rowanwindwhistler1.jpg', 'Imagen de Rowanwindwhistler', 'https://es.wikipedia.org/wiki/Austria-Hungr%C3%ADa_durante_la_Primera_Guerra_Mundial#/media/Archivo:GuerrasBalc%C3%A1nicasLondresYBucarest.svg', 'Wikimedia Commons');
  ?>
  
  

</section>

<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>
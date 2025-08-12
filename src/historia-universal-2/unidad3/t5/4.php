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
    <h2>La caída del muro de Berlín</h2>

    <p>Como ya tuvimos oportunidad de ver, el Muro de Berlín fue erigido el 13 de agosto de 1961 por la República Democrática Alemana (RDA, o Alemania Oriental) como una barrera física que dividía la ciudad de Berlín en dos partes, separando a Alemania Occidental de Alemania Oriental. La construcción del muro fue una respuesta a la creciente emigración de ciudadanos de Alemania Oriental hacia el oeste, a través de Berlín Occidental, en busca de una vida mejor y escapando del régimen comunista de la RDA.</p>

    <p>La tensión se vio agudizada por el surgimiento de un régimen comunista en China bajo la conducción de Mao, en 1949, y la Guerra de Corea, que estalló al año siguiente. En esta última, el ejército norteamericano participó con el envío de combatientes y asistencia militar a Corea del Sur, que resistía las pretensiones de su homólogo del Norte por unificar la península bajo un régimen comunista; China intervino también militarmente. Luego de un intento de Mac Arthur por escalar el conflicto en contra de China, el gobierno de los Estados Unidos optó por un armisticio, dando fin a la guerra en 1953. En este mismo lapso ( y de ahí el temor a un conflicto de mayores proporciones) la Unión Soviética logró desarrollar la bomba atómica.</p>
    <?php
       renderImage('hu2-u3-1989.webp', 'Ciudadanos de ambas Alemanias destruyendo el muro de Berlín en 1989. Foto de Werdersen', 'https://upload.wikimedia.org/wikipedia/commons/0/07/Mauerspecht_Andree_Werder_im_November_1989_an_der_Berliner_Mauer.jpg', 'Wikimedia Commons.');
    ?>

   <p>La caída del Muro de Berlín ocurrió el 9 de noviembre de 1989 y marcó un evento histórico significativo. La caída se debió en gran medida a una serie de factores, incluyendo el hecho de que la RDA estaba experimentando problemas económicos y políticos, lo que generaba descontento entre su población. Las demandas de reformas políticas y económicas crecieron, y la gente comenzó a exigir cambios. Durante ese período, el mundo estaba experimentando cambios significativos, como la Perestroika en la Unión Soviética bajo Mijaíl Gorbachov y la Revolución de Terciopelo en Checoslovaquia. Estos eventos inspiraron a los ciudadanos de la RDA a buscar un cambio similar.</p>

   <p>En una conferencia de prensa el 9 de noviembre de 1989, el portavoz del gobierno de la RDA, Günter Schabowski, anunció inesperadamente que los ciudadanos de la RDA podrían cruzar el Muro hacia Berlín Occidental. Miles de personas se dirigieron a los cruces fronterizos y los guardias fronterizos, sin órdenes claras, finalmente permitieron el paso. Esto llevó a una celebración masiva y a la apertura del Muro.</p>

   <p>Las consecuencias de la caída del Muro de Berlín fueron profundas y sumamente simbólicas entre ellas se encuentran:</p>

   
    <?php
  $accordionItems1 = [
    [
      'title' => 'Reunificación alemana',
      'content' => '<p>La caída del Muro allanó el camino para la reunificación de Alemania, que se formalizó el 3 de octubre de 1990. Las dos Alemanias se convirtieron en una sola nación democrática.</p>'
    ],
    [
      'title' => 'Fin de la Guerra Fría',
      'content' => 'El colapso del Muro de Berlín simbolizó el fin de la Guerra Fría y la división ideológica entre el bloque occidental liderado por los Estados Unidos y el bloque oriental liderado por la Unión Soviética.'
    ],
    [
      'title' => 'Cambios en Europa central y del Este',
      'content' => 'La caída del Muro de Berlín tuvo un efecto dominó en otros países de Europa del Este y llevó a la desaparición de los regímenes comunistas en la región.'
    ],
    [
      'title' => 'Unión Europea',
      'content' => 'La reunificación alemana y el colapso del bloque del Este influyeron en la expansión y la formación de la Unión Europea, un proceso que cambió la dinámica política y económica en Europa.'
    ],
    [
      'title' => 'Mayor abertura y libertad',
      'content' => 'Los ciudadanos de la RDA y otros países de Europa del Este experimentaron una mayor libertad política, económica y de movimiento, lo que tuvo un profundo impacto en sus vidas y en la región en su conjunto.'
    ]
  ];
  renderAccordion($accordionItems1, 'primero-');

  ?>

  <p>La caída del Muro de Berlín marcó un hito en la historia del siglo XX y para muchos simbolizó la victoria de la democracia y la libertad sobre el totalitarismo y la opresión.</p>

  <h3>El mundo multipolar</h3>

  <p>La expresión "mundo multipolar" se refiere a una configuración geopolítica en la que múltiples actores o potencias desempeñan un papel importante en el escenario internacional. Este concepto se ha utilizado en el contexto de las relaciones internacionales y la geopolítica para describir una situación en la que no hay un único superpoder o bloque de poder dominante que ejerza una influencia predominante en el mundo.</p>

  <?php
       renderImage('hu2-u3-india.webp', 'En un mundo multipolar, países que antes no pensaban en la geopolítica como la India o Singapur, han adquirido cada vez mayor presencia en la economía y la política internacional. Foto de Argenberg', 'https://upload.wikimedia.org/wikipedia/commons/5/5f/Ellora_Caves%2C_India%2C_Kailasa_Temple.jpg', 'Wikimedia Commons.');
    ?>

   <p>En relación con el fin de la Guerra Fría, el término "mundo multipolar" se utiliza para describir la era posterior a ese conflicto, en la que la bipolaridad que caracterizaba la Guerra Fría (con Estados Unidos y la Unión Soviética como los principales superpoderes), dio paso a un escenario en el que varios actores y regiones del mundo se convirtieron en centros de poder significativos. Esto significó que no había una única superpotencia que dominara todos los aspectos de la política global.</p>

   <p>Algunos de los principales actores en un mundo multipolar pueden incluir a Estados Unidos, Rusia, China, la Unión Europea, Japón, India y otros países que tienen una influencia considerable en los asuntos mundiales. Este concepto refleja la idea de que el poder y la influencia están más distribuidos en el sistema internacional, lo que a menudo conlleva un mayor equilibrio de poder y una mayor complejidad en las relaciones internacionales. En un mundo multipolar, las dinámicas geopolíticas pueden ser más complejas y fluidas, y las alianzas y coaliciones pueden cambiar con mayor frecuencia. Además, este escenario puede dar lugar a una competencia y rivalidad entre múltiples actores en áreas como la economía, la seguridad y la influencia global.</p>



</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

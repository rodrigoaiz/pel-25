<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'Tooltip.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>El materialismo histórico</h2>

  <p>Después de la Comuna de París se creería que los postulados del materialismo histórico perderían su vigencia, pero al iniciar el nuevo siglo el materialismo histórico es uno de los movimientos políticos y sociales de gran impacto en el mundo, elemento que se refleja en los trabajos históricos. Sí bien la propuesta teórica del marxismo surgió en el siglo XIX con Carlos Marx y Federico Engels —aspecto que tratamos en la primera unidad de nuestro programa—, siguió desarrollándose a lo largo del siglo XX.</p>

  <p>El materialismo histórico es la tercera corriente historiográfica contemporánea, es indudable la gran influencia que cobró el método de explicación y análisis de esta a lo largo del siglo XX. Sus pensadores desarrollaron herramientas teóricas que buscaban dar una explicación a los acontecimientos históricos.</p>

  <p>Al iniciar el siglo XX los postulados de Marx y Engels son un parámetro para explicar la realidad social y, como en toda corriente de pensamiento activa, se realizan nuevas lecturas e interpretaciones de las ideas de sus creadores.  De esta manera se dieron argumentos para el desarrollo teórico del materialismo histórico, así como para la búsqueda por el cambio. Como ejemplo está el uso dado por Rosa Luxemburgo, quien toma las bases del materialismo histórico para dar una interpretación de acontecimientos, de manera que en la <?php renderTooltip('II Internacional', 'Con este término se nombra a la Segunda Internacional Obrera, que existió entre 1889 y 1916. Su objetivo era crear una federación de sindicatos obreros y, después de 1893, su orientación ideológica es marxista. Entre sus logros se encuentra la conmemoración del 1° de mayo día internacional del trabajo y el 8 de marzo como día internacional de la mujer trabajadora. Existieron a su interior dos corrientes, una moderada y otra radical, de tendencia marxista, la cual se fortaleció a partir de la primera guerra mundial y el posterior triunfo de la revolución soviética.'); ?>, junto con Vladimir I. Lenin explican de los acontecimientos ocurridos entre finales del siglo XIX e inicios del siglo XX entre los que advertían sobre la inminencia de la primera guerra mundial, llamando a la clase obrera a no participar en ella, pues se trataba de una guerra imperialista que defendía los intereses de las potencias industriales.  La idea marxista de la historia fue la base para la comprensión y explicación de los acontecimientos de su presente (Anderson, Consideraciones).</p>

  <p>Las ideas del materialismo histórico son puestas en práctica por Lenin y León Trotsky pasaron de ser un elemento teórico a uno práctico en el desarrollo de la revolución rusa de 1917. Esta corriente, como método de investigación permitió dar respuestas que llevaron a la comprensión de la historia en el siglo XX, utilizando categorías teóricas para su análisis, como la explicación del Imperialismo dentro del capitalismo y el desarrollo económico social del imperio ruso con respecto al capitalismo mundial.</p>

  <p>De igual manera el marxismo sirvió como base para impulsar el triunfo de la revolución bolchevique de manera que las ideas del marxismo se desarrollaron por toda Europa propiciando la formación de partidos de corte socialista o comunista en Alemania, Italia, Gran Bretaña y en general por todo el continente. Su impacto llegó al continente americano de modo que se hacen presentes de manera clandestina partidos de esta tendencia,en todos los países de la región, incluyendo a México.</p>

  <p>A la muerte de Lenin se desarrolló la lucha de facciones y con el triunfo de José Stalin, el marxismo se convirtió en la ideología de Estado con el que se justificó la política estalinista. El triunfo de la Revolución socialista en Rusia de 1917 permitió formar la visión del inicio de una nueva etapa de la historia, en el que la ése convertía en un instrumento para conformar una nueva mitología y justificar la nueva realidad. En este contexto la historia se volvió elemento de fundamentación de las acciones del <?php renderTooltip('totalitarismo', 'Con este término se define a los gobiernos, sus ideologías y prácticas políticas, en las cuales se ejerce un poder absoluto y opresivo sobre la sociedad que lo sustenta. Una de sus características es la limitación de las libertades individuales y sociales, así como el uso de la fuerza para imponer su régimen'); ?> ruso de manera que todo escrito de historia debía estar de acuerdo con los dogmas establecidos,  ya sea para explicar los acontecimientos históricos pasados o la situación del momento presente.</p>

  <p>Cabe destacar que, hasta finalizar la primera guerra mundial, los escritos sobre temas históricos no son realizados por historiadores, sino que son políticos quienes toman la historia como un medio para justificar las acciones revolucionarias e impulsar la participación y el cambio social. Entre los movimientos socialistas se da a conocer los trabajos de Carlos Marx y Federico Engels como <i>El Manifiesto del partido comunista</i>. Se continua con una interpretación marxista de la historia en trabajos como el de Lenin. <i>El imperialismo, fase superior del capitalismo</i> y León Trotsky. <i>La Historia de la Revolución rusa</i>. </p>

  <p>A pesar de las indicaciones teóricas y metodológicas sobre la interpretación y sentido de la investigación histórica, emanado de las doctrinas del Estado soviético, fuera de la URSS se gestó el análisis y la crítica en la investigación del conocimiento en las ciencias sociales de manera que dio un giro y llevó a la formación de propuestas dentro del marxismo entre las que destacan la Escuela de Frankfurt, los escritos de Antonio Gramsci y la Historiografía Británica.</p>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-amistad.webp','Un concepto fundamental dentro del materialismo histórico es el internacionalismo proletario, como se expresa en este cartel de propaganda para la segunda internacional.');
  ?>
  <?php
      renderImage('th2-u2-tractor.webp','El materialismo histórico retoma la confianza en el progreso científico y tecnológico, tal como se muestra en esta imagen que muestra la llegada de un tractor en una aldea en 1930. La obra es de Vladimir Krikhatsky');
  ?>
  <?php
      renderImage('th2-u2-trabajo.webp','Esta imagen alude a la confianza de la revolución proletaria soviética. La confianza deriva del concepto de estar del lado correcto de la historia','https://upload.wikimedia.org/wikipedia/commons/d/de/A._Apsit._1_may_.jpg','wikimedia');
  ?>
  
  </div>

  <div class="mx-auto max-w-md">
    <?php
      renderImage('th2-u2-lenin.webp','A partir del proceso de la Revolución Soviética, varios participantes, como Lenin, Trotsky y Stalin reflexionaron y escribieron textos sobre la historia, además de escritos sobre su momento histórico. Su visión de la historia, de acuerdo al materialismo histórico orientó los escritos de autores posteriores, tanto soviéticos como europeos. La imagen nos presenta a Lenin en tribuna y Totsky al pie de la misma, en un mitin con miembros del ejército rojo en 1920.','https://upload.wikimedia.org/wikipedia/commons/archive/4/4b/20210309050416%21After_Lenin_Speech_1920.jpg','wikimedia');
  ?>
  </div>



  


</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>